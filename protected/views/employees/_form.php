<?php
/* @var $this EmployeesController */
/* @var $model Employees */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employees-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employeeName'); ?>
		<?php echo $form->textField($model,'employeeName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'employeeName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extension'); ?>
		<?php echo $form->textField($model,'extension',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officeCode'); ?>
		<?php echo $form->textField($model,'officeCode'); ?>
		<?php echo $form->error($model,'officeCode'); ?>
	</div>

	
	
	
	
	
	
	
	
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'jobtitle'); ?>
		<?php echo $form->textField($model,'jobtitle',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'jobtitle'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->