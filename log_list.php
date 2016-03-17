<?php 
/**
 * 站点首页模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="pagemain">
<div id="pageleft" class="col-xs-12 col-sm-8 col-md-9">
<div id="content">
<?php doAction('index_loglist_top'); ?>

<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>
	<h1 class="contenttitle"><?php topflg($value['top'], $value['sortop'], isset($sortid)?$sortid:''); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
	<div class="blog-header">
        <div class="submitted">
          作者：<span><?php blog_author($value['author']); ?>
          <?php editflg($value['logid'],$value['author']); ?></span>
          日期：<span><?php echo gmdate('Y-n-j', $value['date']); ?></span>
          点击：<span><a href="<?php echo $value['log_url']; ?>"><?php echo $value['views']; ?></a></span>
          分类：<span><?php blog_sort($value['logid']); ?></span>
        </div>
        <div class="blog-tags">
        	<?php blog_tag($value['logid']); ?>
        </div>
  </div>
	<?php echo $value['log_description']; ?>
	<?php //echo mb_substr($value['log_description'],0,300,'utf-8'); ?>
	<div class="blog-bottom">
		<?php if (!empty($value['excerpt']) || Option::get('isexcerpt') == 'y'): ?>
        <a href="<?php echo $value['log_url']; ?>" class="blog-read-more">阅读全文</a>
    	<?php endif; ?>
        <a class="blog-comment" href="<?php echo $value['log_url']; ?>#comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php echo $value['comnum']; ?></a>
    </div>
	<div style="clear:both;"></div>
<?php 
endforeach;
else:
?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>

<div id="pagenavi">
	<?php echo $page_url;?>
</div>
</div>
</div><!-- end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>