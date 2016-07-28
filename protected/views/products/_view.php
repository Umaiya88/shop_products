<?php
/* @var $this ProductsController */
/* @var $data Products */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('productcode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->productcode), array('view', 'id'=>$data->productcode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productName')); ?>:</b>
	<?php echo CHtml::encode($data->productName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productDescription')); ?>:</b>
	<?php echo CHtml::encode($data->productDescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productVendor')); ?>:</b>
	<?php echo CHtml::encode($data->productVendor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantityInStock')); ?>:</b>
	<?php echo CHtml::encode($data->quantityInStock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costPrice')); ?>:</b>
	<?php echo CHtml::encode($data->costPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingPrice')); ?>:</b>
	<?php echo CHtml::encode($data->sellingPrice); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('brands_brand_id')); ?>:</b>
	<?php echo CHtml::encode($data->brandsBrand->brand_name); ?>
	<br /><br /><br />

	

</div>