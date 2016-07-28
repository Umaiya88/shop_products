<?php
/* @var $this NoticesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Notices',
);

$this->menu=array(
	array('label'=>'Create Notices', 'url'=>array('create')),
	array('label'=>'Manage Notices', 'url'=>array('admin')),
);
?>

<h1>Notices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
