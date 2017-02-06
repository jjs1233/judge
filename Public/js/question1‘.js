addLoadEvent(number());
addLoadEvent(addelement());
addLoadEvent(addchange());
addLoadEvent(submit2());

function addchange()
{
  	if (document.getElementById("addselect")) 
  	{
  		addselect=getElementById("addselect");
  		addselect.onmouseover=function()
  		{
  			alert();
  		}
  	}
}
function number()
{
	if (!document.getElementById) return false;
	if (!document.getElementById("title")) return false;
	if (!document.getElementById("p4")) return false;
	var title=document.getElementById("title");
	title.onchange=function()
	{
		p4=document.getElementById("p4");

		if (title.value==null) 
		{
			p4.style.color="red";
		}
		else
		{
			p4.style.color="blue";
		}
	}
}

function addelement()
{
	que1=document.getElementById("qu-select1");
	que2=document.getElementById("qu-select2");
	j=1;
	que1.onclick=function()
	{
			i=1;
			add=document.getElementById("add");
	 	 	add.innerHTML="";
	 		
	 		var label1=document.createElement("label");
		 	label1.setAttribute("class","que");
		 	textnum=document.createTextNode(j+".");
		 	label1.appendChild(textnum);
		 	add.appendChild(label1);

		 	input1=document.createElement("input");
		 	input1.setAttribute("type","text");
		 	input1.setAttribute("class","form-control qu1");
		  	input1.setAttribute("placeholder","请输入问题");
		 	input1.setAttribute("name","question"+j);
	 	 	add.appendChild(input1);



		 	 //分值
		 	 grade=document.createElement("input");
		 	 grade.setAttribute("type","text");
		 	 grade.setAttribute("name",j);
		 	 grade.setAttribute("placeholder","分值");
		 	 grade.setAttribute("id","grade");
		 	 add.appendChild(grade);

		 	 br=document.createElement("br");
		 	 add.appendChild(br);
		 	 br=document.createElement("br");
		 	 add.appendChild(br);

		 	 //选项A,b,c,d
		 	 tab=document.createElement("table");
		 	 tab.setAttribute("width","80%");
		 	 	
		 	 tr=document.createElement("tr");
		 	 td=document.createElement("td");
		 	 var label2=document.createElement("label");
		 	 label2.setAttribute("class","que");
		 	 text=document.createTextNode(String.fromCharCode(64+i)+".");
		 	 label2.appendChild(text);
		 	 input2=document.createElement("input");
		 	 input2.setAttribute("type","text");
		 	 input2.setAttribute("class","form-control qu1");
		 	 input2.setAttribute("placeholder","请输入选项");
		 	 input2.setAttribute("name","answer"+j+parseInt(i+1));
		 	 td.appendChild(label2);
		 	 td.appendChild(input2);
		 	 tr.appendChild(td);
		 	 tab.appendChild(tr);	
		 	 add.appendChild(tab);

		 	 //添加选项
		 	 addselect=document.createElement("span");
		 	 addselect.setAttribute("class","glyphicon glyphicon-plus");
		 	 addselect.setAttribute("id","addselect");
		 	 addselect.innerHTML="添加选项";
		 	 add.appendChild(addselect);

		 	 br=document.createElement("br");
		 	 add.appendChild(br);
		 	 br=document.createElement("br");
		 	 add.appendChild(br);

	}
	que2.onclick=function()
	{
		alert()
	}
	// taba1.onclick=function()
	// {
	// 	num1=0;
	// 	num2=0;
	// 	num3=0;

	// 	if (number1.value!='') 
	// 	{
	// 		num1=number1.value;
	// 	}
	// 	if (number2.value!='') 
	// 	{
	// 		num2=number2.value;
	// 	}
	// 	if (number3.value!='') 
	// 	{
	// 		num3=number3.value;
	// 	}
	// 	if (document.getElementById("title").value=='') 
	// 	{
	// 		alert("标题不能为空！！！");
	// 		return;
	// 	}
	// 	if (num2>5) 
	// 	{
	// 		alert("选项个数不得大于5！！");
	// 		return;
	// 	}
	// 	if (num1>0&&num2>0) 
	// 	{
	// 			add=document.getElementById("add");
	//  	 	add.innerHTML="";

	//  		for (var j = 1; j <= num1; j++) {
	 			
	 			
	// 	 	 	var label1=document.createElement("label");
	// 	 	 	label1.setAttribute("class","que");
	// 	 	 	textnum=document.createTextNode(j+".");
	// 	 	 	label1.appendChild(textnum);
	// 	 	 	add.appendChild(label1);

	// 	 	 	input1=document.createElement("input");
	// 	 	 	input1.setAttribute("type","text");
	// 	 	 	input1.setAttribute("class","form-control qu1");
	// 	 	 	input1.setAttribute("placeholder","请输入问题");
	// 	 	 	input1.setAttribute("name","question"+j);
	// 	 	 	add.appendChild(input1);



	// 	 	 	//正确答案
	// 	 	 	select=document.createElement("select");
	// 	 	 	select.setAttribute("name","select"+j);
	// 	 	 	option=document.createElement("option");
	// 	 	 	option.innerHTML="答案";
	// 	 	 	option.setAttribute("value",0)
	// 	 	 	select.appendChild(option);
	// 	 	 	for (var i = 0; i <num2; i++) {
	// 	 	 		option=document.createElement("option");
	// 	 	 		option.innerHTML=String.fromCharCode(65+i);
	// 	 	 		option.setAttribute("value",parseInt(i+1));
	// 	 	 		select.appendChild(option);
	// 	 	 	}
	// 	 	 	add.appendChild(select);

	// 	 	 	//分值
	// 	 	 	grade=document.createElement("input");
	// 	 	 	grade.setAttribute("type","text");
	// 	 	 	grade.setAttribute("name",j);
	// 	 	 	grade.setAttribute("placeholder","分值");
	// 	 	 	grade.setAttribute("id","grade");
	// 	 	 	add.appendChild(grade);

	// 	 	 	br=document.createElement("br");
	// 	 	 	add.appendChild(br);
	// 	 	 	br=document.createElement("br");
	// 	 	 	add.appendChild(br);

	// 	 	 	//选项A,b,c,d
	// 	 	 	tab=document.createElement("table");
	// 	 	 	tab.setAttribute("width","80%");
	// 	 	 	for (var i = 0; i <num2; i++) {
	// 	 	 		tr=document.createElement("tr");
	// 	 	 		td=document.createElement("td");
	// 	 	 		var label2=document.createElement("label");
	// 	 	 		label2.setAttribute("class","que");
	// 	 	 		text=document.createTextNode(String.fromCharCode(65+i)+".");
	// 	 	 		label2.appendChild(text);
	// 	 	 		input2=document.createElement("input");
	// 	 	 		input2.setAttribute("type","text");
	// 	 	 		input2.setAttribute("class","form-control qu1");
	// 	 	 		input2.setAttribute("placeholder","请输入选项");
	// 	 	 		input2.setAttribute("name","answer"+j+parseInt(i+1));
	// 	 	 		td.appendChild(label2);
	// 	 	 		td.appendChild(input2);
	// 	 	 		tr.appendChild(td);
	// 	 	 		tab.appendChild(tr);
	// 	 	 	}
	// 	 	 	add.appendChild(tab);


	// 	 	 	br=document.createElement("br");
	// 	 	 	add.appendChild(br);
	// 	 	 	br=document.createElement("br");
	// 	 	 	add.appendChild(br);

	// 	 	 	//下划线
	// 	 	 	div1=document.createElement("div");
	// 	 	 	div1.setAttribute("style","border-top:1px dashed rgba(0, 0, 0, 0.16);");
	// 	 	 	add.appendChild(div1);
	// 	 	 	br=document.createElement("br");
	// 	 	 	add.appendChild(br);
	//  	 	}
	//  	 	for ( k = 0; k<num3; k++) {
	//  	 		m=parseInt(k)+parseInt(j);

	//  	 		var label3=document.createElement("label");
	// 	 	 	label3.setAttribute("class","que");
	// 	 	 	textnum=document.createTextNode(m+".");
	// 	 	 	label3.appendChild(textnum);
	// 	 	 	add.appendChild(label3);

	// 	 	 	input3=document.createElement("input");
	// 	 	 	input3.setAttribute("type","text");
	// 	 	 	input3.setAttribute("class","form-control qu1");
	// 	 	 	input3.setAttribute("placeholder","请输入问题");
	// 	 	 	input3.setAttribute("name","question"+m);
	// 	 	 	add.appendChild(input3);

	// 	 	 	//分值
	// 	 	 	grade=document.createElement("input");
	// 	 	 	grade.setAttribute("type","text");
	// 	 	 	grade.setAttribute("name",j);
	// 	 	 	grade.setAttribute("placeholder","分值");
	// 	 	 	grade.setAttribute("id","grade");
	// 	 	 	add.appendChild(grade);

	// 	 	 	br=document.createElement("br");
	// 	 	 	add.appendChild(br);
	// 	 	 	br=document.createElement("br");
	// 	 	 	add.appendChild(br);

	// 	 	 	textarea=document.createElement("textarea");
	// 	 	 	textarea.setAttribute("class","form-control");
	// 	 	 	textarea.setAttribute("style","width:70%;");
	// 	 	 	textarea.setAttribute("rows","5");
	// 	 	 	textarea.setAttribute("rows","5");
	// 	 	 	textarea.setAttribute("placeholder","请输入参考答案，可不填");
	// 	 	 	textarea.setAttribute("name","para"+m);
	// 	 	 	add.appendChild(textarea);

	// 	 	 	br=document.createElement("br");
	// 	 	 	add.appendChild(br);
	// 	 	 	br=document.createElement("br");
	// 	 	 	add.appendChild(br);

	// 	 	 	//下划线
	// 	 	 	div1=document.createElement("div");
	// 	 	 	div1.setAttribute("style","border-top:1px dashed rgba(0, 0, 0, 0.16);");
	// 	 	 	add.appendChild(div1);
	// 	 	 	br=document.createElement("br");
	// 	 	 	add.appendChild(br);

		 	 	
	 	 		
	//  	 	}
	 	 	
	//  	 		submit2=document.getElementById("submit2");
	//  	 		submit2.style.display="block";
	 	 	
 	 	
	// 	}
	// 	else
	// 	{
	// 		submit2=document.getElementById("submit1");
	//  	 	submit2.style.display="none";
	// 	}

		

 	 	
 	 
 	}



 	function submit2()
 	{
 		submit=document.getElementById("submit1");
 		submit.onsubmit=function()
 		{
 			  if (confirm("你确认要提交吗？"))
 			  {
 			  	return true;
 			  }
 			  else
 			  {
 			  	return false;
 			  }
 		}
 	}
