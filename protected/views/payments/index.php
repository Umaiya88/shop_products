<?php
/* @var $this PaymentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Payments',
);

$this->menu=array(
	array('label'=>'Create Payments', 'url'=>array('create')),
	array('label'=>'Manage Payments', 'url'=>array('admin')),
);
?>
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/payment4.png"  alt="" /><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/payment1.png"  alt="" /><br><br>
<h1>Payments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
