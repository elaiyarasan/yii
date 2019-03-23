<?php
/* @var $this SslcController */
/* @var $model Sslc */

$this->breadcrumbs=array(
	'Sslcs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sslc', 'url'=>array('index')),
	array('label'=>'Create Sslc', 'url'=>array('create')),
	array('label'=>'Update Sslc', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sslc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sslc', 'url'=>array('admin')),
);
?>

<h1>View Sslc #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tamil',
		'english',
		'maths',
		'science',
		'social',
		'register_number',
	),
)); ?>
