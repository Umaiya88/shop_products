<?php
/* @var $this OrdersController */
/* @var $model Orders */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->orderNumber,
);

$this->menu=array(
	array('label'=>'List Orders', 'url'=>array('index')),
	array('label'=>'Create Orders', 'url'=>array('create')),
	array('label'=>'Update Orders', 'url'=>array('update', 'id'=>$model->orderNumber)),
	array('label'=>'Delete Orders', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->orderNumber),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Orders', 'url'=>array('admin')),
);
?>

<h1>View Orders #<?php echo $model->orderNumber; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'orderNumber',
		'orderDate',
		'requiredDate',
		'shippedDate',
		'status',
		'comment',
		'customerName',
	),
)); ?>
