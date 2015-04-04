<?php
require 'conn.php';

require 'core.php';
if(loggedin())
{
@$name=getuserfield('username');
echo "<div id='component' style='margin-top:100px;float:right;z-index:11;height:55px;';><b style='color:black';>Welcome ".$name."</b></div><br>";
$result=mysql_query("select password from notregister where username='$name'");
while($row=mysql_fetch_array($result))
{
if(isset($_POST['password']))
{
$password=$_POST['password'];
if($password==$row['password'])
{
header('Location: updateid.php');
}
else
{
echo "invalid password";
}
}
}
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
	
		<title>Buyer details</title>
		
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->



	<body>
		<div class="container">
			<!-- Top Navigation -->
			
			<header style="position:absolute;margin-top:0px;margin-left:440px;";>
				<div onmousemove='displayMessage(this)'><h1>Real Estate Marketing <em>Revisited </em> <span>We Tried to Find Out Best Deals For You</span></h1>	</div>
				<nav class="codrops-demos">
					<a href="../home.php" title="Basic Usage">Home</a>
					<a href="../seller.php" title="Biaxial Headers">Seller</a>
					<a  href="../buyer.php" title="Wide Tables">Buyer</a>
					<a  href="" title="Wide Tables">Update</a>
					<a  href="" title="Wide Tables">Others</a>
				</nav>
			</header>
			
			<form action="" method="post" style="position:absolute;margin-top:250px;margin-left:600px";><strong>Password:</strong><input type="password" name="password" />
			<form>
			<div id="txtHint"><b>Enter Password and Press Enter.</b></div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>