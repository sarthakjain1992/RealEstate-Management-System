<?php
/*
$conn=mysql_connect('localhost','root','');
mysql_select_db('project',$conn);
@$a=$_POST['Username'];
@$b=$_POST['Password'];
@$c=$_POST['regemail'];
if(isset($a)&&isset($b)&&isset($c))
{
mysql_query("INSERT INTO notregister(username,password,email) VALUES ('$a','$b','$c')",$conn);*/

?>
<?php

require 'core.php';
require 'conn.php';
if(!loggedin())
{

//echo 'register';
if(isset($_POST['Username'])&&isset($_POST['Password'])&&isset($_POST['confirm_password'])&&isset($_POST['regemail'])&&isset($_POST['reregemail']))
{
$username=$_POST['Username'];
$password=$_POST['Password'];
$password_again=$_POST['confirm_password'];
$email=$_POST['regemail'];
$reemail=$_POST['reregemail'];
$contact=$_POST['contact'];
$address=$_POST['address'];
//$password_hash=md5($password);


if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($email)&&!empty($reemail))
{

if($password!=$password_again)
{
echo '<div id="p">'.'password do not match ! please enter same password';
echo '<div>';
}
else
{
$query="SELECT username FROM notregister WHERE username='$username'";
$query_run=mysql_query($query);
if(mysql_num_rows($query_run)==1)
{
echo '<div id="m">'.'Username Exists';
echo '</div>';

}
else
{
echo "hello";
$query= "INSERT INTO `notregister`(`username`, `password`, `email`,`contact`,`address`) VALUES ('$username','$password','$email','$contact','$address')";
if($query_run=mysql_query($query))
{
?>
<center><div style="position:absolute; margin-top:100px;"><br><br><a href="Register.php">--->GO BACK TO LOGIN PAGE<---</a><br><br></div></center>
<?php
header('Location : register_success.php');
}
else
{
echo mysql_error();

echo 'we could not register you !!';
}

}
}


}
else
{

echo "<script  type='text/javascript'>\n";
echo "alert('MUST FILL ALL FIELDS plzz!!!!');\n";
echo "</script>";
echo "<script>";
echo 'x=prompt (“Enter ur name”, “ ”);';
echo "document.write(“Good Morning  “+x)";
echo "</script>";



}
}
?>

<html>
<head>
    <link href="index.css" rel="stylesheet" type="text/css" />
	<link href="layout.css" rel="stylesheet" type="text/css" />
	<link href="menu.css" rel="stylesheet" type="text/css" />
	<link href="validation.js" rel="stylesheet" type="text/javascript">

<title>Not Registered</title>
<style>
#m
{
color:red;
margin-left:790px;
position:absolute;
width:300px;
height:200px;
margin-top:440px;
}
#z
{
color:red;
position:absolute;
margin-left:190px;
margin-top:140px;
}
</style>
</head>
<body>

<div id="box1">

	
		<center><img class="shift" src="logout.jpg" style="border-radius:25px;" width=300></center>
		
<br>

		
		<div id="shift1">
		<script src="validation.js"></script>	
		<form name="register1"  action="NotRegistered.php" method="POST">
			
		<table>
	
			<tr><td><label>Username</label> </td><td><input class="textcolorchanged" name="Username" type="text"  autocomplete="on" placeholder="Username" maxlength="100"/>
				</select></td></tr>
			<tr><td><label>Password</label> </td> <td><input type="password"  name="Password" autocomplete="off"  placeholder="Password "/></td></tr>
			<tr><td><label>Confirm Password</label> </td> <td><input type="password" name="confirm_password"   autocomplete="off"s /></td></tr>
			<tr><td><label>Email</label></td><td style="align:center;"><input type="email" autocomplete="on" name="regemail" placeholder="Email"/></td></tr> 
			<tr><td><label>Confirm Email</label></td><td style="align:center;"><input type="email" name="reregemail"    autocomplete="off" /></td></tr> 
			<tr><td><label>Contact No.*</label></td><td style="align:center;"><input type="text" name="contact"    value="+91" autocomplete="on" /></td></tr> 
			<tr><td><label>Address</label></td><td style="align:center;"><textarea name='address' cols='30' rows='5' ></textarea></td></tr> 
			<tr><td><input type="submit" value="submit" onclick="return validateForm1()" style="color:darkblack;height:40px;width:100px;border-radius:25px;"/></td></tr> 
	</table>
		</form>
		
<br/></div>


	
</div>

<div id="box2"><h2><p align=right style="margin-right:30px; margin-top:30px;">Designed By<br> Ajay Kedia<br>Ankit Adarsh<br></p></h2>
</div>
</body>
<?php
}
else if(loggedin())
{

echo 'you\'r already register and logged in !!';
}
?>
</html>