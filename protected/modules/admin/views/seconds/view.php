<?php
/* @var $this SecondsController */
/* @var $model Seconds */

$this->menu=array(
	array('label'=>'List Seconds', 'url'=>array('index')),
	array('label'=>'Create Second', 'url'=>array('create')),
	array('label'=>'Update Second', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Second', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Seconds #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'lastname',
		'phone',
	),
)); ?>
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    //'emptyText'
    'sorterHeader'=>'Сортировать по: ',
    'summaryText' => '{start} - {end} из {count}',
    'sortableAttributes'=>array('name', 'id', 'lastname'),
)); ?>