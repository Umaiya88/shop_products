<?php
/* @var $this ImageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Images',
);

$this->menu=array(
	array('label'=>'Create Image', 'url'=>array('create')),
	array('label'=>'Manage Image', 'url'=>array('admin')),
);
?>
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery1.png"  alt="" /> <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery2.png"  alt="" />
<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery3.png"  alt="" /> <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/gallery4.png"  alt="" /><br><br>
<h1>Image Gallery</h1>
<br></br>






<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
