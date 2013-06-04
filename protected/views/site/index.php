<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 *
 * @var $this SiteController 
 */
?>
<div class="mainbanner">
    <div class="shadow">
        <div class="bannerholder clearfix bxslider" style="margin:5px;">
            <?php foreach ($banners as $banner): ?>
                <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/Banners/<?php echo $banner->id; ?>/<?php echo $banner->image; ?>" alt="" />
                    <div class="textsection">
                        <table>
                            <tr>
                                <td>
                                    <div class="text"><?php echo $banner->title; ?></div>
                                    <h1 class="title"><?php echo $banner->text; ?></h1>
                                    <div class="clearfix">
                                        <?php
                                        $this->renderPartial('_buttons', array(
                                            'banners' => $banner->buttons,
                                        ));
                                        ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</header>
<article>
    <div class="shadow">
        <div class="homecontent">
            <div class="homeboxes clearfix">
                <?php foreach ($blocks as $block): ?>
                    <div class="homebox">
                        <div class="imgsection"><img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/Blocks/<?php echo $block->id; ?>/<?php echo $block->image; ?>" alt="<?php echo $block->title; ?>" /></div>
                        <h2 class="title"><?php echo $block->title; ?></h2>
                        <?php echo $block->text; ?>
                        <a href="<?php echo $block->buttonUrl; ?>" class="btn" style="background: url(<?php echo Yii::app()->request->baseUrl; ?>/uploads/Blocks/<?php echo $block->id; ?>/<?php echo $block->buttonImage; ?>) no-repeat; width:131px; height:28px;"><?php echo $block->buttonTitle; ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</article>
<script type="text/javascript">
    jQuery(function() {
        $('.bxslider').bxSlider({
            mode: 'fade',
            speed: 500,
            pause: 2500,
            auto: true,
            pager: false,
            controls: false
        });
    });
</script>