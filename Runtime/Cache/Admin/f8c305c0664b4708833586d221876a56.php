<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<script src="/test/Admin/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/test/Admin/Public/css/bootstrap.min.css"/>
	<script src="/test/Admin/Public/js/bootstrap.js" ></script>
	<style type="text/css">
		body{
		}
		.say{
			font-family: 黑体;
			font-weight: 500;
			font-size: 1.1em;
			margin-top: 10px;
		}
		.tit{
			background-color: white;
			height: auto;
			font-family: 微软雅黑;
			font-weight: bold;
			font-size: 1.1em;
			margin-top: 20px;
		}
		.zhuangtai{
			width: 40%;
			float: left;
			text-align: left;
			padding: 5px;
			overflow: hidden; 
			white-space: nowrap;  
			text-overflow: ellipsis; 
		}
		.sort{
			width: 10%;
			float: left;
			text-align: center;
			padding: 5px;
		}
		.titlename{
			width: 15%;
			float: left;
			text-align: left;
			padding: 5px;
			overflow: hidden; 
			white-space: nowrap;  
			text-overflow: ellipsis; 
		}

		.newtime{
			width: 22%;
			float: left;
			text-align: left;
			padding: 5px;

		}

		.action{
			width: 13%;
			float: left;
			text-align: left;
			padding: 5px;

		}

		.content{
			height: auto;
			font-family: 微软雅黑;
			font-size: 1em;
			margin-top: 5px;
			border-top: 1px dotted rgba(0, 0, 0, 0.03);

		}

		.crow{
			background-color: rgb(250,250,250);
			border-bottom: 1px dashed rgba(0, 0, 0, 0.13);
			border-left: 1px dotted rgba(0, 0, 0, 0.05);
			border-right: 1px dotted rgba(0, 0, 0, 0.05);

		}

		.csort{
			width: 10%;
			float: left;
			text-align: center;
			padding: 6px;
			color: rgba(0, 0, 0, 0.72);
			font-weight:900; 
		}
		.czhuangtai{
			width: 40.5%;
			float: left;
			text-align: left;
			padding: 6px;
			overflow: hidden; 
			white-space: nowrap;  
			text-overflow: ellipsis; 
			font-weight: 600;
			color: rgba(0, 0, 0, 0.42);

		}

		.ctitlename{
			width: 14.5%;
			float: left;
			text-align: left;
			padding: 6px;
			overflow: hidden; 
			white-space: nowrap;  
			text-overflow: ellipsis; 
			font-weight: 600;
			color: rgba(0, 0, 0, 0.42);

		}

		.cnewtime{
			width: 22%;
			float: left;
			text-align: left;
			padding: 6px;
			color: rgba(0, 0, 0, 0.72);

		}

		.caction{
			width: 13%;
			float: left;
			text-align: left;
			color: rgba(0, 0, 0, 0.72);
			padding: 6px;
		}

			a.a1:link{
				color:#308BE6;
				text-decoration: none;
			}

			a.a1:visited{
				text-decoration:none; 
				color:#308BE6;
			}

			a.a1:hover{
				text-decoration:underline; 
				color:orange;
			}

			a.a1:active{
				text-decoration:none; 
				color:#308BE6;
			}
	</style>
</head>
<body style="margin:0;padding:0">
	<div class="column">
	<div class="col-md-12 say">
			点击问卷题目进行查看......
		</div>
		<div class="col-md-12 tit">
			<div class="row">
				<div class="sort">序号</div>
				<div class="titlename">　问卷</div>
				<div class="zhuangtai">状态(单机打开)</div>
				<div class="newtime">更新时间</div>
				<div class="action">操作</div>

			</div>
		</div>
		<div style="width:100%;border-top:1px solid rgba(0, 0, 0, 0.13);"></div>
		<div class="col-md-12 content">
		<?php if(is_array($item)): foreach($item as $key=>$v): ?><div class="column">
				<div class="col-md-12 crow">
					<div class="row">
						<div class="csort"><?php echo ($key+1); ?></div>
						<div class="ctitlename">
							<a class="a1" href="/test/Admin/Item/nowpaper/target/<?php echo ($v["target"]); ?>" title="点击查看问卷" target="_blank"><?php echo ($v["name"]); ?></a>
						</div>
						<div class="czhuangtai">
						<?php if(($v[open_1] == 1)): ?><a href="/test/Admin/Item/open/target/<?php echo ($v["target"]); ?>" class="btn btn-success" style="width:15%;height:25px;font-size:15px;padding:0px;">开启</a></div>
						<?php else: ?>
						<a href="/test/Admin/Item/open/target/<?php echo ($v["target"]); ?>" class="btn btn-primary" style="width:15%;height:25px;font-size:15px;padding:0px;">关闭</a></div><?php endif; ?>
						</php>
						<div class="cnewtime">&nbsp;&nbsp;<?php echo ($v["date"]); ?>&nbsp;&nbsp;</div>
						<div class="caction">
							<a href="/test/Admin/Item/phone_out/target/<?php echo ($v["target"]); ?>" class="btn btn-success" style="width:60%;height:25px;font-size:15px;padding:0px;" target="_blank">导出成绩</a>
						</div>
					</div>
				</div>
			</div><?php endforeach; endif; ?>
		</div>
	</div>
</body>
</html>