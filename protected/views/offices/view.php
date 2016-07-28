<?php
/* @var $this OfficesController */
/* @var $model Offices */

$this->breadcrumbs=array(
	'Offices'=>array('index'),
	$model->officeCode,
);

$this->menu=array(
	array('label'=>'List Offices', 'url'=>array('index')),
	array('label'=>'Create Offices', 'url'=>array('create')),
	array('label'=>'Update Offices', 'url'=>array('update', 'id'=>$model->officeCode)),
	array('label'=>'Delete Offices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->officeCode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Offices', 'url'=>array('admin')),
);
?>

<h1>View Offices #<?php echo $model->officeCode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'officeCode',
		'city',
		'phone',
		'address',
		'country',
		'territory',
	),
)); ?>
