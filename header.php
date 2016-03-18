<?php
/*
Template Name:xuanzeta
Description:xuanzeta.com
Version:1.0
Author:liuman
Author Url:http://blog.xuanzeta.com
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<!-- <link href="<?php //echo TEMPLATE_URL; ?>main.css" rel="stylesheet" type="text/css" /> -->
<link href="<?php echo TEMPLATE_URL; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_URL; ?>css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_URL; ?>css/header.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_URL; ?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_URL; ?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_URL; ?>js/jquery.easing.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_URL; ?>js/lm.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_URL; ?>js/move-top.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_URL; ?>js/scrollspy.js" type="text/javascript"></script>
<!--[if IE 6]>
<script src="<?php echo TEMPLATE_URL; ?>iefix.js" type="text/javascript"></script>
<![endif]-->
<?php doAction('index_head'); ?>
</head>
<body>
<div id="wrap" class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
<a href="<?php echo BLOG_URL; ?>"><?php //echo $blogname; ?></a><?php //echo $bloginfo; ?>
<?php blog_navi();?>
