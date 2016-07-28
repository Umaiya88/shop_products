<?php
/* @var $this OrderdetailsController */
/* @var $model Orderdetails */

$this->breadcrumbs=array(
	'Orderdetails'=>array('index'),
	$model->orderNumber,
);

$this->menu=array(
	array('label'=>'List Orderdetails', 'url'=>array('index')),
	array('label'=>'Create Orderdetails', 'url'=>array('create')),
	array('label'=>'Update Orderdetails', 'url'=>array('update', 'id'=>$model->orderNumber)),
	array('label'=>'Delete Orderdetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->orderNumber),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Orderdetails', 'url'=>array('admin')),
);
?>

<h1>View Orderdetails #<?php echo $model->orderNumber; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'orderNumber',
		'productName',
		'quantityOrdered',
		'priceEach',
	),
)); ?>
