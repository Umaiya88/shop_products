<?php
/* @var $this PaymentsController */
/* @var $model Payments */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'customerNumber'); ?>
		<?php echo $form->textField($model,'customerNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cheekNumber'); ?>
		<?php echo $form->textField($model,'cheekNumber',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentDate'); ?>
		<?php echo $form->textField($model,'paymentDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->