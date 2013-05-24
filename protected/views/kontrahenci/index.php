<?php
/* @var $this KontrahenciController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kontrahencis',
);

$this->menu=array(
	array('label'=>'Create Kontrahenci', 'url'=>array('create')),
	array('label'=>'Manage Kontrahenci', 'url'=>array('admin')),
);
?>

<h1>Kontrahencis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
