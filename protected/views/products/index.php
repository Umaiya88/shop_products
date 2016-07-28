<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products',
);

$this->menu=array(
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/car1.png"  alt="" /><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/car2.jpg"  alt="" />
<br><br><h1>Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
