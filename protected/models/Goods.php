<?php

/**
 * This is the model class for table "{{goods}}".
 *
 * The followings are the available columns in table '{{goods}}':
 * @property integer $id
 * @property string $name
 * @property string $price
 * @property string $url
 * @property integer $sold
 * @property integer $source
 * @property string $addtime
 * @property string $updtime
 * @property string $sourceurl
 * @property string $tburl
 * @property string $desct
 * @property string $keywords
 * @property string $descr
 */
class Goods extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Goods the static model class
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
		return '{{goods}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sold, source,i2m', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			array('price', 'length', 'max'=>10),
			array('url, sourceurl, tburl, keywords', 'length', 'max'=>355),
			array('addtime, updtime, desct', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, price,i2m, url, sold, source, addtime, updtime, sourceurl, tburl, desct, keywords, descr', 'safe', 'on'=>'search'),
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
			'id' => '序号',
			'name' => '商品名称',
			'price' => '价格',
			'url' => 'url地址',
			'sold' => '销售数量',
			'source' => '来源',
			'addtime' => 'Addtime',
			'updtime' => '更新时间',
			'sourceurl' => '来源url',
			'tburl' => '淘宝url',
			'desct' => '商品详情',
			'keywords' => '关键词',
			'descr' => '描述',
			'i2m'=>'写入mongodb'
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('sold',$this->sold);
		$criteria->compare('source',$this->source);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('updtime',$this->updtime,true);
		$criteria->compare('sourceurl',$this->sourceurl,true);
		$criteria->compare('tburl',$this->tburl,true);
		$criteria->compare('desct',$this->desct,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('descr',$this->descr,true);
		$criteria->compare('i2m',$this->i2db,true);
		$criteria->order='updtime desc';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->addtime=$this->updtime=date('Y-m-d H:i:s');
			}else{
				$this->updtime=date('Y-m-d H:i:s');
			}
		return true;
		}
		else
			return false;
	}

	public static  function getGidList($p=1)
	{
		$criteria = new CDbCriteria();
		
		$criteria->addCondition('gid>0');
		$criteria->addCondition('i2m=0');
		$criteria->select = 'id,gid';
		$count = self::model()->count($criteria);
		$pager = new CPagination($count);
		$pager->pageSize = 1;
		$pager->applyLimit($criteria);
		$artList = self::model()->findAll($criteria);
		$gids = array();
		foreach($artList as $i)
		{
			$gids[$i->id] = $i->gid;
		}
		return $gids;
	}
	
	public static function getlistBySolr($keyword=null,$page=1,$cid=null,$sort=1)
	{
		$where = 'title:["" TO *]';
// 		if($cid == 2)
// 			$where .='category:[11 TO 22]';
		if($cid)
			$where .=' AND category:'.$cid;
		if($sort==1)
			$additionalParameters=array('sort'=>'updtime desc');
		else if($sort==2)
			$additionalParameters=array('sort'=>'all_comment_count desc');
		$pagesize = 40;
		$countstart = ($page-1)*$pagesize;
		if($keyword)
		{
			$where = ' title:*'.$keyword.'*';
		}

		$result = Yii::app()->commentSearch->get($where,$countstart,$pagesize,$additionalParameters);
		$data = array();
		if($result)
		{
			foreach($result->response->docs as $doc){
				$oldPrice = $doc->oprice;
				
				$data['posts'][] = array('id'=>$doc->skuid,'name'=>$doc->title,
						'pic'=>$doc->image_url,'all_comment_count'=>$doc->all_comment_count,'price'=>$doc->oprice,'zkType'=>$doc->zkType,'oldprice'=>$oldPrice);
			}
			$pager = new CPagination($result->response->numFound);
			$pager->pageSize = $pagesize;
			$data['pages'] = $pager;
			$data['totalpages'] = ceil($result->response->numFound/$pagesize);
		}
		return $data;
	}
	
	public static function findOneBySolr($id)
	{
		$where = 'skuid:'.$id;
		$result = Yii::app()->commentSearch->get($where,0,1);
		if($result)
		{
			if($result->response->numFound>0)
			{
				foreach($result->response->docs as $doc){
					$data = $doc;
				}
			}
				return $data;
		}
		return null;
	}
}