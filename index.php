<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$global=dirname(__FILE__).'/protected/global.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
@putenv('YII_CONSOLE_COMMANDS='. dirname(__FILE__).'/commands' );
require_once($yii);
require_once($global);

Yii::createWebApplication($config)->run();
$smarty = Yii::app()->smarty;
