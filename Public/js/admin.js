addLoadEvent(change());
addLoadEvent(iframe1());
addLoadEvent(Picture());


function change()
{
	if (!document.getElementById) return false;
	if (!document.getElementById("aa1")) return false;
	if (!document.getElementById("aa2")) return false;
	a1=document.getElementById("aa1");
	a2=document.getElementById("aa2");
	a1.onclick=function()
	{
		a1.className="a1";
		a2.className="a2";
		a2.parentNode.style.backgroundColor="rgba(0,0,0,0.02)";
		a2.parentNode.style.boxShadow="0px 0px 0px 0px transparent";
		a2.parentNode.style.border="1px solid transparent";
		a1.parentNode.style.backgroundColor="rgba(51, 137, 195, 0.73)";
		a1.parentNode.style.boxShadow="3px -1px 10px 2px rgba(0, 0, 0, 0.61)";
		a1.parentNode.style.border="1px solid rgba(14, 101, 158, 0.2)";
	}
	a2.onclick=function()
	{
		a1.className="a2";
		a2.className="a1";
		a1.parentNode.style.backgroundColor="rgba(0,0,0,0.02)";
		a1.parentNode.style.boxShadow="0px 0px 0px 0px transparent";
		a1.parentNode.style.border="1px solid transparent";
		a2.parentNode.style.backgroundColor="rgba(51, 137, 195, 0.73)";
		a2.parentNode.style.boxShadow="3px -1px 10px 2px rgba(0, 0, 0, 0.61)";
		a2.parentNode.style.border="1px solid rgba(14, 101, 158, 0.2)";
	}
}

function iframe1()
{
	parent.document.all("iframe1").style.height=document.body.scrollHeight;  
	parent.document.all("iframe1").style.width=document.body.scrollWidth;
}
 

 function Picture()
 {
 	setTimeout("Pic()",5000);
 	
 }

 function Pic()
 {
 	right=document.getElementById("right");
 	right.style.backgroundImage='url()';
 }

 