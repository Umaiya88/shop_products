<?php
/* @var $this NoticesController */
/* @var $model Notices */
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
		<?php echo $form->label($model,'notice_date'); ?>
		<?php echo $form->textField($model,'notice_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notice_text'); ?>
		<?php echo $form->textField($model,'notice_text',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'news_link'); ?>
		<?php echo $form->textField($model,'news_link',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->