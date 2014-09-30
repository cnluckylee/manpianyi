<?php

/**
 * This is the model class for table "{{caiji}}".
 *
 * The followings are the available columns in table '{{caiji}}':
 * @property integer $id
 * @property string $url
 * @property string $name
 * @property integer $cid
 * @property string $curl
 */
class Caiji extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Caiji the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{caiji}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cid', 'numerical', 'integerOnly'=>true),
			array('url, name, curl', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, url, name, cid, curl', 'safe', 'on'=>'search'),
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
			'url' => 'Url',
			'name' => 'Name',
			'cid' => 'Cid',
			'curl' => 'Curl',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('curl',$this->curl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public static function getList($source='manpianyi')
	{

		$result = array();
		$caiji = self::model()->findAll('source="'.$source.'" and status=1');
		foreach($caiji as $i)
		{
			$arr = $i->attributes;
			$result[] = $arr;
		}
		return $result;
	}
	public static function Caijipages($pages,$cid)
	{
		$preg = '/shoucang\((.*),\'/i';
		$curl = $curl = new Curl();

		$pagedatas = $curl->remote($pages);
	
		foreach($pagedatas as $k=>$page)
		{
			preg_match_all ( $preg, $page, $match );
			if(isset($match[1]))
			{
				self::TBKAuctionIds2mongodb($match[1],$cid);
			}
		}
	}
	public static function TaohuopuPages($pages,$cid)
	{
		$preg = '/pice_(.*)\.html/i';
		$curl = new Curl();
	
		$pagedatas = $curl->remote($pages);
	
		foreach($pagedatas as $k=>$page)
		{
			preg_match_all ( $preg, $page, $match );
			if(isset($match[1]))
			{
				self::TaohuopuItems($match[1],$cid);
			}
		}
	}
	public static function TaohuopuItems($pages,$cid)
	{
		$newpages = array();
		$curl = new Curl();
		$data = array();
		foreach($pages as $pnum)
		{
			$newpages[] = 'http://detail.taohuopu.com/pice_'.$pnum.'.html';
		}

		$newpagedatas = $curl->remote($newpages);
		foreach($newpagedatas as $page)
		{
			$preg = '/biz-itemid="(.*)" data-tmpl="278x278"/i';
			preg_match_all ( $preg, $page, $match );
			if(isset($match[1][0]) && $match[1][0]>0)
			{	
				$data[] = $match[1][0];			
			}
		}
		
		if($data)
			self::TBKAuctionIds2mongodb($data,$cid);
		else
			echo "分类：".$cid."下是空白的"."<br>";
	}
	public static function TBKAuctionIds2mongodb($data,$cid)
	{
		foreach($data as $k=>$v)
		{
			$mongodata = TBKAuctionIds::model()->findByAttributes(array('auctionId'=>$v,'category'=>intval($cid)));
			if($mongodata){
				$arr = $mongodata->toArray();
				$arr['updtime'] = time();
				$mongodata->setIsNewRecord(false);
				$mongodata->update($arr,true);
			}else{
				$Auc = new TBKAuctionIds();
				$Auc->auctionId = $v;
				$Auc->category = intval($cid);
				$Auc->status = 0;
				$Auc->addtime = $Auc->updtime = intval(time());
				if(!$Auc->save())
				{
					print_r($Auc);
				}
			}
		}
	}
}