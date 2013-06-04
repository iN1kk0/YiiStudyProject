<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * @var $this SiteController  
 */
$pages = Pages::model()->findAll();
?>

<div class="sidebar">
    <?php
    foreach ($pages as $page):
        $this->widget('zii.widgets.CMenu', array(
            'items' => array(
                array('label' => $page->title, 'url' => array('/' . $page->url))
            ),
        ));
    endforeach;
    ?>

</div>