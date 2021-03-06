<?php
/* @var $this PaymentsController */
/* @var $model Payments */

$this->breadcrumbs=array(
	'Payments'=>array('index'),
	$model->customerNumber=>array('view','id'=>$model->customerNumber),
	'Update',
);

$this->menu=array(
	array('label'=>'List Payments', 'url'=>array('index')),
	array('label'=>'Create Payments', 'url'=>array('create')),
	array('label'=>'View Payments', 'url'=>array('view', 'id'=>$model->customerNumber)),
	array('label'=>'Manage Payments', 'url'=>array('admin')),
);
?>

<h1>Update Payments <?php echo $model->customerNumber; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>