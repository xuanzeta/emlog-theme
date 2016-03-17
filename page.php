<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="pagemain">
<div id="pageleft" class="col-xs-12 col-sm-8 col-md-9">
<div id="content">
	<h2><?php echo $log_title; ?></h2>
	<?php echo $log_content; ?>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div>
</div><!--end #pageleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>