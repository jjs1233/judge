<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<script src="/test/Admin/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/test/Admin/Public/css/bootstrap.min.css"/>
	<script src="/test/Admin/Public/js/bootstrap.js" ></script>
	<style type="text/css">
	
		p.p1{
			font-family: 微软雅黑;
			font-size: 1.1em;
			margin-top: 10px;
			margin-bottom: 10px;
			text-align: center;
		}
		p.p2{
			float: left;
			font-size: 1.2em;
			font-family: 黑体;
			margin-right: 10px;
		}
		
		#title{
			float: left;
			width: 40%;
			margin-right: 20px;
		}
		p.p4
		{
			float: left;
			font-size: 1em;
			font-family: 黑体;
			text-align: right;
			color: blue;
			margin-left: 20px;
		}

		p.p5{
			text-align: right;
			float: left;
			font-size: 1.2em;
			font-family: 黑体;
			text-align: right;
			color: orange;
		}

		#grade{
			float: left;
			width: 60px;
			margin-right: 20px;
		}

		.btn1{
			margin-left: 10%;
			margin-right: 10%;
		}

		#img1{
			width: 100%;
			margin-bottom: 10%;
		}
	</style>
</head>
<body>
<div class="row">
		<div class="col-md-12">
			<p class="p1">说明：此类新问卷每套问卷仅有选择题和问答题组成,适合大量题目的问卷，请将问卷文件上传至这里</p>
			<hr/>
			<form action="/test/Admin/Item/questionnaire3_post" method="post" id="submit1"
			enctype="multipart/form-data">
				<div class="form-group container">
				   <!--  <p class="p2">请输入问卷标题</p><input type="text" class="form-control" name="title" id="title" placeholder="请输入标题"> -->
				    <p class="p2">
				    	<!-- <input type="text" name="grade" placeholder="总分" id="grade">
				    </p> -->
				    <!-- <p class="p4" id="p4"><span class="glyphicon glyphicon-asterisk"></span>此项必填</p> --><br/><br/><br/>
				    <a href="/test/Admin/Public/want/test.xls".$v[target]." class="btn btn-primary btn1">点击下载问卷模板</a><br/><br/><br/>
				    <input type="file" class="btn btn-primary btn1" name="file_stu">
				    <p class="p5">下图为模板示例图，请按照模板上传题目，否则无法创建成功！！</p>
				    <br/><br/>
				    <img src="/test/Admin/Public/002.jpg" id="img1">
				    <br/><br/>
				    <center><input type="submit" class="btn btn-success" value="确认创建" style="width:50%;"></center>
				</div>
			</form>
		</div>
</div>



	<script src="/test/Admin/Public/js/addLoadEvent.js" ></script>
	<script src="/test/Admin/Public/js/question3.js" ></script>
	<!--  -->
</body>
</html>