<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<script src="/test/Admin/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/test/Admin/Public/css/bootstrap.min.css"/>
	<script src="/test/Admin/Public/js/bootstrap.js" ></script>
	<script src="/test/Admin/Public/js/question1.js" ></script>
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
		p.p3{
			float: left;
			font-size: 1em;
			font-family: 黑体;
			margin-right: 10px;
		}

		p.p4
		{
			float: left;
			font-size: 1em;
			font-family: 黑体;
			text-align: right;
			color: blue;
		}

		p.p5{
			float: left;
			font-size: 1em;
			font-family: 黑体;
			text-align: right;
			color: orange;
			margin-left: 50px;
		}

		#p1{
			font-size: 1.1em;
			font-family: 黑体;
			margin-right: 10px;
		}

		table.tab1{
			width: 100%;
		}
		#title{
			float: left;
			width: 40%;
			margin-right: 20px;
		}
		#number1,#number2,#number3{
			float: left;
			width: 50%;
		}
		.qque
		{
			float: left;
			font-size: 1.2em;
			margin-left: 10px;
		}
		.que
		{
			float: left;
			font-size: 1.2em;
			margin-left: 20px;

		}
		.que2
		{
			float: left;
			font-size: 1.2em;
			margin-left: 50px;

		}

		.qu1
		{
			float: left;
			width: 70%;
		}

		.qu2
		{
			float: left;
			width: 60%;
		}

		#submit2{
			width:15%;
			font-size: 1.2em;
			font-family: 幼圆;
			float:right;
			margin-right: 50px;
			margin-top: 20px;

		}

		#select1
		{
			margin-left: 20px;
		}

		#grade{
			width: 5%;
			margin-left: 20px;
		}

		#addselect{
			float: right;
			margin-right: 20%;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<p class="p1">说明：此类新问卷每套问卷仅有选择题<!-- 和不超过五道问答题 -->组成，适合题量比较少的问卷</p>
			<hr/>
			<form action="/test/Admin/Item/make" method="post" id="submit1">
				<div class="form-group container">
				    <p class="p2">请输入问卷标题</p><input type="text" class="form-control" name="newtitle" id="title" placeholder="请输入标题">
				    <p class="p4" id="p4"><span class="glyphicon glyphicon-asterisk"></span>此项必填</p><br/><br/>
				</div>
					
				    <br/>
				    	<div style="border-top:1px dashed rgba(0, 0, 0, 0.16);"></div>
				    <br/>
				    <div id="add" style="padding-left:30px;">
				    <p class="p5">请将选择题每道题的正确答案前面的选框选上</p><br/><br/>	
				    </div>
				    <div class="dropdown" style="text-align:right;margin-right:50px;">
					   <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" 
					      data-toggle="dropdown">
					      创建问题
					      <span class="caret"></span>
					   </button>
					   <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
					      <li role="presentation">
					         <a role="menuitem" tabindex="-1" href="#" id="qu-select1">单选题</a>
					      </li>
					      <!-- <li role="presentation">
					         <a role="menuitem" tabindex="-1" href="#" id="qu-select2">多选题</a>
					      </li>
					      <li role="presentation">
					         <a role="menuitem" tabindex="-1" href="#" id="qu-select3">问答题</a>
					      </li> -->
					   </ul>
					</div>
					<div>
				    <input type="submit"  id="submit2" class="btn btn-success" value="确认创建">
				    </div>
			</form>
		</div>
	</div>


	
</body>
</html>