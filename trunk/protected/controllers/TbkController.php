<?php
class TbkController extends Controller {
	
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
	public function actionGetgidlist() {
		$page = Tools::getParam ( 'page', 1 );
		$data = TBKAuctionIds::getList ( $page );
		$this->layout = false;
		echo json_encode ( $data );
		exit;
	}
	/**
	 * type 1:淘宝客数据批量更新 2：淘宝客数据单个更新 3：后台传递过来的数据单一更新
	 */
	public function actionUpdategoodsinfo() {
		$type = Tools::getParam('type',1,'post');
		$pagelist = array();
		if($type == 1)
		{
			$tbkjson = $_POST['tbkjson'];
			foreach($tbkjson as $k=>$v)
			{
				$pagelist[$k] = json_decode($v,true);
			}
		}else if($type == 2){
			$strjson = isset($_POST ['tbjson'])?$_POST ['tbjson']:"";
			if(!$strjson)
				exit;
			$tbjson = json_decode ( $strjson, true );
			$pagelist = $tbjson ['data'] ['pagelist'];
		}else if($type == 3){
			$strjson = isset($_POST ['tbjson'])?$_POST ['tbjson']:"";
			if(!$strjson)
				exit;
			$pagelist[0] = json_decode ( $strjson, true );
		}else{
			echo "错误";
			exit;
		}
		Tbk::insertTbk($pagelist);
		exit ();
	}
	public function actionDelgoodsinfo()
	{
		$gid = isset($_POST['gid'])?intval($_POST['gid']):0;
		$cid = isset($_POST['cid'])?intval($_POST['cid']):0;
		if($gid>0 && $cid>0)
		{
			$mongodata = Tbk::model()->findByAttributes(array('auctionId'=>(string)$gid,'category'=>$cid));
			if($mongodata)
			{
				$arr = $mongodata->toArray();
				$arr['status'] = 2;
				$arr['category'] = intval($cid);
				$mongodata->setIsNewRecord(false);
				$mongodata->update($arr,true);
				echo "失效的数据".$gid."<br>";
			}
			$TBKAuctionIds = TBKAuctionIds::model()->findByAttributes(array('auctionId'=>(string)$gid,'category'=>$cid));
			if($TBKAuctionIds)
				$TBKAuctionIds->delete();
		}
	}
	/**
	 * 采集蛮便宜数据
	 */
	public function actionCJManpianyi()
	{
		$caijilist = Caiji::getList('manpianyi');
		foreach($caijilist as $item)
		{
			$pages = array();
			$cid = $item['cid'];
			//服装
			for($ii = 1; $ii <=10; $ii ++) {
				$pages [] = $item['url'].'/'.$item['curl'].'_'.$ii.'.html';
			}
			echo "正在采集category:".$cid."<br>";
			Caiji::Caijipages($pages,$cid);
			//sleep(2);
		}
	}
	/**
	 * 批量更新solr
	 */
	public function actionUpdateSolr()
	{
		$mongodata = Tbk::data2solr();
	}
	
	/**
	 * 批量获取淘宝商品
	 */
	public function actionTBKGoods()
	{
		
		$json = $_POST['tbjson'];
		$data = json_decode($json,true);
		$pagelist = $data['data']['pagelist'];
		Tbk::insertTbk($pagelist);
		exit ();
	}
}
