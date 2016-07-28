<?php
/* @var $this BrandsController */
/* @var $data Brands */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->brand_id), array('view', 'id'=>$data->brand_id)); ?>
	<br />	

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_name')); ?>:</b>
	<?php echo CHtml::encode($data->brand_name); ?>
	<br />	<br />	<br />


</div>