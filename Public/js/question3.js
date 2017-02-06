addLoadEvent(check());


function check()
{
	if (!document.getElementById) return false;
	if (!document.getElementById("title")) return false;
	if (!document.getElementById("submit1")) return false;
	if (!document.getElementById("grade")) return false;
	title=document.getElementById("title");
	submit1=document.getElementById("submit1");
	grade=document.getElementById("grade");

	title.onchange=function()
	{
		if (title.value=='') 
		{
			p4.style.color="red";
		}
		else
		{
			p4.style.color="blue";
		}
	}

	grade.onchange=function()
	{
		if (grade.value=='') 
		{
			p4.style.color="red";
		}
		else
		{
			p4.style.color="blue";
		}
	}




	submit1.onsubmit=function()
	{
		if (title.value=='') 
		{
			alert("题目不可以为空！！！！");
			return false;
		}
		else if(grade.value=='')
		{
			alert("总分不可以为空！！！！");
			return false;
		}
		else
		{
			alert("创建成功！");
			return true;
		}
	}

	
}