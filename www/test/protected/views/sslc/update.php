<?php
/* @var $this SslcController */
/* @var $model Sslc */

$this->breadcrumbs=array(
	'Sslcs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sslc', 'url'=>array('index')),
	array('label'=>'Create Sslc', 'url'=>array('create')),
	array('label'=>'View Sslc', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sslc', 'url'=>array('admin')),
);
?>

<h1>Update Sslc <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>