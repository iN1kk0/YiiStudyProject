<?php
/* @var $this ButtonsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Buttons',
);

$this->menu=array(
	array('label'=>'Create Buttons', 'url'=>array('create')),
	array('label'=>'Manage Buttons', 'url'=>array('admin')),
);
?>

<h1>Buttons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
