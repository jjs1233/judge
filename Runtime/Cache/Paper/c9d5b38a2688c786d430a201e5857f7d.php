<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>答题界面</title>
	<meta http-equiv="Content-TYPE" content="text/html;charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="/judge/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/judge/Public/css/bootstrap.css"/>
	<link  rel="stylesheet" href="/judge/Public/css/paper.css"/>
	<script src="/judge/Public/js/bootstrap.js" ></script>
	
</head>
<body onLoad="init(); window.setTimeout('show_secs()',1);">
<SCRIPT LANGUAGE="JAVASCRIPT">
<!--
var ap_name = navigator.appName;
var ap_vinfo = navigator.appVersion;
var ap_ver = parseFloat(ap_vinfo.substring(0,ap_vinfo.indexOf('(')));
var time_start = new Date();
var clock_start = time_start.getTime();
var dl_ok=false;
function init ()
{
if(ap_name=="Netscape" && ap_ver>=3.0)
dl_ok=true; 
return true;
}
function get_time_spent ()
{ 
var time_now = new Date();
return((time_now.getTime() - clock_start)/1000); 
}
function show_secs () // show the time user spent on the side
{ 
var i_total_secs = Math.round(get_time_spent()); 
var i_secs_spent = i_total_secs % 60;
var i_mins_spent = Math.round((i_total_secs-30)/60); 
if (i_mins_spent==10) 
{
	alert("超过做题时间，答题无效！！点击重新答题。");
	location.reload(); 
};
var s_secs_spent = "" + ((i_secs_spent>9) ? i_secs_spent : "0" + i_secs_spent);
var s_mins_spent ="" + ((i_mins_spent>9) ? i_mins_spent : "0" + i_mins_spent);
document.fm0.time_spent.value = s_mins_spent + ":" + s_secs_spent;
window.setTimeout('show_secs()',1000); 
}
// -->

