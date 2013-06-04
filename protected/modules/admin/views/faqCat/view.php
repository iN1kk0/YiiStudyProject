<?php
/* @var $this FaqCatController */
/* @var $model FaqCat */

$this->breadcrumbs=array(
	'Faq Cats'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List FaqCat', 'url'=>array('index')),
	array('label'=>'Create FaqCat', 'url'=>array('create')),
	array('label'=>'Update FaqCat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FaqCat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FaqCat', 'url'=>array('admin')),
);
?>

<h1>View FaqCat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'sort',
		'isActive',
	),
)); ?>
