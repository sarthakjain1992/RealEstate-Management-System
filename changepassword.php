<?php
include 'conn.php';
include 'core.php';
@$a=$_POST['current'];
@$b=$_POST['new'];
@$c=$_POST['confirm'];
if(loggedin())
{
@$name=getuserfield('username');
}
$count=2; $count1=2;
if(!empty($a) && !empty($b) &&!empty($c))
{ 

$result=mysql_query("SELECT * FROM notregister WHERE username='$name'");
while($row=mysql_fetch_array($result))
{
if($row['password']!=$a)
{ $count=1;
echo "<div id='match'>password doesn't match with current password..</div>";
}
else
$count=0;
if($b!=$c)
{
$count1=1;
echo "<div id='match'>New Password and Confirm Password aren't match..!!</div>";
}
else
$count1=0;
}

}
if($count==0 && $count1==0)
{

mysql_query("UPDATE notregister SET password='$b' where username='$name'");
echo "<div id='match'>Your Password is successfully Changed</div>";

}
?>
<html>
<head>
    <link href="index.css" rel="stylesheet" type="text/css" />
	<link href="layout.css" rel="stylesheet" type="text/css" />
	<link href="menu.css" rel="stylesheet" type="text/css" />
	<link href="validation.js" rel="stylesheet" type="text/javascript">
<style>
#match
{
position:absolute;
color:darkred;
margin-top:200px;
margin-left:550px;
}
#match1
{
position:absolute;
color:darkred;
margin-top:250px;
margin-left:500px;
}
</style>
<title>forgot password</title>
</head>
<body>

<header>
 	<center> <a href="home.php"><img class="shift5" src="Home.jpg" style="float:right;border-radius:10px;"width=100px height=50px></a></center>    
</header>

<div id="box4">

	
	<div id="shift3">
		

<center>
		<form name="register2" method="post" action="changepassword.php">
		<script src="validation.js"></script>
		<table>
		<br><br>
		<tr><td style='width:150px;'><font style="color:rgb(203,216,160);"><h3>Current Password :</h3> </font></td><td><input class="long" type="password" autocomplete="off" name="current" /></td></tr>
		<tr><td><font style="color:rgb(203,216,160);"><h3>New Password :</h3></font></td> <td><input class="long" type="password"id="password" name="new" /></td></tr>
	<tr><td><font style="color:rgb(203,216,160);"><h3>Confirm Password :</h3></font></td> <td><input class="long" type="password" id="password" name="confirm" /></td></tr>
				<tr><td><input class="long" type="submit" value="  Confirmed   " style="position:absolute;visibility:on;color:darkblack;height:40px;width:100px;border-radius:25px;margin-left:180px;margin-top:20px;"/></td></tr>
		</table>
</form></center>

</div>

<div id="box2"><h2><p align=right style="margin-right:30px; margin-top:30px;">Designed By<br> Ajay Kedia<br>Ankit Adarsh<br></p></h2>
</div>
</body>
</html>