<?php
/* @var $this FaqItemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faq Items',
);

$this->menu=array(
	array('label'=>'Create FaqItems', 'url'=>array('create')),
	array('label'=>'Manage FaqItems', 'url'=>array('admin')),
);
?>

<h1>Faq Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
