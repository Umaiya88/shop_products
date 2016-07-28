<?php
/* @var $this OfficesController */
/* @var $model Offices */

$this->breadcrumbs=array(
	'Offices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Offices', 'url'=>array('index')),
	array('label'=>'Manage Offices', 'url'=>array('admin')),
);
?>

<h1>Create Offices</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>