<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'productName'); ?>
		<?php echo $form->textField($model,'productName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'productName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productDescription'); ?>
		<?php echo $form->textField($model,'productDescription',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'productDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productVendor'); ?>
		<?php echo $form->textField($model,'productVendor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'productVendor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantityInStock'); ?>
		<?php echo $form->textField($model,'quantityInStock'); ?>
		<?php echo $form->error($model,'quantityInStock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costPrice'); ?>
		<?php echo $form->textField($model,'costPrice',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'costPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingPrice'); ?>
		<?php echo $form->textField($model,'sellingPrice',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sellingPrice'); ?>
	</div>

	
	
<div class="row">
		<?php echo $form->labelEx($model,'brands_brand_id'); ?>
		<?php $brands= Brands::model()->findAll();?>
		
		<?php echo $form->dropDownList($model,'brands_brand_id',
		CHtml::listData($brands,'brand_id','brand_name')); ?>
		<?php echo $form->error($model,'brands_brand_id'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->