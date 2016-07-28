<?php
/* @var $this PaymentsController */
/* @var $model Payments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payments-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cheekNumber'); ?>
		<?php echo $form->textField($model,'cheekNumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cheekNumber'); ?>
	</div>

	
	
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'paymentDate'); ?>
		
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		'attribute'=>'paymentDate',
    'name'=>'paymentDate',
	'value'=>$model->paymentDate,
	'model'=>$model,
    // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'slide',
		'showButtonPanel'=>true,
		'dateFormat'=>'yy-mm-dd',
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;'
    ),
));
		?>
		
<?php echo $form->error($model,'paymentDate'); ?>
	</div>		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->