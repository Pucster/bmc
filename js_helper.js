var xmlhttp;

function changeMainContent(str)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
var url="http://localhost/bmc/";
url=url+str;
url=url+"?sid="+Math.random();
xmlhttp.onreadystatechange=mainContentStateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function mainContentStateChanged()
{
if (xmlhttp.readyState==4)
{
document.getElementById("mainContent").innerHTML=xmlhttp.responseText;
}
}

function doStuff(str)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
var url="http://localhost/bmc/display.php";
url=url+"?q="+str;
url=url+"&sid="+Math.random();
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