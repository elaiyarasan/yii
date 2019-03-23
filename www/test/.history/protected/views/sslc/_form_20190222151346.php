<?php
/* @var $this SslcController */
/* @var $model Sslc */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sslc-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tamil'); ?>
		<?php echo $form->textField($model,'tamil'); ?>
		<?php echo $form->error($model,'tamil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'english'); ?>
		<?php echo $form->textField($model,'english'); ?>
		<?php echo $form->error($model,'english'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maths'); ?>
		<?php echo $form->textField($model,'maths'); ?>
		<?php echo $form->error($model,'maths'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'science'); ?>
		<?php echo $form->textField($model,'science'); ?>
		<?php echo $form->error($model,'science'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'social'); ?>
		<?php echo $form->textField($model,'social'); ?>
		<?php echo $form->error($model,'social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'register_number'); ?>
		<?php echo $form->textField($model,'register_number'); ?>
		<?php echo $form->error($model,'register_number'); ?>
	</div>
	<div class="row">
		 
	</div>

	<div>
	<?php echo $form->labelEx($model,'File');
	 $this->widget('CMultiFileUpload', array(
		'model'=>$model,
		'attribute'=>'photos',
		'accept'=>'jpg|gif|png',
		'options'=>array(
		   // 'onFileSelect'=>'function(e, v, m){ alert("onFileSelect - "+v) }',
		   // 'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
		   // 'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
		   // 'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
		   // 'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
		   // 'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
		),
		'denied'=>'File is not allowed',
		'max'=>10, // max 10 files
   
   
	 ));

	?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->