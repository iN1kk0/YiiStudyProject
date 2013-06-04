<?php
/* @var $this BlocksController */
/* @var $model Blocks */

$this->breadcrumbs = array(
    'Blocks' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Blocks', 'url' => array('index')),
    array('label' => 'Create Blocks', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#blocks-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Blocks</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'blocks-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'title',
        //'image',
        array(
            'header' => 'image',
            'type' => 'html',
            'htmlOptions' => array('class' => 'gridimg'),
            'value' => 'CHtml::image($data->ImageUploadBehavior->getImagePath())'
        ),
        'text',
        'buttonUrl',
        //'buttonImage',
        array(
            'header' => 'buttonImage',
            'type' => 'html',
            'htmlOptions' => array('class' => 'gridimg'),
            'value' => 'CHtml::image($data->ImageUploadBehavior->getButtonImagePath())'
        ),
        'buttonTitle',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
