<?php
/* @var $this AllController */
/* @var $dataProvider CActiveDataProvider */
$firsts = Firsts::model()->with('seconds')->findByPk($data->id);
?>
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
//    'viewData'=>array(
//        'firsts'=>$firsts
//    ),
    //'emptyText'
    'sorterHeader'=>'Сортировать по: ',
    'summaryText' => '{start} - {end} из {count}',
    'sortableAttributes'=>array('name', 'id', 'lastname'),
));

?>
