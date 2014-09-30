<?php

/**
 * This is the model class for table "{{tbk}}".
 *
 * The followings are the available columns in table '{{tbk}}':
 * @property integer $id
 * @property string $skuid
 * @property string $auctionType
 * @property string $auctionUrl
 * @property integer $biz30day
 * @property string $calCommission
 * @property integer $all_comment_count
 * @property integer $commission
 * @property string $commissionMoney
 * @property integer $commissionRatePercent
 * @property string $seller_name
 * @property string $image_url
 * @property string $oprice
 * @property string $shopUrl
 * @property string $title
 * @property string $totalFee
 * @property integer $totalNum
 * @property string $userId
 * @property integer $userType
 * @property string $dprice
 * @property string $zkRate
 * @property string $zkType
 * @property string $addtime
 * @property string $updtime
 */
class Tbk extends EMongoDocument {
	/**
	 * Returns the static model of the specified AR class.
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Tbk the static model class
	 */
	public $skuid;
	public $auctionType;
	public $auctionUrl;
	public $biz30day;
	public $calCommission;
	public $all_comment_count;
	public $commissionRatePercent;
	public $seller_name;
	public $oprice;
	public $image_url;
	public $title;
	public $totalFee;
	public $totalNum;
	public $userId;
	public $userNumberId;
	public $userType;
	public $dprice;
	public $zkRate;
	public $zkType;
	public $commission;
	public $commissionMoney;
	public $jsontxt;
	public $shopUrl;
	public $source_url;
	public $category;
	public $updtime;
	public $status;
	public $data_source;
	public $stid;
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
	
