<?php
/* @var $this SslcController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sslcs',
);

$this->menu=array(
	array('label'=>'Create Sslc', 'url'=>array('create')),
	array('label'=>'Manage Sslc', 'url'=>array('admin')),
);
?>

<h1>Sslcs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
