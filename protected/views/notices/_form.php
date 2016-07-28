<?php
/* @var $this NoticesController */
/* @var $model Notices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notices-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notice_date'); ?>
		<?php echo $form->textField($model,'notice_date'); ?>
		<?php echo $form->error($model,'notice_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notice_text'); ?>
		<?php echo $form->textField($model,'notice_text',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'notice_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news_link'); ?>
		<?php echo $form->textField($model,'news_link',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'news_link'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->