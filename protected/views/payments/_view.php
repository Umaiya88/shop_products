<?php
/* @var $this PaymentsController */
/* @var $data Payments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerNumber')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->customerPayments->customerName), array('view', 'id'=>$data->customerPayments->customerName)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cheekNumber')); ?>:</b>
	<?php echo CHtml::encode($data->cheekNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentDate')); ?>:</b>
	<?php echo CHtml::encode($data->paymentDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />	<br />	<br />


</div>