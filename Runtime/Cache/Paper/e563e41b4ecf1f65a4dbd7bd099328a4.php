<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<script src="/th/test/Paper/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/th/test/Paper/Public/css/bootstrap.min.css"/>
	<script src="/th/test/Paper/Public/js/bootstrap.js" ></script>
	<style type="text/css">
		body
		{
			background-color: rgba(0, 126, 255, 0.12);
			background-size: cover;
			background-repeat: no-repeat;
			padding: 0px;
		}
		@media screen and (max-width: 768px){
			#top{
				background-color: white;
				margin-top: 0px;
				margin-bottom:10%;
				border-bottom:1px solid rgba(0, 0, 0, 0.22);

			}
			#container{
				height: auto;
				margin-top: 20%;
				padding: 10px;
				background-color: white;
				border-radius: 20px;
				border:1px solid rgba(0, 0, 0, 0.22);

			}


			p.p0{
				padding-top: 5%;
				padding-bottom:20px;
				font-size: 3.3em;
				font-weight: 900;
				text-align: center;
			}
			p.p1{
				padding-top:1%;
				padding-left:1%;
				font-size:2.3em;
				font-family: 微软雅黑;
				font-weight: bolder;
			}
			
			#content{
				border-bottom:1px dashed rgba(0, 0, 0, 0.42);
				padding: 2%;
			}
		

			#button1{
				width:35%;
				margin-top: 10%;
				font-size: 3em;
				padding-top:3%;
				padding-bottom:3%;
				margin-left: 5%;
				margin-right: 5%;
				border-radius: 15px;
			}

			#bt{
				margin-top:50px;
				text-align: center;
			}
			#txt1{
				border-right:2px dashed rgba(0, 0, 0, 0.42);
				text-align: center;
			}
			#txt2{
				text-align: center;
			}
		}
		@media screen and (min-width: 768px){
			#top{
				background-color: white;
				margin-bottom:10%;
				border-bottom:1px solid rgba(0, 0, 0, 0.22);

			}


			#container{
				height: auto;
				background-color: white;
				border-radius: 25px;
				border:1px solid rgba(0, 0, 0, 0.42);
				font-size: 3em;
				font-weight: bolder;
				margin-left: 4%;
			}
			p.p0{
				padding-top: 5%;
				padding-bottom:20px;
				font-size: 3.3em;
				font-weight: 900;
				text-align: center;
			}
			p.p1{
				padding-top:1%;
				padding-left:1%;
				font-size:2.3em;
				font-family: 微软雅黑;
				font-weight: bolder;
			}
			
			#content{
				border-bottom:1px dashed rgba(0, 0, 0, 0.92);
				padding: 2%;
			}
		

			#button1{
				width:35%;
				margin-top: 10%;
				font-size: 3em;
				padding-top:3%;
				padding-bottom:3%;
				margin-left: 5%;
				margin-right: 5%;
				border-radius: 15px;
			}

			#bt{
				margin-top:50px;
				text-align: center;
			}
			#txt1{
				border-right:2px dashed rgba(0, 0, 0, 0.42);
				text-align: center;
			}
			#txt2{
				text-align: center;
			}
			
		}
		@media screen and (min-width: 992px){
			
		}
		@media screen and (min-width: 1200px){
			
		}

	</style>
</head>
<body>
	<div class="column" style="padding:0px;">
		<div class="col-sm-12 col-xs-12" id="top">
			<p class="p0"><?php echo ($title); ?></p>
		</div>
		<div class="col-sm-12 col-xs-12">
			<div class="column">
				<div class="col-sm-11 col-xs-11" id="container">
					<div class="column">
					<?php if($super == 1): ?><div class="col-sm-12 col-xs-12" id="content">
							<div class="row">
								<div class="col-sm-5 col-xs-5" id="txt1">单位</div>
								<div class="col-sm-4 col-xs-4" id="txt1">平均成绩</div>
								<div class="col-sm-3 col-xs-3" id="txt2">答题人数</div>
							</div>
						</div>
						<?php if(is_array($count)): foreach($count as $key=>$v): ?><div class="col-sm-12 col-xs-12" id="content">
							<div class="row">
								<div class="col-sm-5 col-xs-5" id="txt1"><?php echo ($v["academy"]); ?></div>
								<div class="col-sm-4 col-xs-4" id="txt1"><?php echo ($v["truncate(avg(grade),2)"]); ?></div>
								<div class="col-sm-3 col-xs-3" id="txt2"><?php echo ($v["count(academy)"]); ?></div>
							</div>
						</div><?php endforeach; endif; ?>
					<?php else: ?>
						<div class="col-sm-12 col-xs-12" id="content">
							<div class="row">
								<div class="col-sm-8 col-xs-8" id="txt1">单位</div>
								<div class="col-sm-4 col-xs-4" id="txt2">答题人数</div>
							</div>
						</div>
						<?php if(is_array($count)): foreach($count as $key=>$v): ?><div class="col-sm-12 col-xs-12" id="content">
							<div class="row">
								<div class="col-sm-8 col-xs-8" id="txt1"><?php echo ($key); ?></div>
								<div class="col-sm-4 col-xs-4" id="txt2"><?php echo ($v); ?>人</div>
							</div>
						</div><?php endforeach; endif; endif; ?>
					</div>	
				</div>
				<div class="col-sm-12 col-xs-12" id="bt">
					<a href="/th/test/Paper/Paper/Super" id="button1" class="btn btn-success">返回做题</a>
					<a href="/th/test/Paper/Paper/finish" id="button1" class="btn btn-success">确认</a>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>