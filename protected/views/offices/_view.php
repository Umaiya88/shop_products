<?php
/* @var $this OfficesController */
/* @var $data Offices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('officeCode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->officeCode), array('view', 'id'=>$data->officeCode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('territory')); ?>:</b>
	<?php echo CHtml::encode($data->territory); ?>
	<br />	<br />	<br />


</div>