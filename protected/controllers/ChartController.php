<?php
class ChartController extends CController
{
public function actionIndex()
{
$value = rand(90,10);
$this->widget('ext.chart.EChartWidget', array(
'title' => 'Do you Like Toyota Car?',
'data' => array(
$value, 100-$value
),
'labels' => array(
'No',
'Yes',

),
));
}
}