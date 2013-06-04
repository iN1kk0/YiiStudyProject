<?php
/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * @var $this SiteController  
 */
?>
<?php foreach ($faqcats as $faqcat): ?>
    Question: <b> <?php echo $faqcat->question; ?> </b><br />
    Answer: <i> <?php echo $faqcat->answer; ?> </i><br /><br />
<?php endforeach; ?>