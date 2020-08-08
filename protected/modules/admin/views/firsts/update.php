<?php
/* @var $this FirstsController */
/* @var $model Firsts */

$this->menu=array(
    array('label'=>'View First', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'List Firsts', 'url'=>array('index')),
    array('label'=>'Add Seconds', 'url'=>array('add', 'id'=>$model->id)),
    array('label'=>'Create First', 'url'=>array('create')),
);
?>

<h1>Update Firsts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>