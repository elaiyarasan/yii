<?php
/* @var $this SslcController */
/* @var $model Sslc */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tamil'); ?>
		<?php echo $form->textField($model,'tamil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'english'); ?>
		<?php echo $form->textField($model,'english'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maths'); ?>
		<?php echo $form->textField($model,'maths'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'science'); ?>
		<?php echo $form->textField($model,'science'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'social'); ?>
		<?php echo $form->textField($model,'social'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'register_number'); ?>
		<?php echo $form->textField($model,'register_number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->