<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/test/Admin/Public/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/test/Admin/Public/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/test/Admin/Public/skin/default/skin.css" rel="stylesheet" type="text/css" id="skin" />
<link href="/test/Admin/Public/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<link href="/test/Admin/Public/css/style.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>问卷管理系统</title>
</head>
<body>
<header class="Hui-header cl" style="background-color:#222;"> 
	<p style="font-family:幼圆;color:white;font-size:1.3em;padding:10px;">问卷管理中心</p>
	<ul class="Hui-userbar" style="color:white;">
		<li>超级管理员</li>
	</ul>
	<a aria-hidden="false" class="Hui-nav-toggle" href="#"></a> </header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2" style="padding-top:20px;">
		<dl id="menu-article">
			<dt></span>已有问卷<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="/test/Admin/Item/look" target="target1">查看已有问卷</a></li>
					<li><a href="/test/Admin/Item/change" target="target1">修改问卷</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt>创建新问卷<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a  href="/test/Admin/Item/questionnaire1" target="target1">固定格式问卷</a></li>
					<li><a  href="/test/Admin/Item/questionnaire3" target="target1">问卷文件导入</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt>规定参与学校<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a  href="javascript:void(0)">参与学校制定</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="welcome.html">&nbsp;操&nbsp;作&nbsp;</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="welcome.html" name="target1"></iframe>
		</div>
	</div>
</section>
<script type="text/javascript" src="/test/Admin/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/test/Admin/Public/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="/test/Admin/Public/js/H-ui.js"></script> 
<script type="text/javascript" src="/test/Admin/Public/js/H-ui.admin.js"></script> 
</body>
</html>