<?php
/* @var $this OrderdetailsController */
/* @var $model Orderdetails */

$this->breadcrumbs=array(
	'Orderdetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Orderdetails', 'url'=>array('index')),
	array('label'=>'Manage Orderdetails', 'url'=>array('admin')),
);
?>

<h1>Create Orderdetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>