<?php
/* @var $this CustomersController */
/* @var $model Customers */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->customerNumber,
);

$this->menu=array(
	array('label'=>'List Customers', 'url'=>array('index')),
	array('label'=>'Create Customers', 'url'=>array('create')),
	array('label'=>'Update Customers', 'url'=>array('update', 'id'=>$model->customerNumber)),
	array('label'=>'Delete Customers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->customerNumber),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>

<h1>View Customers #<?php echo $model->customerNumber; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'customerNumber',
		'customerName',
		'phone',
		'address',
		'city',
		'country',
		'salesRepEmployeeNumber',
	),
)); ?>