</SCRIPT>
		<div class="row" style="padding-top:0px;">
			
			<div class="col-md-10 col-lg-9 col-xs-12 col-sm-12" id="body">
				<div class="column" style="padding-top:0px;">
					<div class="col-md-12 col-lg-12" id="img" >
						<span class="visible-xs"><h3 class="hh2"><?php echo ($title); ?></h3></span>
								<span class="visible-sm"><h3 class="hh2"><?php echo ($title); ?></h3></span>
					</div>
					<form name="fm0" action="/judge/Paper/Paper/phone" method="post" id="select" class="form-inline" onsubmit="return check()">
					<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="title">
							<p style="text-align:right;font-weight:bold;color:black;padding:5px;">
							<a class="a1" href="/judge/Paper/Paper/situation">各单位参赛情况</a></p>
									<div class="form-group">
									<input type="text" name="usernumber" value="<?php echo ($usernumber); ?>" class="form-control" placeholder="请输入学号"  id="userinput1">
									<input type="text" name="username" value="<?php echo ($username); ?>"class="form-control" placeholder="请输入姓名"  id="userinput2">
								<FONT COLOR="#888888" size="-1">您已耗时</FONT>
								<INPUT type="text" name="time_spent" size=7 onFocus="this.blur()" id="spendtime" style="margin-top:5px">
								<FONT COLOR="#888888" size="-1">答题时间为十分钟，超时提交的成绩无效</FONT>
								</div>
							
					</div>
					<!-- 模态框（Modal） -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
					   aria-labelledby="myModalLabel" aria-hidden="true">
					   <div class="modal-dialog">
					      <div class="modal-content">
					         <div class="modal-header">
					            <button type="button" class="close" 
					               data-dismiss="modal" aria-hidden="true">
					                  &times;
					            </button>
					            <h4 class="modal-title" id="myModalLabel">
					               请选择您所在的学校
					            </h4>
					         </div>
					         <div class="modal-body">
					         	<div class="row">
					         		<p>C</p>
						            <div class="row">
						            	<div class="col-md-4 school">常熟理工学院</div>
						            	<div class="col-md-4 school">常州大学</div>
						            	<div class="col-md-4 school">常州工学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">常州信息职业技术学院</div>
						            	<div class="col-md-4 school">常州纺织服装职业技术学院</div>
						            	<div class="col-md-4 school">常州工程职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">常州轻工职业技术学院</div>
						            	<div class="col-md-4 school">常州机电职业技术学院</div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>D</p>
						            <div class="row">
						            	<div class="col-md-4 school">东南大学</div>
						            	<div class="col-md-4 school"></div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>G</p>
						            <div class="row">
						            	<div class="col-md-4 school">硅湖职业技术学院</div>
						            	<div class="col-md-4 school"></div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>H</p>
						            <div class="row">
						            	<div class="col-md-4 school">河海大学</div>
						            	<div class="col-md-4 school">淮阴师范学院</div>
						            	<div class="col-md-4 school">淮阴工学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">淮安信息职业技术学院</div>
						            	<div class="col-md-4 school">淮海工学院</div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>J</p>
						            <div class="row">
						            	<div class="col-md-4 school">江苏警官学院</div>
						            	<div class="col-md-4 school">金陵科技学院</div>
						            	<div class="col-md-4">江苏开放大学（江苏城市职业技术学院）</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">江苏经贸职业技术学院</div>
						            	<div class="col-md-4 school">江苏海事职业技术学院</div>
						            	<div class="col-md-4 school">金肯职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">江苏建康职业学院</div>
						            	<div class="col-md-4 school">江苏第二师范学院</div>
						            	<div class="col-md-4 school">江南大学</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">江苏信息职业技术学院</div>
						            	<div class="col-md-4 school">江阴职业技术学院</div>
						            	<div class="col-md-4 school">江南影视艺术职业学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">江苏师范大学</div>
						            	<div class="col-md-4 school">江苏建筑职业技术学院</div>
						            	<div class="col-md-4 school">九州职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">江苏大学</div>
						            	<div class="col-md-4 school">江苏科技大学</div>
						            	<div class="col-md-4 school">江苏农林职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">金山职业技术学院</div>
						            	<div class="col-md-4 school">江海职业技术学院</div>
						            	<div class="col-md-4 school">江苏工程职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">江苏商贸职业学院</div>
						            	<div class="col-md-4 school">江苏食品药品职业技术学院</div>
						            	<div class="col-md-4 school">江苏财经职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">江苏理工学院</div>
						            	<div class="col-md-4 school">江苏城乡建设职业学院</div>
						            	<div class="col-md-4 school">建东职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">江苏农牧科技职业学院</div>
						            	<div class="col-md-4 school">江苏省南京工程高等职业学校</div>
						            	<div class="col-md-4 school">江苏省扬州商务高等职业学校</div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>K</p>
						            <div class="row">
						            	<div class="col-md-4 school">昆山登云科技职业学院</div>
						            	<div class="col-md-4 school">昆山杜克大学</div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>L</p>
						            <div class="row">
						            	<div class="col-md-4 school">连云港职业技术学院</div>
						            	<div class="col-md-4 school">连云港师范高等专科学校</div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>M</p>
						            <div class="row">
						            	<div class="col-md-4 school">明达职业技术学院</div>
						            	<div class="col-md-4 school"></div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>N</p>
						            <div class="row">
						            	<div class="col-md-4 school">南京大学</div>
						            	<div class="col-md-4 school">南京航空航天大学</div>
						            	<div class="col-md-4 school">南京理工大学</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南京农业大学</div>
						            	<div class="col-md-4 school">南京邮电大学</div>
						            	<div class="col-md-4 school">南京林业大学</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南京信息工程大学</div>
						            	<div class="col-md-4 school">南京工业大学</div>
						            	<div class="col-md-4 school">南京师范大学</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南京财经大学</div>
						            	<div class="col-md-4 school">南京医科大学</div>
						            	<div class="col-md-4 school">南京中医药大学</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南京审计大学</div>
						            	<div class="col-md-4 school">南京体育学院</div>
						            	<div class="col-md-4 school">南京艺术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南京工程学院</div>
						            	<div class="col-md-4 school">南京晓庄学院</div>
						            	<div class="col-md-4 school">南京森林警察学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南京工业职业技术学院</div>
						            	<div class="col-md-4 school">南京交通职业技术学院</div>
						            	<div class="col-md-4 school">南京科技职业学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南京特殊教育师范学院</div>
						            	<div class="col-md-4 school">南京信息职业技术学院</div>
						            	<div class="col-md-4 school">南京铁道职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南京旅游职业学院</div>
						            	<div class="col-md-4 school">南京机电职业技术学院</div>
						            	<div class="col-md-4 school">南京视觉艺术职业学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南京城市职业学院</div>
						            	<div class="col-md-4 school">南通大学</div>
						            	<div class="col-md-4 school">南通职业大学</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南通航运职业技术学院</div>
						            	<div class="col-md-4 school">南通科技职业学院</div>
						            	<div class="col-md-4 school">南通理工学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">南通师范高等专科学校</div>
						            	<div class="col-md-4 school"></div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>S</p>
						            <div class="row">
						            	<div class="col-md-4 school">三江学院</div>
						            	<div class="col-md-4 school">苏州大学</div>
						            	<div class="col-md-4 school">苏州科技大学</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">苏州市职业大学</div>
						            	<div class="col-md-4 school">苏州工艺美术职业技术学院</div>
						            	<div class="col-md-4 school">苏州工业园区职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">苏州农业职业技术学院</div>
						            	<div class="col-md-4 school">沙洲职业工学院</div>
						            	<div class="col-md-4 school">苏州工业园区服务外包职业学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">苏州经贸职业技术学院</div>
						            	<div class="col-md-4 school">苏州卫生职业技术学院</div>
						            	<div class="col-md-4 school">苏州工业职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">苏州健雄职业技术学院</div>
						            	<div class="col-md-4 school">苏州托普信息职业技术学院</div>
						            	<div class="col-md-4 school">苏州港大思培科技职业学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">苏州高博软件技术职业学院</div>
						            	<div class="col-md-4 school">苏州信息职业技术学院</div>
						            	<div class="col-md-4 school">江苏农牧科技职业学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">宿迁泽达职业技术学院</div>
						            	<div class="col-md-4 school">宿迁职业技术学院</div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>T</p>
						            <div class="row">
						            	<div class="col-md-4 school">泰州学院</div>
						            	<div class="col-md-4 school">泰州职业技术学院</div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>W</p>
						            <div class="row">
						            	<div class="col-md-4 school">无锡商业职业技术学院</div>
						            	<div class="col-md-4 school">无锡职业技术学院</div>
						            	<div class="col-md-4 school">无锡科技职业学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">无锡太湖学院</div>
						            	<div class="col-md-4 school">无锡城市职业技术学院</div>
						            	<div class="col-md-4 school">无锡工艺职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">无锡太湖创意职业技术学院</div>
						            	<div class="col-md-4 school">无锡南洋职业技术学院</div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>X</p>
						            <div class="row">
						            	<div class="col-md-4 school">徐州医科大学</div>
						            	<div class="col-md-4 school">徐州工程学院</div>
						            	<div class="col-md-4 school">徐州工业职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">徐州幼儿师范高等专科学校</div>
						            	<div class="col-md-4 school">徐州生物工程职业技术学院</div>
						            	<div class="col-md-4 school">西交利物浦大学</div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>Y</p>
						            <div class="row">
						            	<div class="col-md-4 school">应天职业技术学院</div>
						            	<div class="col-md-4 school">扬州大学</div>
						            	<div class="col-md-4 school">扬州市职业大学</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">扬州市环境资源职业技术学院</div>
						            	<div class="col-md-4 school">扬州工业职业技术学院</div>
						            	<div class="col-md-4 school">扬州中瑞酒店职业学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">盐城师范学院</div>
						            	<div class="col-md-4 school">盐城工学院</div>
						            	<div class="col-md-4 school">盐城工业职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">盐城卫生职业技术学院</div>
						            	<div class="col-md-4 school">炎黄职业技术学院</div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         	<div class="row">
					         		<p>Z</p>
						            <div class="row">
						            	<div class="col-md-4 school">中国药科大学</div>
						            	<div class="col-md-4 school">钟山职业技术学院</div>
						            	<div class="col-md-4 school">正德职业技术学院</div>
						            </div>
						            <div class="row">
						            	<div class="col-md-4 school">中国矿业大学</div>
						            	<div class="col-md-4 school">镇江市高等专科学校</div>
						            	<div class="col-md-4 school"></div>
						            </div>
					         	</div>
					         </div>
					         <div class="modal-footer">
					            <button type="button" class="btn btn-default" 
					               data-dismiss="modal" id="close1">关闭
					            </button>
					         </div>
					      </div><!-- /.modal-content -->
						</div><!-- /.modal -->
					</div>

					<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="content">
						
						<span class="visible-md"><h2 class="hh1"><?php echo ($title); ?></h3></span>
						<span class="visible-lg"><h2 class="hh1"><?php echo ($title); ?></h3></span>
						<br/>
						

						<span class="visible-md"><br/></span>
						<span class="visible-lg"><br/></span>
						<span class="visible-lg"><div id="hrr"></div></span>
						<span class="visible-md"><div id="hrr"></div></span>
						<span class="visible-md"><br/></span>
						<span class="visible-lg"><br/></span>
						
						


						<input type="hidden" name="target" value="<?php echo ($target); ?>">
							<div class="panel panel-default" id="select">
							   <?php if(is_array($DanXuan)): foreach($DanXuan as $key=>$v): ?><input type="hidden" name="num[<?php echo ($v["id"]); ?>][0]" value="<?php echo ($v["correct"]); ?>">
									 <div class="panel-heading" id="headtitle">
							        问题
							        <?php echo ($key+1); ?>:
							        <?php echo ($v["question"]); ?>
							  		 </div>
							  		 <?php if($v['answer_0']!=NULL) echo "	<div class='panel-body' id='headbody'>
							      <input type='radio' name='num[".$v['id']."][1]' value='1'>A:".$v['answer_0']."
							</div>"; ?>
										<?php if($v['answer_1']!=NULL) echo "	<div class='panel-body' id='headbody'>
							      <input type='radio' name='num[".$v['id']."][1]' value='2'>B:".$v['answer_1']."
							</div>"; ?>
	         							<?php if($v['answer_2']!=NULL) echo "	<div class='panel-body' id='headbody'>
							      <input type='radio' name='num[".$v['id']."][1]' value='3'>C:".$v['answer_2']."
							</div>"; ?>
	         								<?php if($v['answer_3']!=NULL) echo "	<div class='panel-body' id='headbody'>
							      <input type='radio' name='num[".$v['id']."][1]' value='4'>D:".$v['answer_3']."
							</div>"; ?>
	         								<?php if($v['answer_4']!=NULL) echo "	<div class='panel-body' id='headbody'>
							      <input type='radio' name='num[".$v['id']."][1]' value='5'>E:".$v['answer_4']."
							</div>"; endforeach; endif; ?>

							</div>
						

						<center>
							<input type="submit" value="提交" id="submitbutton" class="btn btn-success">
						</center>
						
						<br/>
						<br/>
						

					</div>
					</form>
				</div>
			</div>
		</div>
	
	<script type="text/javascript">
		function check()
		{

				if (document.getElementById("userinput1").value==''||document.getElementById("userinput2".value=='')) 
				{
					alert("个人信息必须填写完整!!");
					return false;
				}
				x=document.getElementById("userinput1").value;
				if ( isNaN(x)) {
					alert("校园卡号必须为数字!!");
					return false;
				};
				var arr=new Array();
				var i=1;
				var p=0;
				<?php  foreach ($DanXuan as $key => $value) { echo "arr[i]='num['+".$DanXuan[$key]['id']."+'][1]';"; echo "i++;"; } ?>
				k=i;
				
				for (var j = 1; j < k; j++) 
				{
					
					x=document.getElementsByName(arr[j]);
					for(var i=0;i<x.length;i++)
					{ 
						
						if(x[i].checked)
						{
							p++;
							
						} 
					} 
					
				
					
				}

			
				if(p==k-1)
				{
					return confirm('没有遗漏的题目.\n 确定提交吗？')
				}
				else
				{
					return confirm("还有没完成的题.\n确定提交吗?");
					
				}
				
				
			
		}

	</script>

	<script type="text/javascript">
		$(function(){
			// $("#school").each(function(){
			// 	$(this).click(function(){
			// 		alert($(this).text());
			// 	})
			// })
			$(".school").on("click",function(){ 
		     	$("#academy").val($(this).text());
		     	  $("#close1").trigger('click'); 
			}) 
		})
	</script>
</body>
</html>