	/**
	 *
	 * @return string the associated database table name
	 */
	public function getCollectionName() {
		return 'TbkDb';
	}
	
	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (
				array (
						'skuid',
						'required' 
				),
				array (

						'biz30day, all_comment_count, commission, totalNum, userType,data_source,stid',

						'numerical',
						'integerOnly' => true 
				),
				array (
						'skuid',
						'length',
						'max' => 20 
				),
				array (

						'auctionType, auctionUrl, commissionMoney, seller_name, image_url, shopUrl, title, userId, zkType',
						'length',
						'max' => 255 
				),
				array (
						'calCommission, oprice, totalFee, dprice, zkRate,category',
						'length',
						'max' => 10 
				),
				array (
						'addtime, updtime',
						'safe' 
				),
				// array('jsontxt','length','max'=>1024),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array (
						'id,jsontxt,source_url,data_source,status, skuid,stid, category,auctionType, auctionUrl, biz30day, calCommission, all_comment_count, commission, commissionMoney, commissionRatePercent, seller_name, image_url, oprice, shopUrl, title, totalFee, totalNum, userId, userType, dprice, zkRate, zkType, addtime, updtime',
						'safe',
						'on' => 'search' 
				) 
		);
	}
	
	/**
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array ();
	}
	
	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'id' => 'ID',
				'skuid' => 'Auction',
				'auctionType' => 'Auction Type',
				'auctionUrl' => 'Auction Url',
				'biz30day' => 'Biz30day',
				'calCommission' => 'Cal Commission',
				'all_comment_count' => 'Comment Count',
				'commission' => 'Commission',
				'commissionMoney' => 'Commission Money',
				'commissionRatePercent' => 'Commission Rate Percent',
				'seller_name' => 'seller_name',
				'image_url' => 'Pict Url',
				'oprice' => 'Reserve Price',
				'shopUrl' => 'Shop Url',
				'title' => 'Title',
				'totalFee' => 'Total Fee',
				'totalNum' => 'Total Num',
				'userId' => 'User',
				'userType' => 'User Type',
				'dprice' => 'Zk Price',
				'zkRate' => 'Zk Rate',
				'zkType' => 'Zk Type',
				'addtime' => 'Addtime',
				'updtime' => 'Updtime',
				'jsontxt' => 'jsontxt',
				'source_url' => 'source_url',
				'category' => 'category' ,
				'data_source' =>'data_source',
				'stid'=>'stid'
		);
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * 
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		$criteria = new CDbCriteria ();
		
		$criteria->compare ( 'id', $this->id );
		$criteria->compare ( 'skuid', $this->skuid, true );
		$criteria->compare ( 'auctionType', $this->auctionType, true );
		$criteria->compare ( 'auctionUrl', $this->auctionUrl, true );
		$criteria->compare ( 'biz30day', $this->biz30day );
		$criteria->compare ( 'calCommission', $this->calCommission, true );
		$criteria->compare ( 'all_comment_count', $this->all_comment_count );
		$criteria->compare ( 'commission', $this->commission );
		$criteria->compare ( 'commissionMoney', $this->commissionMoney, true );
		$criteria->compare ( 'commissionRatePercent', $this->commissionRatePercent );
		$criteria->compare ( 'seller_name', $this->seller_name, true );
		$criteria->compare ( 'image_url', $this->image_url, true );
		$criteria->compare ( 'oprice', $this->oprice, true );
		$criteria->compare ( 'shopUrl', $this->shopUrl, true );
		$criteria->compare ( 'title', $this->title, true );
		$criteria->compare ( 'totalFee', $this->totalFee, true );
		$criteria->compare ( 'totalNum', $this->totalNum );
		$criteria->compare ( 'userId', $this->userId, true );
		$criteria->compare ( 'userType', $this->userType );
		$criteria->compare ( 'dprice', $this->dprice, true );
		$criteria->compare ( 'zkRate', $this->zkRate, true );
		$criteria->compare ( 'zkType', $this->zkType, true );
		$criteria->compare ( 'addtime', $this->addtime, true );
		$criteria->compare ( 'updtime', $this->updtime, true );
		$criteria->compare ( 'jsontxt', $this->jsontxt, true );
		$criteria->compare ( 'source_url', $this->source_url );
		$criteria->compare ( 'category', $this->category );
		$criteria->compare ( 'data_source', $this->data_source );
		$criteria->compare ( 'stid', $this->stid );
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
	public static function insertTbk($pagelist) {
		foreach ( $pagelist as $k => $v ) {
			$skuid = $v ['auctionId'];
			$cid = 1;
			if (! $skuid && ! $cid)
				return;
			try {
				$tbk = new Tbk ();
				$tbk->skuid = $skuid;
				$tbk->auctionType = $v ['auctionType'];
				$tbk->auctionUrl = $v ['auctionUrl'];
				$tbk->biz30day = $v ['biz30day'];
				$tbk->calCommission = $v ['calCommission'];
				$tbk->all_comment_count = $v ['commentCount'] > 0 ? intval ( $v ['commentCount'] ) : 0;
				$tbk->commission = $v ['commission'];
				$tbk->commissionMoney = $v ['commissionMoney'];
				$tbk->commissionRatePercent = $v ['commissionRatePercent'];
				$tbk->seller_name = $v ['nick'];
				$tbk->image_url = $v ['pictUrl'];
				$tbk->shopUrl = $v ['shopUrl'];
				$tbk->title = $v ['title'];
				$tbk->totalFee = $v ['totalFee'];
				$tbk->totalNum = intval ( $v ['totalNum'] );
				$tbk->userId = intval ( $v ['userId'] );
				$tbk->dprice = floatval ( $v ['zkPrice'] );
				$tbk->zkRate = floatval ( $v ['zkRate'] );
				$tbk->zkType = $v ['zkType'];
				$tbk->userNumberId = $v ['userNumberId'];
				$tbk->userType = $v ['userType'];
 				$tbk->source_url = $v ['clickUrl'];
 				$tbk->data_source = '2';
 				$tbk->category =  $v ['category'] ;
				$tbk->status = 0;
				$tbk->oprice = floatval ($v ['reservePrice']);
				$tbk->jsontxt = json_encode ( $v );
				$tbk->updtime = time ();
				$tbk->stid=111;
// 				$mongodata = Tbk::model ()->findByAttributes ( array (
// 						'skuid' => ( string ) $skuid,
// 						'category' => intval ( $cid ) 
// 				) );
// 				if ($mongodata) {
// 					$arr = $tbk->toArray ();
// 					$arr ['updtime'] = intval ( time () );
// 					$mongodata->setIsNewRecord ( false );
// 					$mongodata->update ( $arr, true );
// 					echo 1;
// 				} else {

					if (! $tbk->save ()) {
						echo 3;
					} else{
// 						Yii::app()->commentSearch->updateOne($tbk);
						echo 2;
					}
// 				}
			} catch ( Exception $err ) {
				echo 3;
			}
			
		}
		exit ();
	}
	/**
	 * make data 2 solr
	 */
	public static function data2solr()
	{
		ini_set('memory_limit','512M');
		set_time_limit(0);
		$mongodata = Tbk::model()->findAll();
		$inmongodb = array();
		foreach($mongodata as $id=>$item)
		{
			$inmongodb[] = array('skuid'=>$item['skuid'],'source_url'=>$item['source_url'],'oprice'=>$item['oprice'],'dprice'=>$item['dprice']
								,'cprice'=>$item['totalFee'],'image_url'=>$item['image_url'],'stid'=>$item['stid'],'title'=>$item['title']
								,'category'=>$item['category'],'all_comment_count'=>$item['all_comment_count'],'zkType'=>$item['zkType']
								,'status'=>1,'updtime'=>$item['updtime']);
// 			Yii::app()->commentSearch->updateOne($inmongodb);
		}
		
		Yii::app()->commentSearch->updateMany($inmongodb);
		exit("solrok");
	}
}
