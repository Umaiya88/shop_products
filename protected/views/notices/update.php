<?php
/* @var $this NoticesController */
/* @var $model Notices */

$this->breadcrumbs=array(
	'Notices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Notices', 'url'=>array('index')),
	array('label'=>'Create Notices', 'url'=>array('create')),
	array('label'=>'View Notices', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Notices', 'url'=>array('admin')),
);
?>

<h1>Update Notices <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>