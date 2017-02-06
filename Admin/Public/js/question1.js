$(document).ready(function(){
	$("#qu-select1").click(function(){
		var $div1=$("<div id='dd'></div>");
		$("#add").append($div1);
		var $count1=$("#add>#dd").length;
		//题号
		var $num=$("<p class='qque'>"+$count1+".</p>");
		$div1.append($num);
		//问题
		var $question=$("<input type='text' class='form-control qu1' name='xuanze["+($count1-1)+"][0]'><input type='hidden' value='0' class='form-control qu1' name='xuanze["+($count1-1)+"][1]'>");
		$div1.append($question);
		//分值
		// var $grade=$("<input type='text' placeholder='分值' id='grade' name='xuanze["+($count1-1)+"][1]'>");
		// $div1.append($grade);

		 $div1.append("<br><br>");
		//第一个选项
		var $select=$("<input type='radio' class='que2' value='1' name='xuanze["+($count1-1)+"][1]'>");
		$div1.append($select);
		var $answernum=$("<p class='que'>A:</p>");
		$div1.append($answernum);
		var $answer=$("<input type='text' class='form-control qu2' id='quanswer' name='xuanze["+($count1-1)+"][2][0]'>");
		$div1.append($answer);
		$div1.append("<br><br>");

		//添加回答
		$addanswer=$("<span class='glyphicon glyphicon-plus' id='addselect1'><a href='www.baidu.com' id='a1'>添加选项</a></span>")
		$div1.append($addanswer);
		$div1.append("<br><br>");

		//分隔线
		$rem="<div id='div1' style='border-top:1px dashed rgba(0, 0, 0, 0.16);'></div>";
		$div1.append($rem);
		$div1.append("<br>");
	})


});
//多选

// $(document).ready(function(){
// 	$("#qu-select2").click(function(){
// 		var $div1=$("<div id='dd'></div>");
// 		$("#add").append($div1);
// 		var $count1=$("#add>#dd").length;
// 		//题号
// 		var $num=$("<p class='qque'>"+$count1+".</p>");
// 		$div1.append($num);
// 		//问题
// 		var $question=$("<input type='text' class='form-control qu1' name='question"+$count1+"'>");
// 		$div1.append($question);
// 		//分值
// 		var $grade=$("<input type='text' placeholder='分值' id='grade' name='grade"+$count1+"'>");
// 		$div1.append($grade);

// 		$div1.append("<br><br>");
// 		//第一个选项
// 		var $select=$("<input type='checkbox' class='que2' value='answernum1' name='que"+$count1+"_1'>");
// 		$div1.append($select);
// 		var $answernum=$("<p class='que'>A:</p>");
// 		$div1.append($answernum);
// 		var $answer=$("<input type='text' class='form-control qu2' id='quanswer' name='queanswer"+$count1+"_1'>");
// 		$div1.append($answer);
// 		$div1.append("<br><br>");

// 		//添加回答
// 		$addanswer=$("<span class='glyphicon glyphicon-plus' id='addselect2'><a href='www.baidu.com' id='a1'>添加选项</a></span>")
// 		$div1.append($addanswer);
// 		$div1.append("<br><br>");

// 		//分隔线
// 		$rem="<div id='div1' style='border-top:1px dashed rgba(0, 0, 0, 0.16);'></div>";
// 		$div1.append($rem);
// 		$div1.append("<br>");
// 	})


// });

$(function(){
	$(document).on("click", "#a1", function() {
		$name1=$(this).parent().attr('id');
		var $count2=$("#add>#dd").length;
		var $count1=$(this).parent().siblings("#quanswer").length;
		if ($name1=="addselect1") 
		{
			var $select=$("<input type='radio' class='que2' value='"+($count1+1)+"' name='xuanze["+($count2-1)+"][1]'>");
			$(this).parent().before($select);
		}
		else if ($name1="addselect2")
		{
			var $select=$("<input type='checkbox' class='que2' value='answernum"+$count1+"' name='xuanze["+($count2-1)+"][1]'>");
			$(this).parent().before($select);
		}
		var $answernum=$("<p class='que'>"+String.fromCharCode(65+$count1)+":</p>");
		$(this).parent().before($answernum);
		var $answer=$("<input type='text' class='form-control qu2' id='quanswer' name='xuanze["+($count2-1)+"][2]["+$count1+"]'>");
		$(this).parent().before($answer);
		$(this).parent().before("<br><br>");
    	return false;
	});
});

$(document).ready(function(){
	$("#qu-select3").click(function(){
		var $div1=$("<div id='dd'></div>");
		$("#add").append($div1);
		var $count1=$("#add>#dd").length;
		//题号
		var $num=$("<p class='qque'>"+$count1+".</p>");
		$div1.append($num);
		//问题
		var $question=$("<input type='text' class='form-control qu1' name='question"+$count1+"'>");
		$div1.append($question);
		//分值
		var $grade=$("<input type='text' placeholder='分值' id='grade' name='grade"+$count1+"'>");
		$div1.append($grade);

		$div1.append("<br><br>");

		//回答
		$addanswer=$("<p id='p1'>问答题无标准答案</p>")
		$div1.append($addanswer);

		//分隔线
		$rem="<div id='div1' style='border-top:1px dashed rgba(0, 0, 0, 0.16);'></div>";
		$div1.append($rem);
		$div1.append("<br>");
	});
});

