<?php
/* @var $this CustomersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customers',
);

$this->menu=array(
	array('label'=>'Create Customers', 'url'=>array('create')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customer1.png"  alt="" /><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customer2.png"  alt="" />
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customer3.png"  alt="" /><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customer5.png"  alt="" /><br><br>
<h1>Customers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
