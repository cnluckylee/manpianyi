<?php
class ApiController extends Controller {
	
	public function init()
	{
		header ( "Content-type: text/html; charset=utf-8" );
	}
	/**
	 * Declares class-based actions.
	 */
	public function actions() {
		return array (
				// captcha action renders the CAPTCHA image displayed on the contact page
				'captcha' => array (
						'class' => 'CCaptchaAction',
						'backColor' => 0xFFFFFF 
				),
				// page action renders "static" pages stored under 'protected/views/site/pages'
				// They can be accessed via: index.php?r=site/page&view=FileName
				'page' => array (
						'class' => 'CViewAction' 
				) 
		);
	}
	public function actionindex() {
		$page = Tools::getParam ( 'page', 1 );
		$data = Tbk::model()->findAll();
        $category = array();
        $category['peishi']= array('deal_class'=>'配饰','deal_class_id'=>21);
        $category['jiaju']= array('deal_class'=>'居家','deal_class_id'=>20);
        $category['nanzhuang']= array('deal_class'=>'男装','deal_class_id'=>19);
        $category['nvzhuang']= array('deal_class'=>'女装','deal_class_id'=>1);

        $category['meishi']= array('deal_class'=>'美食','deal_class_id'=>4);
        $category['shuma']= array('deal_class'=>'数码','deal_class_id'=>5);
        $category['muying']= array('deal_class'=>'母婴','deal_class_id'=>6);
        $category['xiebao']= array('deal_class'=>'鞋包','deal_class_id'=>3);

        $category['huazhuangpin']= array('deal_class'=>'美妆','deal_class_id'=>2);
        $category['xiebao']= array('deal_class'=>'鞋包','deal_class_id'=>3);
        $category['baoyou']= array('deal_class'=>'包邮','deal_class_id'=>100);
        $category['zhekou']= array('deal_class'=>'折扣','deal_class_id'=>110);
        $track = new SimpleXMLElement('<opendata/>');

        $track->addChild('datetime',date('Y-m-d H:i:s'));
        $track->addChild('message','Today the new goods');
        $track->addChild('website','http://www.123905.com');

        $track2 = $track->addChild('goodslist');
        foreach($data as $item)
        {
            $url = 'http://www.123905.com/goods/detail/iid-'.$item['skuid'];
            $track3 = $track2->addChild("deal");
            $deal_class = $category[$item['category']]['deal_class'];
            $deal_class_id = $category[$item['category']]['deal_class_id'];
            $track3->addChild('deal_id', $item['skuid']);
            $track3->addChild('deal_title', $item['title']);
            $track3->addChild('deal_image', $item['image_url']);
            $track3->addChild('deal_class', $deal_class);
            $track3->addChild('deal_class_id', $deal_class_id);
            $track3->addChild('deal_price', $item['dprice']);
            $track3->addChild('deal_cost_price', $item['oprice']);
            $track3->addChild('deal_taobao_link', $item['auctionUrl']);
            $track3->addChild('deal_is_mail', '包邮');
            $track3->addChild('deal_sell_status', $item['zkType']);
            $track3->addChild('deal_link', $url);
        $track3->addChild('deal_detail', '');
//            $track->addChild('deal_title', $item['title']);

        }


        Header('Content-type: text/xml');
        print($track->asXML());
		$this->layout = false;

		exit;
	}

}
