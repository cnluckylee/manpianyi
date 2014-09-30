<?php

/**
 * This is the model class for table "{{tbk}}".
 *
 * The followings are the available columns in table '{{tbk}}':
 * @property string $auctionId

 * @property string $addtime
 * @property string $updtime
 * @property string $status
 */
class TBKAuctionIds extends EMongoDocument
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tbk the static model class
	 */
	public $auctionId;
	public $category;
	public $status;
	public $addtime;
	public $updtime;
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
    public function getCollectionName()
    {
        return 'TBKAuctionIds';
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('auctionId', 'required'),
			//array('auctionId,category,status', 'numerical', 'integerOnly'=>true),			
			array('addtime, updtime', 'safe'),
			array('auctionId, category,status,addtime, updtime', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'auctionId' => 'Auction',
			'addtime' => 'Addtime',
			'updtime' => 'Updtime',
			'status' => 'status',
			'category' => 'category',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		
		$criteria->compare('auctionId',$this->auctionId,true);
		
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('updtime',$this->updtime,true);
		$criteria->compare('status',$this->status,true);

		$criteria->compare('category',$this->category);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function getList($page = 1,$pagesize = 1)
	{
		
		$criteria = new EMongoCriteria;
	
		$start = $page*$pagesize;
  		$criteria->addCond('updtime', '>=', strtotime('-1 day'));
//  		$criteria->addCond('category', '==', 18);
		$count = self::model()->count($criteria);
		$criteria->limit($pagesize)->offset($start);
		$data = self::model()->findAll($criteria);
		$result = array();
		$gids = array();
		foreach($data as $i)
		{
			$gids[$i->category][] = $i->auctionId;
		}
		$result['gids'] = $gids;
		$result['totalnum'] = $count;
		return $result;
	}
}
