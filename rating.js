function ratingForm()
{
var x=document.forms["query"]["name"].value;
var y=document.forms["query"]["email"].value;
var z=document.forms["query"]["query"].value;
var atpos=y.indexOf("@");
var dotpos=y.lastIndexOf(".");
if(x==null || x=="")
{
alert("Name must be filled out");

return false;
}
 if(y=="")
{
alert("email must be filled out");
return false;
}
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
 if(z=="")
{
alert("query is blanked..you should write something to do query");
return false;
}
  
}
