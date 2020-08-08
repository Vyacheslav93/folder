<?php
/* @var $this SecondsController */
/* @var $model Seconds */

$this->menu=array(
	array('label'=>'List Seconds', 'url'=>array('index')),
	array('label'=>'Create Second', 'url'=>array('create')),
	array('label'=>'View Second', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Seconds <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>