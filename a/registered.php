<?php


require 'core.php';
$conn=mysql_connect("localhost","root","");
mysql_select_db('realestate');
if(isset($_POST['Username'])&&isset($_POST['Password']))
{
$username=$_POST['Username'];
$password=$_POST['Password'];
//$password_hash=md5($password);
if(!empty($username)&&!empty($password))
{
$query="SELECT user_id FROM notregister WHERE username='$username' AND password='$password'";

if($query_run=mysql_query($query))
{
$query_num_rows=mysql_num_rows($query_run);
if($query_num_rows==0)
{
echo '<div id="m">'.'invalid username and password';
echo '</div>';
}
else if($query_num_rows==1)
{
echo 'ok done ';
$user_id=mysql_result($query_run,0,'user_id');
$_SESSION['user_id']=$user_id;
header('Location: ../home.php');
}
}

}
else
{
echo 'plzz fill properly';
}
}

?>
