<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>登陆</title>
	<meta http-equiv="Content-TYPE" content="text/html;charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="/test/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/test/Public/css/bootstrap.css"/>
	<script src="/test/Public/js/bootstrap.js" ></script>

	<style type="text/css">
		body{
			background-image: url(/test/Public/009.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		
	

		table.tab1{
			width: 100%;
			height: 100%;
		}

		@media screen and (max-width: 768px){
			
			#body.col-xs-12{
				height: auto;
				background-color: rgba(255, 255, 255, 1);
				border: 1px solid rgba(0, 0, 0, 0.45);
				border-radius: 3%;
				color: green;
				font-size: 24px;
				font-family: 华文楷体;

			}
			
		}
		@media screen and (min-width: 768px){
			#body.col-sm-12{
				height: auto;
				background-color: rgba(255, 255, 255, 1);
				border: 1px solid rgba(0, 0, 0, 0.45);
				border-radius: 3%;
				color: green;
				font-size: 24px;
				font-family: 华文楷体;

			}

			
		}
		@media screen and (min-width: 992px){
			#body.col-md-4{
				height: auto;
				background-color: rgba(255, 255, 255, 1);
				margin-top: 10%;
				border: 1px solid rgba(0, 0, 0, 0.45);
				border-radius: 3%;
				color: green;
				font-size: 12px;
				font-family: 华文楷体;

			}
		}
		@media screen and (min-width: 1200px){
			#body.col-lg-3{
				height: auto;
				background-color: rgba(255, 255, 255, 1);
				margin-top: 10%;
				border: 1px solid rgba(0, 0, 0, 0.45);
				border-radius: 3%;
				color: green;
				font-size: 10px;
				font-family: 华文楷体;

			}
		}


	</style>
</head>
<body>
	
		<div class="row">
			<div class="col-md-1 col-sm-0 col-lg-1 col-xs-0"></div>
			<div class="col-md-4 col-sm-12 col-lg-3 col-xs-12" id="body">
				<form action="/test/Home/Land/enter" method="post">
					<table class="tab1">
						<tr><td>&nbsp</td></tr>
						<tr>
							<td align="left"><font size="5px">登陆</font></td>
						</tr>
						<tr>
							<td align="left">
								<font size="4px">学号</font></td><td align="left"><input type="text" class="form-control" name="username">
							</td>
						</tr>
						<tr><td>&nbsp</td></tr>
						<tr>
							<td align="left"><font size="4px">密码</font></td><td align="left"><input type="password" class="form-control" name="password"></td>
						</tr>
						<tr><td>&nbsp</td></tr>
						<tr>
							<td align="center" colspan="2"><input type="submit" class="btn btn-success " style="width:40%; font-size:15px;" value="登录" ></td>
						</tr>
						<tr><td>&nbsp</td></tr>
					</table>
					<input type='hidden' name='date' id='Clock' style='width:145px'  class='text' />
				</form>
			</div>
		</div>
	
</body>
</html>
<script>
<!--

window.onload = function(){
            document.getElementById("Clock").value=(new Date()).toLocaleDateString();
}

//-->
</script>