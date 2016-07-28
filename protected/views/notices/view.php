<?php
/* @var $this NoticesController */
/* @var $model Notices */

$this->breadcrumbs=array(
	'Notices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Notices', 'url'=>array('index')),
	array('label'=>'Create Notices', 'url'=>array('create')),
	array('label'=>'Update Notices', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Notices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Notices', 'url'=>array('admin')),
);
?>

<h1>View Notices #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'notice_date',
		'notice_text',
		'news_link',
	),
)); ?>
