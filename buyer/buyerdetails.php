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
var color=new Array("black","green","grey","blue","orange","red","purple","yellow"),count=0;
function displayMessage(Event)
{
if(count==color.length) count=0;
Event.style.color=color[count++];
}

</script>

	</head>
<?php
include "conn.php";
include "core.php";
if(loggedin())
{
@$name=getuserfield('username');
echo "<div id='component' style='margin-top:100px;float:right;z-index:11;height:55px;';><b style='color:black';>Welcome ".$name."</b></div><br>";
if(isset($_POST['category'])&&isset($_POST['sub'])&&isset($_POST['property'])&&isset($_POST['location'])||isset($_POST['search']))
{
$category=$_POST['category'];
$sub=$_POST['sub'];
$property=$_POST['property'];
$location=$_POST['location'];
$search=$_POST['search'];
if(!empty($search))
{
$result=mysql_query("select *from advancedetails where area>'$search'");
 
 echo "<div class='component' style='margin-top:150px ;position:absolute;margin-left:270px';>
				<table class=''>
					<thead>
						<tr>
							<th>Owner</th><th>category</th><th>Sub-category</th><th>Property</th><th>location</th><th>Email</th><th>Contact</th><th>Area</th><th>Price</th><th>Date</th><th>Address</th><th>Sell/Buy</th>
						</tr>
					</thead>";
while($row = mysql_fetch_array($result))
  {
  if($row['sellbuy']=="on sell")
  echo "<tbody><tr><th>".$row['ownername']."</th><td>". $row['category']."</td><td>". $row['subcategory']."</td><td>". $row['property']."</td><td>". $row['location']."</td><td>". $row['email']."</td><td>". $row['contact']."</td><td>". $row['area']."</td><td>". $row['price']."</td><td>". $row['date']."</td><td>". $row['address']."</td><td >". $row['sellbuy']."</td>";
	echo "</tr></tbody>";
 }
 echo "</table></div>"; 
}
else
{
$result=mysql_query("select *from advancedetails where category='".$category."' AND subcategory='".$sub."' AND property='".$property."' AND location='".$location."'");
 
 echo "<div class='component' style='margin-top:150px ;position:absolute;margin-left:270px';>
				<table class=''>
					<thead>
						<tr>
							<th>Owner</th><th>category</th><th>Sub-category</th><th>Property</th><th>location</th><th>Email</th><th>Contact</th><th>Area</th><th>Price</th><th>Date</th><th>Address</th><th>Sell/Buy</th>
						</tr>
					</thead>";
while($row = mysql_fetch_array($result))
  {
  if($row['sellbuy']=="on sell")
  echo "<tbody><tr><th>".$row['ownername']."</th><td>". $row['category']."</td><td>". $row['subcategory']."</td><td>". $row['property']."</td><td>". $row['location']."</td><td>". $row['email']."</td><td>". $row['contact']."</td><td>". $row['area']."</td><td>". $row['price']."</td><td>". $row['date']."</td><td>". $row['address']."</td><td >". $row['sellbuy']."</td>";
	echo "</tr></tbody>";
 }
 echo "</table></div>"; 

}
}
}

?>

	<body>
		<div class="container">
			<!-- Top Navigation -->
			
			<header style="position:absolute;margin-top:0px;margin-left:440px;";>
				<div onmousemove='displayMessage(this)';><h1>Real Estate Marketing <em>Revisited</em> <span>We Tried to Find Out Best Deals For You</span></h1>	</div>
				<nav class="codrops-demos">
					<a href="../home.php" title="Basic Usage">Home</a>
					<a href="../seller.php" title="Biaxial Headers">Seller</a>
					<a class="../buyer.php" href="../buyer.php" title="Wide Tables">Buyer</a>
				</nav>
			</header>
			
				
				

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>