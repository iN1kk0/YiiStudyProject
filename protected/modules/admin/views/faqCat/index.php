<?php
/* @var $this FaqCatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faq Cats',
);

$this->menu=array(
	array('label'=>'Create FaqCat', 'url'=>array('create')),
	array('label'=>'Manage FaqCat', 'url'=>array('admin')),
);
?>

<h1>Faq Cats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
