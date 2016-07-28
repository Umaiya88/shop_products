<?php
/* @var $this EmployeesController */
/* @var $model Employees */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'employeeNumber'); ?>
		<?php echo $form->textField($model,'employeeNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employeeName'); ?>
		<?php echo $form->textField($model,'employeeName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extension'); ?>
		<?php echo $form->textField($model,'extension',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'officeCode'); ?>
		<?php echo $form->textField($model,'officeCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jobtitle'); ?>
		<?php echo $form->textField($model,'jobtitle',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->