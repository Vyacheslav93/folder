<?php
/* @var $this FirstsController */
/* @var $data Firsts */
//$firsts = Firsts::model()->with('seconds')->findAllByPk($data->id);
$firsts = Firsts::model()->with('seconds')->findByPk($data->id);
//$firsts = Firsts::model()->with('seconds')->findA;
//foreach ($firsts->seconds as $second) echo $second->name. "<br>";
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('firsts/view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>

	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

    <?php foreach ($firsts->seconds as $second){?>
    <b><?php echo CHtml::encode($data->getAttributeLabel('second')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($second->name). " ". CHtml::encode($second->lastname) . "<br>", array('seconds/view', 'id'=>$second->id));} ?>
    <br />




</div>
<?php
//    foreach ($firsts->seconds as $second)
//        echo $second->name. "<br>";
   // echo $firsts->seconds->name;
//    foreach ($firsts->name as $second)
//        echo $second. "<br>";
?>