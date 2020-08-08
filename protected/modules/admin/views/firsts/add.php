<?php
/* @var $this FirstsController */
/* @var $model Seconds */
/* @var $form CActiveForm */

$this->menu=array(
    array('label'=>'View First', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'List Firsts', 'url'=>array('index')),
    array('label'=>'Create First', 'url'=>array('create')),
    array('label'=>'Update First', 'url'=>array('update', 'id'=>$model->id)),
);
?>
<div class="form">
    <?php echo CHtml::beginForm(); ?>
        <?php if (empty($items)){
            echo "<h1>No available seconds</h1>";
            echo "<br>";
        }else{?>

        <?php foreach($items as $i=>$item): ?>
            <?php// var_dump($item);?>
                <?php echo CHtml::link(CHtml::encode($item->name). ' ' .CHtml::encode($item->lastname), array('seconds/view', 'id'=>$item['id'])); "<br>"; ?>
                <?php echo CHtml::activeCheckBox($item,"[$i]first_id"). "<br>"; ?>
        <?php endforeach; ?>
    <?php } ?>

    <?php echo CHtml::submitButton('Сохранить'); ?>
    <?php echo CHtml::endForm(); ?>
</div><!-- form -->
