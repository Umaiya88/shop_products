<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'productcode'); ?>
		<?php echo $form->textField($model,'productcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productName'); ?>
		<?php echo $form->textField($model,'productName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productDescription'); ?>
		<?php echo $form->textField($model,'productDescription',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productVendor'); ?>
		<?php echo $form->textField($model,'productVendor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantityInStock'); ?>
		<?php echo $form->textField($model,'quantityInStock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costPrice'); ?>
		<?php echo $form->textField($model,'costPrice',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingPrice'); ?>
		<?php echo $form->textField($model,'sellingPrice',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brands_brand_id'); ?>
		<?php echo $form->textField($model,'brands_brand_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->