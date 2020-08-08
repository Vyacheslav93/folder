<?php
/* @var $this SecondsController */
/* @var $model Seconds */

$this->menu=array(
	array('label'=>'List Seconds', 'url'=>array('index')),
);
echo $model->id;
?>

<h1>Create Seconds</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>