<?php
/* @var $this OrdersController */
/* @var $model Orders */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orders-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<div class="row">
		<?php echo $form->labelEx($model,'orderDate'); ?>
		
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		'attribute'=>'orderDate',
    'name'=>'orderDate',
	'value'=>$model->orderDate,
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
		
<?php echo $form->error($model,'orderDate'); ?>
	</div>
	

	
<div class="row">
		<?php echo $form->labelEx($model,'requiredDate'); ?>
		
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		'attribute'=>'requiredDate',
    'name'=>'requiredDate',
	'value'=>$model->requiredDate,
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
		
<?php echo $form->error($model,'requiredDate'); ?>
	</div>	
	
	
	
	
	
<div class="row">
		<?php echo $form->labelEx($model,'shippedDate'); ?>
		
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		'attribute'=>'shippedDate',
    'name'=>'shippedDate',
	'value'=>$model->shippedDate,
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
		
<?php echo $form->error($model,'shippedDate'); ?>
	</div>		
	
	
	
	
<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	
<div class="row">
		<?php echo $form->labelEx($model,'customerNumber'); ?>
		<?php $customers= Customers::model()->findAll();?>
		
		<?php echo $form->dropDownList($model,'customerNumber',
		CHtml::listData($customers,'customerNumber','customerName')); ?>
		<?php echo $form->error($model,'customerNumber'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->