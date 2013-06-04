<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * @var $this SiteController  
 */
?>
<nav class="mainnav">
    <div class="frame clearfix">
        <strong class="logo"><a href="<?php echo Yii::app()->HomeUrl; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="" /></a></strong>
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => 'About', 'url' => array('/about')),
                        array('label' => 'Services', 'url' => array('/services')),
                        array('label' => 'Why Us', 'url' => array('/whyus')),
                        array('label' => 'Faq', 'url' => array('/faq')),
                        array('label' => 'Contact', 'url' => array('/contactus')),
                    ),
                ));
                ?>
    </div>
</nav>
