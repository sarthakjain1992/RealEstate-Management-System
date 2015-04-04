var email; var p;
function validateForm()
{
var x=document.forms["register"]["Username"].value;
var y=document.forms["register"]["Password"].value;
if(x==null || x=="")
{
alert("Username must be filled out");

return false;
}
 if(y=="")
{
alert("Password must be filled out");
return false;
}
}

function validateForm1()
{
var x=document.forms["register1"]["Username"].value;
var y=document.forms["register1"]["Password"].value;
var z=document.forms["register1"]["confirm_password"].value;
p=z;
var a=document.forms["register1"]["regemail"].value;
var b=document.forms["register1"]["reregemail"].value;
var atpos=a.indexOf("@");
var dotpos=a.lastIndexOf(".");
var atpos1=b.indexOf("@");
var dotpos1=b.lastIndexOf(".");
if(x==null || x=="")
{
alert("Username must be filled out");

return false;
}
 if(y=="")
{
alert("Password must be filled out");
return false;
}
if(z=="")
{
alert("re-enter your Password");
return false;
}
/*var count=y.length;
if(count<6)
alert("password must be of 6 character");
if(z!=y)
{
alert("Password doesn't match");
return false;
}*/
if(a=="")
{
alert("enter your email-id");
return false;
}
if(b=="")
{
alert("Re-enter your email-id");
return false;
}
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=a.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  if (atpos1<1 || dotpos1<atpos1+2 || dotpos1+2>=b.length1)
  {
  alert("Not a valid e-mail address");
  return false;
  }
if(a!=b)
{
alert("Email-ID doesn't match");
return false;
}
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=a.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  if (atpos1<1 || dotpos1<atpos1+2 || dotpos1+2>=b.length1)
  {
  alert("Not a valid e-mail address");
  return false;
  }
else
email=a;
}
function alertmessage()
{
/*var subemail="";
var c=email.lastIndexOf("@");
for(var i=c;i<email.length();i++)
{
subemail=subemail+email[i];
}
var d=email[0];
alert(subemail);*/
alert("your password is sent to Your email account");
}
function check()
{
var m=document.forms["register2"]["current"].value;
var n=document.forms["register2"]["new"].value;
var o=document.forms["register2"]["confirm"].value;
if(m==null || m=="")
{
alert("Must enter your Current Password!!");
return false;
}
if(n=="")
{
alert("Enter new password..");
return false;
}
if(o=="")
{
alert("Enter password again..!!");
return false;
}
if(p!=m)
{
alert("current password is not correct..");
return false;
}
if(n!=0)
{
alert("password doesn't match..enter correct password..!!");
return false;
}
if(m==n)
{
alert("new password doesn't be same as current password..");
return false;
}
}

