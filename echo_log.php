<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="pagemain">
<div id="pageleft" class="col-xs-12 col-sm-8 col-md-9">
	<div id="content">
		<h1 class="contenttitle"><?php topflg($top); ?><?php echo $log_title; ?></h2>
		<div class="blog-header">
	        <div class="submitted">
	          作者：<span><?php blog_author($author); ?>
	          <?php editflg($logid,$author); ?></span>
	          日期：<span><?php echo gmdate('Y-n-j', $date); ?></span>
	          点击：<span><?php echo $views; ?></span>
	          分类：<span><?php blog_sort($logid); ?></span>
	        </div>
	        <div class="blog-tags">
	        	<?php blog_tag($logid); ?>
	        </div>
	  	</div>
	  	<?php echo $log_content; ?>
<?php
  $blogname = Option::get('blogname');
  $url = Url::log($logid);
  $name = "<a style=\"color:red;\" href=\"".BLOG_URL."\">".$blogname."</a>";
  ?>
  <p>
  版权所有：《<?php echo $name; ?>》 => 《<a href="<?php echo $url; ?>"><?php echo $log_title;  ?></a>》<br />
  本文地址：<a href="<?php echo $url; ?>"><?php echo $url; ?></a><br />
  除非注明，文章均为 《<?php echo $name; ?>》 原创，欢迎转载！转载请注明本文地址，谢谢。<br />
  </p>
		
		<div class="blog-bottom">
	        <a class="blog-comment" href="#comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php echo $comnum; ?></a>
	    </div>
		<?php doAction('log_related', $logData); ?>
		<div class="nextlog"><?php neighbor_log($neighborLog); ?><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div></div>
		<?php blog_comments($comments); ?>
		<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	</div>
	<div style="clear:both;"></div>
</div><!--end #pageleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>
