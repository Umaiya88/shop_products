<?php
/* @var $this ImageController */
/* @var $model Image */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'image-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
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
        <?php echo $form->labelEx($model,'filename'); ?>
        <?php echo CHtml::activeFileField($model, 'filename'); ?> 
        <?php echo $form->error($model,'filename'); ?>
		</div>
		<?php if($model->isNewRecord!='1'){ ?>
		<div class="row">
		     <?php echo CHtml::filename(Yii::app()->request->baseUrl.'/uploads/'.$model->filename,"filename",array("width"=>550)); ?>  // Image shown here if page is update page
		</div>
		<?php } ?>
	
	

	<div class="row">
		<?php echo $form->labelEx($model,'caption'); ?>
		<?php echo $form->textArea($model,'caption',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'caption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alt_text'); ?>
		<?php echo $form->textArea($model,'alt_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alt_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order'); ?>
		<?php echo $form->error($model,'sort_order'); ?>
	</div>

	
	
	<div class="row">
		<?php echo $form->labelEx($model,'created_dt'); ?>
		
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		'attribute'=>'created_dt',
    'name'=>'created_dt',
	'value'=>$model->created_dt,
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
		
<?php echo $form->error($model,'created_dt'); ?>
	</div>
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'lastupdate_dt'); ?>
		
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		'attribute'=>'lastupdate_dt',
    'name'=>'lastupdate_dt',
	'value'=>$model->lastupdate_dt,
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
		
<?php echo $form->error($model,'lastupdate_dt'); ?>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->