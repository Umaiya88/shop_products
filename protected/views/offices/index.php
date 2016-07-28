<?php
/* @var $this OfficesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Offices',
);

$this->menu=array(
	array('label'=>'Create Offices', 'url'=>array('create')),
	array('label'=>'Manage Offices', 'url'=>array('admin')),
);
?>
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/office1.jpg"  alt="" /><br><br>
<h1>Offices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
