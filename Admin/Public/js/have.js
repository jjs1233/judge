addLoadEvent(Picture());



function Picture()
{
	if (!document.getElementById) return false;
	if (!document.getElementById("look1")) return false;
	if (!document.getElementById("make1")) return false;
	look=document.getElementById("look1");
	make=document.getElementById("make1");
	look.onclick=function()
	{
		pic=parent.document.getElementById("right");
		pic.style.backgroundImage="";
	}

}