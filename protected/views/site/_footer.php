<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * @var $this SiteController  
 */
?>
<footer>
    <div class="frame">
        <div class="row clearfix">
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
            <div class="privacy"><a href="/about">Privacy Policy</a></div>
        </div>
        <div class="row clearfix">
            <div class="copy">&copy; 2010 - <?php echo date("Y"); ?>All Rights Reserved.</div>
            <div class="by">Website Design by <a href="" target="_blank"></a></div>
        </div>
    </div>
</footer>
