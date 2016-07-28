<?php
/* @var $this NoticesController */
/* @var $data Notices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notice_date')); ?>:</b>
	<?php echo CHtml::encode($data->notice_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notice_text')); ?>:</b>
	<?php echo CHtml::encode($data->notice_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_link')); ?>:</b>
	<?php echo CHtml::encode($data->news_link); ?>
	<br />


</div>