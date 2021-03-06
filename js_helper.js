var xmlhttp;

function changeMainContentWithConfirmation(url,question)
{
if (confirm(question)) {
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null) {
		alert ("Browser does not support HTTP Request");
		return;
	}
	xmlhttp.onreadystatechange=mainContentStateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
	}
}

function changeAlbumView(url)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
xmlhttp.onreadystatechange=viewAlbumStateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function changeMainContent(url)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
//url=url+"?sid="+Math.random();
xmlhttp.onreadystatechange=mainContentStateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function changeContent(url)
{
alert('Redirecting to '+url);
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
xmlhttp.onreadystatechange=contentStateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function contentStateChanged()
{
if (xmlhttp.readyState==4)
{
document.getElementById("secContent").innerHTML=xmlhttp.responseText;
}
}

function viewAlbumStateChanged()
{
if (xmlhttp.readyState==4)
{
document.getElementById("viewAlbum").innerHTML=xmlhttp.responseText;
}
}

function mainContentStateChanged()
{
if (xmlhttp.readyState==4)
{
document.getElementById("mainContent").innerHTML=xmlhttp.responseText;
}
}

function doStuff(url,str)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
url=url+"?q="+str;
//url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function stateChanged()
{
if (xmlhttp.readyState==4)
{
document.getElementById("displayYear").innerHTML=xmlhttp.responseText;
}
}

function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
return null;
}