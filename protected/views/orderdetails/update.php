<?php
/* @var $this OrderdetailsController */
/* @var $model Orderdetails */

$this->breadcrumbs=array(
	'Orderdetails'=>array('index'),
	$model->orderNumber=>array('view','id'=>$model->orderNumber),
	'Update',
);

$this->menu=array(
	array('label'=>'List Orderdetails', 'url'=>array('index')),
	array('label'=>'Create Orderdetails', 'url'=>array('create')),
	array('label'=>'View Orderdetails', 'url'=>array('view', 'id'=>$model->orderNumber)),
	array('label'=>'Manage Orderdetails', 'url'=>array('admin')),
);
?>

<h1>Update Orderdetails <?php echo $model->orderNumber; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>