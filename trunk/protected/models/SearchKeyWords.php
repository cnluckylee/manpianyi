<?php


class SearchKeyWords extends EMongoDocument {
	/**
	 * Returns the static model of the specified AR class.
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Tbk the static model class
	 */
	public $keywords;
	public $addtime;
	public $updtime;
	public $searchcount;
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
	
	/**
	 *
	 * @return string the associated database table name
	 */
	public function getCollectionName() {
		return 'SearchKeyWords';
	}
	
	public function primaryKey()
	{
		return '_id';
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
						'keywords',
						'required' 
				),
				array (
						'searchcount',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'keywords',
						'length',
						'max' => 200 
				),

				array (
						'addtime,updtime',
						'safe' 
				),
				// array('jsontxt','length','max'=>1024),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array (
						'addtime,updtime,keywords,searchcount',
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
				'keywords' => '关键词',
				'addtime' => '添加时间',
				'updtime' => '更新时间',
				'searchcount' => '搜索次数',
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
		
		$criteria = new EMongoCriteria ();
		if($this->keywords)
			$criteria->keywords = new MongoRegex('/['.$this->keywords.'].*/i');
		return new EMongoDocumentDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
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
}
