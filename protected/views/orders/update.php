<?php
/* @var $this OrdersController */
/* @var $model Orders */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->orderNumber=>array('view','id'=>$model->orderNumber),
	'Update',
);

$this->menu=array(
	array('label'=>'List Orders', 'url'=>array('index')),
	array('label'=>'Create Orders', 'url'=>array('create')),
	array('label'=>'View Orders', 'url'=>array('view', 'id'=>$model->orderNumber)),
	array('label'=>'Manage Orders', 'url'=>array('admin')),
);
?>

<h1>Update Orders <?php echo $model->orderNumber; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>