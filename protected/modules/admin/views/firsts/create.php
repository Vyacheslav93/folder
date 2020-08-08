<?php
/* @var $this FirstsController */
/* @var $model Firsts */

$this->menu=array(
	array('label'=>'List Firsts', 'url'=>array('index')),
);
?>

<h1>Create Firsts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>