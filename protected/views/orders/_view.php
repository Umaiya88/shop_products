<?php
/* @var $this OrdersController */
/* @var $data Orders */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderNumber')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->orderNumber), array('view', 'id'=>$data->orderNumber)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderDate')); ?>:</b>
	<?php echo CHtml::encode($data->orderDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requiredDate')); ?>:</b>
	<?php echo CHtml::encode($data->requiredDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippedDate')); ?>:</b>
	<?php echo CHtml::encode($data->shippedDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerName')); ?>:</b>
	<?php echo CHtml::encode($data->customers->customerName); ?>
	<br />	<br />	<br />


</div>