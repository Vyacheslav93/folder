<?php
/* @var $this FirstsController */
/* @var $model Firsts */

$this->menu=array(
	array('label'=>'List Firsts', 'url'=>array('index')),
    array('label'=>'Add Seconds', 'url'=>array('add', 'id'=>$model->id)),
	array('label'=>'Create First', 'url'=>array('create')),
	array('label'=>'Update First', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete First', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);

?>

<h1>View Firsts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'lastname',
		'phone',
	),
)); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'firsts-grid',
    //'summaryText' =>'' ,
    //'dataProvider'=>$model->search(),
    'dataProvider'=>$items->createAnotherDataProvider($id),
    //'filter'=>$model,
    'filter'=>$items,
    'filterPosition'=>true,
    'columns'=>array(
        'id',
        'name',
        'lastname',
        'phone',
        array(
            'class'=>'CButtonColumn',
            'viewButtonUrl'=>'Yii::app()->createUrl("admin/seconds/view", array("id" => $data->id))',
            //'deleteButtonUrl'=>'Yii::app()->createUrl("admin/seconds/view", array("id" => $data->id))',
            'deleteButtonUrl'=>'Yii::app()->createUrl("admin/firsts/deletefrom", array("id" => $data->id))',
            //'updateButtonOptions' => array('style'=>'display:none'),
            'updateButtonUrl'=>'Yii::app()->createUrl("admin/seconds/view", array("id" => $data->id))',

        ),
    ),
)); ?>
