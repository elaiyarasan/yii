<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../../Yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
error_log('hello'.print_r($config,true));
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
//stop the error
// error_reporting(E_ERROR | E_PARSE);

require_once($yii);
Yii::createWebApplication($config)->run();
