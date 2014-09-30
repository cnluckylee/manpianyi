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
class Categorylist extends EMongoDocument
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tbk the static model class
	 */
	public $name;
	public $cid;
	public $sid;

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
    public function getCollectionName()
    {
        return 'Categorylist';
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

			array('name, cid,sid', 'safe', 'on'=>'search'),
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
			'name' => 'name',
			'cid' => 'cid',
			'sid' => 'sid',
			
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

		
		$criteria->compare('name',$this->name,true);
		
		$criteria->compare('cid',$this->cid,true);
		$criteria->compare('sid',$this->sid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function getList()
	{

		$data = self::model()->findAll();
		$result = array();
		$gids = array();
		foreach($data as $i)
		{
			$gids[$i->name][] = $i->name;
		}
		return $gids;
	}
}
