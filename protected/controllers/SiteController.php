<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
	public function actionIndex()
	{
		$keyword = Tools::getParam('keyword');
		$page = Tools::getParam('page',1);
		$cid = Tools::getParam('cid');
		$sort= Tools::getParam('sort',1);
		$data = Goods::getlistBySolr($keyword,$page,$cid,$sort);
		if($cid>0)
		{
			$obj = Category::model()->findByPk($cid);
			$this->pageTitle = $obj?$obj->name:"".'-'.$this->pageTitle;
		}
		
		if(isset($_GET['_']))
		{
			$this->layout = false;
		}else
		{
			$caiji = Categorylist::getList();
			$data['categorylist'] = $caiji;
		}
		
		$data['sort'] = $sort;
		$this->render('index',$data);
	}
	public function actionJump()
	{
		$id = Tools::getParam('id');
		
		$goods = Goods::findOneBySolr($id);
		$url = $goods?$goods->source_url:'http://manpianyi.cn';
		
		header('Location: '.$url);
		exit;
	}


	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
