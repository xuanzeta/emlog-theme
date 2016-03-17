<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
</div><!--end #pagemain-->
</div><!--end #wrap-->
<div style="clear:both;"></div>
<div class="footerbackground col-xs-12">
	<div class="footer col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
		<!-- <div class="col-xs-12 col-sm-5 col-md-4 col-sm-offset-2 col-md-offset-1">
			<ul>
			<?php
			$navi_cache = $CACHE->readCache('navi');
			foreach($navi_cache as $value):
		        if ($value['pid'] != 0) {
		            continue;
		        }
				$newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
		        $value['url'] = $value['isdefault'] == 'y' || substr( $value['url'], 0, 1 ) == '/' ? BLOG_URL . trim($value['url'], '/') : trim($value['url'], '/');
				?>
				<li>
					<a href="<?php echo $value['url']; ?>" <?php echo $newtab;?>><?php echo $value['naviname']; ?></a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-5 col-md-4">
		</div> -->
		<div class="bdsharebuttonbox footer-share col-md-8 col-md-offset-2" data-tag="share_1">
			<a class="bds_qzone share-button" data-cmd="qzone" href="#"></a>
			<a class="bds_weixin share-button" data-cmd="weixin"><i></i></a>
			<a class="bds_tsina share-button" data-cmd="tsina"></a>
			<a class="bds_tqq share-button" data-cmd="tqq"></a>
		</div>
		<div class="copyright">
			Powered by <a href="http://www.emlog.net" title="采用emlog系统">emlog</a>
			Theme by <a href="http://xuanzeta.com" title="采用xuanzeta主题">xuanzeta</a> 
			<!-- <a href="http://www.miibeian.gov.cn" target="_blank"> --><?php echo $icp; ?><!-- </a> --> <?php echo $footer_info; ?>
			<?php doAction('index_footer'); ?>
		</div>
	</div>
</div>
<script>prettyPrint();</script>
<script>
	window._bd_share_config = {
		common : {
			bdText : '<?php echo $site_title; ?>',
			bdDesc : '<?php echo $site_title; ?>',
		},
		share : [{
			"bdSize" : 16
		}]
	}
	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script>
</body>
</html>