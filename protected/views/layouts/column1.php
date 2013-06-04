<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * @var $this Controller 
 */
$this->beginContent('//layouts/main');
?>
<div id="content">
    <?php echo $content; ?>
    <?php $this->renderPartial('_sidebar', array()); ?>

</div>
</div>
</div>
</article>
</div><!-- content -->

<?php $this->endContent(); ?>