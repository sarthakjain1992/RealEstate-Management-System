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

<script>
function call1()
{
 window.alert('please!login first!!')

    window.location.href='buyerdetails.php';
}
</script>
	</head>
<?php
require 'core.php';
require 'conn.php';

$result=mysql_query("select *from tabl1 ");
 
 echo "<div class='component' style='margin-top:150px ;position:absolute;margin-left:270px';>
				<table class=''>
					<thead>
						<tr>
							<th>Owner</th><th>Property</th><th>Area</th><th>Price</th></tr>
					</thead>";
					$i=0;
					echo "<form action='' method='POST'>";
while($row = mysql_fetch_array($result))
  {

  echo "<tbody><tr><th>".$row['owner1']."</th><td>". $row['property1']."</td><td>". $row['area1']."</td><td>". $row['price1']."</td>";}
	echo "</tr></tbody>";
 
 echo "</form>";
 echo "</table></div>"; 





@$check=$_POST['check'];
if($check!=null)
echo "<script>alert('hello');</script>";



?>

	<body>
		<div class="container">
			<!-- Top Navigation -->
			
			<header style="position:absolute;margin-top:0px;margin-left:440px;";>
				<div onmousemove='displayMessage(this)'><h1>Real Estate Marketing <em>Revisited </em> <span>We Tried to Find Out Best Deals For You</span></h1>	</div>
				<nav class="codrops-demos">
					<a href="../mainpage.php" title="Basic Usage">Home</a>
					<a href="../seller.php" title="Biaxial Headers">Seller</a>
					<a 	href="../a/register.php" title="Wide Tables" onclick="call1()">Buyer</a>
				</nav>
			</header>
			
				
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>