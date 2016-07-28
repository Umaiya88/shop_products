<?php
/* @var $this OrderdetailsController */
/* @var $model Orderdetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orderdetails-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	
	
	<div class="row">
		<?php echo $form->labelEx($model,'productcode'); ?>
		<?php $products= Products::model()->findAll();?>
		
		<?php echo $form->dropDownList($model,'productcode',
		CHtml::listData($products,'productcode','productName')); ?>
		<?php echo $form->error($model,'productcode'); ?>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'quantityOrdered'); ?>
		<?php echo $form->textField($model,'quantityOrdered'); ?>
		<?php echo $form->error($model,'quantityOrdered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priceEach'); ?>
		<?php echo $form->textField($model,'priceEach'); ?>
		<?php echo $form->error($model,'priceEach'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->