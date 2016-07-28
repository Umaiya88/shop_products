<?php
/* @var $this EmployeesController */
/* @var $data Employees */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeeNumber')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employeeNumber), array('view', 'id'=>$data->employeeNumber)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeeName')); ?>:</b>
	<?php echo CHtml::encode($data->employeeName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension')); ?>:</b>
	<?php echo CHtml::encode($data->extension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officeCode')); ?>:</b>
	<?php echo CHtml::encode($data->officeCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobtitle')); ?>:</b>
	<?php echo CHtml::encode($data->jobtitle); ?>
	<br />	<br />	<br />


</div>