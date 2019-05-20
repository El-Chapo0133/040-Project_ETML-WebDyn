function GetContactContent(file)
{ 
	var req = null;

	document.getElementById("contact-content").innerHTML = "Started...";

	if (window.XMLHttpRequest)
	{
			req = new XMLHttpRequest();
		if (req.overrideMimeType) 
		{
			req.overrideMimeType('text/xml');
		}
	} 
	else if (window.ActiveXObject) 
	{
		try {
			req = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e)
		{
			try {
				req = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {}
		}
   	}

	req.onreadystatechange = function()
	{ 
		document.getElementById("contact-content").innerHTML = "Wait server...";
		if(req.readyState == 4)
		{
			if(req.status == 200)
			{
				document.getElementById("contact-content").innerHTML = req.responseText;
			}	
			else	
			{
				document.getElementById("contact-content").innerHTML = req.readyState + " - " + "Error: returned status code " + req.status + " - " + req.statusText + " on " + file;
				}	
		}
	}; 
	req.open("GET", file, true);
	req.send(null);
}