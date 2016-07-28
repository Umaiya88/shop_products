<?php
/* @var $this OfficesController */
/* @var $model Offices */

$this->breadcrumbs=array(
	'Offices'=>array('index'),
	$model->officeCode=>array('view','id'=>$model->officeCode),
	'Update',
);

$this->menu=array(
	array('label'=>'List Offices', 'url'=>array('index')),
	array('label'=>'Create Offices', 'url'=>array('create')),
	array('label'=>'View Offices', 'url'=>array('view', 'id'=>$model->officeCode)),
	array('label'=>'Manage Offices', 'url'=>array('admin')),
);
?>

<h1>Update Offices <?php echo $model->officeCode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>