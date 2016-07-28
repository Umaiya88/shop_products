<?php
/* @var $this OrderdetailsController */
/* @var $data Orderdetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderNumber')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->orderNumber), array('view', 'id'=>$data->orderNumber)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productName')); ?>:</b>
	<?php echo CHtml::encode($data->products->productName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantityOrdered')); ?>:</b>
	<?php echo CHtml::encode($data->quantityOrdered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priceEach')); ?>:</b>
	<?php echo CHtml::encode($data->priceEach); ?>
	<br />	<br />	<br />


</div>