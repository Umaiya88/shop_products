<?php
/* @var $this OrderdetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orderdetails',
);

$this->menu=array(
	array('label'=>'Create Orderdetails', 'url'=>array('create')),
	array('label'=>'Manage Orderdetails', 'url'=>array('admin')),
);
?>
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/order2.png"  alt="" /><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/order3.png"  alt="" /><br><br>
<h1>Orderdetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
