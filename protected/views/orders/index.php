<?php
/* @var $this OrdersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orders',
);

$this->menu=array(
	array('label'=>'Create Orders', 'url'=>array('create')),
	array('label'=>'Manage Orders', 'url'=>array('admin')),
);
?>
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/order4.png"  alt="" /><br><br>
<h1>Orders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
