function addLoadEvent(func)
{
	var oldonload=window.omload;
	if (typeof window.onload!='function') 
	{
		window.omload=func;
	} 
	else
	{
		window.onload=function()
		{
			oldonload();
			func();
		}
	}
}