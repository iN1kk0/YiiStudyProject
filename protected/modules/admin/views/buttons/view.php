<?php
/* @var $this ButtonsController */
/* @var $model Buttons */

$this->breadcrumbs=array(
	'Buttons'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Buttons', 'url'=>array('index')),
	array('label'=>'Create Buttons', 'url'=>array('create')),
	array('label'=>'Update Buttons', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Buttons', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Buttons', 'url'=>array('admin')),
);
?>

<h1>View Buttons #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'url',
		'image',
		//'Banners_id',
                array(
                'label'=>'Banners',
                'type'=>'raw',
                'value'=>$model->bannersBanners->title,
                ),
	),
)); ?>
