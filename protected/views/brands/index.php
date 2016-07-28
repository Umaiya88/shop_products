<?php
/* @var $this BrandsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Brands',
);

$this->menu=array(
	array('label'=>'Create Brands', 'url'=>array('create')),
	array('label'=>'Manage Brands', 'url'=>array('admin')),
);
?>
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/brand2.png"  alt="" /><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/brand5.png"  alt="" /><br><br>
<h1>Brands</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
