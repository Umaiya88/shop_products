<?php
/* @var $this PaymentsController */
/* @var $model Payments */

$this->breadcrumbs=array(
	'Payments'=>array('index'),
	$model->customerNumber,
);

$this->menu=array(
	array('label'=>'List Payments', 'url'=>array('index')),
	array('label'=>'Create Payments', 'url'=>array('create')),
	array('label'=>'Update Payments', 'url'=>array('update', 'id'=>$model->customerNumber)),
	array('label'=>'Delete Payments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->customerNumber),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Payments', 'url'=>array('admin')),
);
?>

<h1>View Payments #<?php echo $model->customerNumber; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'customerNumber',
		'cheekNumber',
		'paymentDate',
		'amount',
	),
)); ?>
