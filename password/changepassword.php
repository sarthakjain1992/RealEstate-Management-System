<!DOCTYPE html>
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
echo "<div id='match2'>New Password and Confirm Password aren't match..!!</div>";
}
else
$count1=0;
}

}
if($count==0 && $count1==0)
{

mysql_query("UPDATE notregister SET password='$b' where username='$name'");
echo "<div id='match1'>Your Password is successfully Changed</div>";

}
?>
<html lang="en" class="no-js">
	<head>
		<title>Buyer Details</title>
		
		

	
	<link href="../validation.js" rel="stylesheet" type="text/javascript">
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
<style>
		#welcome
		{
		font-family: 'Lobster', 'cursive;
		}
		#match
		{position:absolute;
		margin-top:260px;
		margin-left:900px;
		color:red;
		}
		#match1
		{position:absolute;
		margin-top:260px;
		margin-left:900px;
		color:white;
		}
		#match2
		{position:absolute;
		margin-top:335px;
		margin-left:900px;
		color:Red;
		}
		</style>
		</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li>
									<a class="gn-icon gn-icon-download" href="../home.php">Home</a>
									
								</li>
								
								<li><a class="gn-icon gn-icon-archive" href="../blogs/index.php">Blogs & News</a></li>
								<li>
									<a class="gn-icon gn-icon-archive" href="../product.php">Products</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article" href="../seller.php">Seller</a></li>
										<li><a class="gn-icon gn-icon-pictures" href="../buyer.php">Buyer</a></li>
										
									</ul>
								</li>
								<li><a class="gn-icon gn-icon-cog">Settings</a></li>
								<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator" href="">Change Password</a></li>
										<li><a class="gn-icon gn-icon-photoshop"href="../logout.php">Logout</a></li>
									</ul>
								<li><a class="gn-icon gn-icon-help" href="../feed/feedback.php">Help & Support</a><li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="../blogs/sitedesigner.php">About Us</a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="../buyer.php"><span>Previous Page</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="../home.php"><span>RealEstateMarketing.com</span></a></li>
			</ul>
			<header>
				<h1 style="position:absolute;margin-top:-100px";>Real Estate Marketing<span><a href="../buyer.php">Change Your Password</a> </span></h1>
				<center>
		<form name="register2" method="post" action="changepassword.php" style="position:absolute;margin-left:150px";>
		<script src="validation.js"></script>
		<table>
		<br><br>
		<tr><td style='width:150px;'><font style="color:rgb(203,216,160);"><h3>Current Password :</h3> </font></td><td><input class="long" type="password" autocomplete="off" name="current" /></td></tr>
		<tr><td><font style="color:rgb(203,216,160);"><h3>New Password :</h3></font></td> <td><input class="long" type="password"id="password" name="new" /></td></tr>
	<tr><td><font style="color:rgb(203,216,160);"><h3>Confirm Password :</h3></font></td> <td><input class="long" type="password" id="password" name="confirm" /></td></tr>
				<tr><td><input class="long" type="submit" value="  Confirmed   " style="position:absolute;visibility:on;color:darkblack;height:40px;width:100px;border-radius:25px;margin-left:180px;margin-top:20px;"/></td></tr>
		</table>
</form></center>
			</header> 
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>