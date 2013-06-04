<?php
/* @var $this FaqItemsController */
/* @var $model FaqItems */

$this->breadcrumbs = array(
    'Faq Items' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List FaqItems', 'url' => array('index')),
    array('label' => 'Create FaqItems', 'url' => array('create')),
    array('label' => 'Update FaqItems', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete FaqItems', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage FaqItems', 'url' => array('admin')),
);
?>

<h1>View FaqItems #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'question',
        'answer',
        //'FaqCat_id',
        array(
            'label' => 'FaqCat',
            'type' => 'raw',
            'value' => $model->faqCatFaqCat->title,
        ),
        'isActive',
    ),
));
?>
