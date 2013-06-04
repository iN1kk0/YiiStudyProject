<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * @var $this SiteController  
 */
$this->renderPartial('_header', array(
    'title' => $model->title,
    'url' => $model->url,
    'id' => $model->id,
    'banner' => $model->banner,
    'quote' => $model->quote,
    'content' => $model->content,
));
?>
</header>
<article>
    <div class="shadow">
        <div class="contentholder">
            <div class="shadowcontentholder clearfix">
                <div class="content">
                    <?php echo $model->content; ?>
                </div>