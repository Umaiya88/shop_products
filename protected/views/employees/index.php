<?php
/* @var $this EmployeesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employees',
);

$this->menu=array(
	array('label'=>'Create Employees', 'url'=>array('create')),
	array('label'=>'Manage Employees', 'url'=>array('admin')),
);
?>
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/employee4.png"  alt="" /><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/employee1.jpg"  alt="" /><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/employee3.png"  alt="" /><br><br>
<h1>Employees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
