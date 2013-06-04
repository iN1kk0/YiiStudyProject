<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * @var $this SiteController  
 */
?>
<ul class="services">

    <li>
        <h2 class="title clearfix">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/Services/<?php echo $data->id; ?>/<?php echo $data->image; ?>" alt="<?php echo $data->image; ?>" />
            <?php echo $data->title; ?>
        </h2>
        <div class="desc"><?php echo $data->description; ?></div>
        <div class="btnsection clearfix">
            <?php
            // the link that may open the dialog
            echo CHtml::link('more', '#', array(
                'onclick' => '$("#mydialog' . $data->id . '").dialog("open"); return false;', 'class' => 'btn moresmall',
            ));
            ?></div>
    </li>

</ul>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'mydialog' . $data->id . '',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Full text',
        'autoOpen' => false,
    ),
));

echo $data->text;

$this->endWidget('zii.widgets.jui.CJuiDialog');
?>