<?php
/* @var $this OrderdetailsController */
/* @var $model Orderdetails */
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
		<?php echo $form->label($model,'productcode'); ?>
		<?php echo $form->textField($model,'productcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantityOrdered'); ?>
		<?php echo $form->textField($model,'quantityOrdered'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priceEach'); ?>
		<?php echo $form->textField($model,'priceEach'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->