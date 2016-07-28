<?php
/* @var $this ImageController */
/* @var $data Image */
?>

<div class="view">

	<div class="imgview">
	
	<?php      
	
	                        echo CHtml::link( 
                            CHtml::image(Yii::app()->baseUrl."/uploads/".$data->filename, CHtml::encode($data->alt_text), array('style' => 'width:550px; height: 450px')), 
							Yii::app()->baseUrl."/uploads/". $data->filename, 
                        array('rel'=>'colorBox', 'title'=>CHtml::encode($data->alt_text) 
) 
);
	
	
	
	
	
	
	
?>
	
	
	
	
	
	</div>

</div>