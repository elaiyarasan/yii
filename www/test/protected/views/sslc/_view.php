<?php
/* @var $this SslcController */
/* @var $data Sslc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamil')); ?>:</b>
	<?php echo CHtml::encode($data->tamil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('english')); ?>:</b>
	<?php echo CHtml::encode($data->english); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maths')); ?>:</b>
	<?php echo CHtml::encode($data->maths); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('science')); ?>:</b>
	<?php echo CHtml::encode($data->science); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('social')); ?>:</b>
	<?php echo CHtml::encode($data->social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('register_number')); ?>:</b>
	<?php echo CHtml::encode($data->register_number); ?>
	<br />


</div>