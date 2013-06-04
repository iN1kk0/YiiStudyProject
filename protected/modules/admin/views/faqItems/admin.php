<?php
/* @var $this FaqItemsController */
/* @var $model FaqItems */

$this->breadcrumbs = array(
    'Faq Items' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List FaqItems', 'url' => array('index')),
    array('label' => 'Create FaqItems', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#faq-items-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Faq Items</h1>

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
    'id' => 'faq-items-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'question',
        'answer',
        //'FaqCat_id',
        array(
            'name' => 'FaqCat_id',
            'filter' => CHtml::listData(FaqCat::model()->findAll(), 'id', 'title'),
            'value' => '$data->faqCatFaqCat->title',
        ),
        //'isActive',
        array(
            'name' => 'isActive',
            'value' => function($data) {
                return $data->isActive ? "Yes" : "No";
            },
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
