<?php
/* @var $this NoticesController */
/* @var $model Notices */

$this->breadcrumbs=array(
	'Notices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Notices', 'url'=>array('index')),
	array('label'=>'Manage Notices', 'url'=>array('admin')),
);
?>

<h1>Create Notices</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>