<?php
/* @var $this OrdersController */
/* @var $model Orders */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'orderNumber'); ?>
		<?php echo $form->textField($model,'orderNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orderDate'); ?>
		<?php echo $form->textField($model,'orderDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requiredDate'); ?>
		<?php echo $form->textField($model,'requiredDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippedDate'); ?>
		<?php echo $form->textField($model,'shippedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customerNumber'); ?>
		<?php echo $form->textField($model,'customerNumber'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->