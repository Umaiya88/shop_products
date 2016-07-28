<?php
/* @var $this EmployeesController */
/* @var $model Employees */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->employeeNumber=>array('view','id'=>$model->employeeNumber),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employees', 'url'=>array('index')),
	array('label'=>'Create Employees', 'url'=>array('create')),
	array('label'=>'View Employees', 'url'=>array('view', 'id'=>$model->employeeNumber)),
	array('label'=>'Manage Employees', 'url'=>array('admin')),
);
?>

<h1>Update Employees <?php echo $model->employeeNumber; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>