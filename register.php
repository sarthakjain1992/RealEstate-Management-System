<?php
/*
require 'core.php';
$conn=mysql_connect("localhost","root","");
mysql_select_db('project');


$result = mysql_query("SELECT * FROM notregister",$conn);
$count=0;
while($row = mysql_fetch_array($result))
  {
  if((@$row['username']==@$_POST['Username'])&&(@$row['password']==@$_POST['Password']))
  {
  header('Location: home.php');
  $count=1;
  
  }
  }
if($count==0)
{
echo "not valid";
}*/
?>
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
header('Location: home.php');
}
}

}
else
{
echo 'plzz fill properly';
}
}

?>

 <html>
<head>
    <link href="index.css" rel="stylesheet" type="text/css" />
	<link href="layout.css" rel="stylesheet" type="text/css" />
	<link href="validation.js" rel="stylesheet" type="text/javascript">
	<link href="menu.css" rel="stylesheet" type="text/css" />

<title>Register</title>
<script>
function call()
{
alert("your password is sent to your account..!!");
return false;
}
</script>
<style>
#m
{
color:red;
margin-left:650px;
position:absolute;
width:300px;
height:200px;
margin-top:490px;
}
	#button
	{
	position:absolute;
	font-size:20px;
	position:absolute;
	margin-left:100px;
	color:darkred;
	font-family:calibri;
	
	}
</style>
</head>
<body>

<div id="box1" >

	<center> <a href="mainpage.php"><img class="shift5" src="Home.jpg" style="float:right;border-radius:10px;"width=100px height=50px></a></center>
		<center> <a href="notregistered.php"><img class="shift" src="i1.png" width=150 height=70 style="margin-left:120px; border-radius:10px;"></a></center>
	
		<br><br><br><br>
		
&nbsp &nbsp &nbsp &nbsp &nbsp  <h2>ALREADY REGISTERED:</h2>
<script src="validation.js"></script>
		<form name="register" method="post" action="<?php echo $current_file; ?>">
		<div id="shift1">
		<table>
		<tr><td style='width:150px;'><font style="color:rgb(203,216,160);"><h3>Username :</h3> </font></td><td><input class="long" type="text" name="Username"/></td></tr>
		<tr><td><font style="color:rgb(203,216,160);"><h3>Password :</h3></font></td> <td><input class="long" type="password"  name="Password"/></td></tr>
	<tr><td><br><input type="submit" value="Login" name=login" type="password" onclick="return validateForm()"style="position:absolute;color:darkblack;height:40px;width:100px;border-radius:25px;margin-left:100px;"/></td></tr>
			</table>
			
	</form>
<form action="forgot.php" method="post">
<a onclick="return call()"><input type="submit" value="forgot password"style="position:absolute;color:darkblack;height:40px;width:100px;border-radius:25px;margin-left:210px;margin-top:-2px;" /></a>
	</form>
</div></div>


<div id="box2"><h2><p align=right style="margin-right:30px; margin-top:30px;">Designed By<br> Ajay Kedia<br>Ankit Adarsh<br></p></h2>
</div>
</body>

</html>
