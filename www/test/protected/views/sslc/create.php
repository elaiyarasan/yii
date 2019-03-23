<?php
/* @var $this SslcController */
/* @var $model Sslc */

$this->breadcrumbs=array(
	'Sslcs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sslc', 'url'=>array('index')),
	array('label'=>'Manage Sslc', 'url'=>array('admin')),
);
?>

<h1>Create Sslc</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>