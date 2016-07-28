<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->productcode=>array('view','id'=>$model->productcode),
	'Update',
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'View Products', 'url'=>array('view', 'id'=>$model->productcode)),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>

<h1>Update Products <?php echo $model->productcode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>