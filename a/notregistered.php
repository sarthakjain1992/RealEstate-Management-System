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

$query= "INSERT INTO `notregister`(`username`, `password`, `email`,`contact`,`address`) VALUES ('$username','$password','$email','$contact','$address')";
if($query_run=mysql_query($query))
{
?>
<center><div style="width:700;height:700;position:absolute; margin-top:100px;background-color: #47a3da;"><br><br><a href="Register.php">--->GO BACK TO LOGIN PAGE<---</a><br><br></div></center>
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
}
else if(loggedin())
{

echo 'you\'r already register and logged in !!';
}
?>