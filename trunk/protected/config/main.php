<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'蛮便宜',
	'language'=>'zh_cn',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.YiiMongoDbSuite.*',	
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'admin'=>array(
				'class'=>'application.modules.Admin.AdminModule',
		),
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'a',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),

	// application components
	/*
	 * in here,can create more db,such as
	 *  'components'=>array(
        'db'=>....// mainlink
         'db1'=>...// formlink1
        'db2'=>...// formlink2
   		 )
   		 eg:Yii::app()->db1和Yii::app()->db2

	 */
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'smarty'=>array(
		    'class'=>'application.extensions.CSmarty',
		),
		'Upload'=>array(
			'class'=>'application.extensions.Upload',
		),
		'thumb'=>array(
			  'class'=>'application.extensions.CThumb',
			  ),
	    'commentSearch'=>array(
            'class'=>'application.extensions.CSolrComponent',
            'host'=>'localhost',
            'port'=>8080,
            'indexPath'=>'/solr/manpianyi'
        ),
        'mongodb' => array(
        		'class'             => 'EMongoDB',
        		'connectionString'  => 'mongodb://mongo.wcc.cc',
        		'dbName'            => 'manpianyi',
        		'fsyncFlag'         => false,
        		'safeFlag'          => false,
        		'useCursor'         => false,
        ),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'cache'=>array(
		    'class'=>'system.caching.CFileCache',
		),
		// uncomment the following to use a MySQL database
		'db'=>array( //db（数据库）组件配置，“db”为组件ID
				'connectionString' => 'sqlite:protected/data/blog.db', //连接数据库的DSN字符串
				'tablePrefix' => 'tbl_', //数据表前缀
		),
// 		'db'=>array(
// 			'connectionString' => 'mysql:host=localhost;dbname=manpianyi',
// 			'emulatePrepare' => true,
// 			'username' => 'root',
// 			'password' => 'root',
// 			'charset' => 'utf8',
// 			'tablePrefix'=>'yl_',
// 		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
//				array(
//					'class'=>'CWebLogRoute',
//					  'levels'=>'trace',
//					  'categories'=>'system.db.*',
//				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		'siteUrl'=>'http://manpianyi.cn/',
		'menu'=>array( '限时折扣' => 'zhekou',
			 '品牌秒杀' => 'brand',
			 '9块9包邮' => 'baoyou',
			 '其他' => 'qita',
			 '女装' => 'nvzhuang',
			 '男装' => 'nanzhuang',
			 '家居' => 'jiaju',
			 '美妆' => 'huazhuangpin',
			 '鞋包' => 'xiebao',
			 '美食' => 'meishi',
			 '配饰' => 'peishi',
			 '母婴' => 'muying',
			 '数码' => 'shuma'),
	),
);
