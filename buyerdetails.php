<?php
include "conn.php";
include "core.php";
if(loggedin())
{
@$name=getuserfield('username');
echo "<div id='welcome' style='margin-top:100px;z-index:11;height:55px';>Welcome <font style='font-family: Ruthie, cursive';>".$name."</font></div>";
if(isset($_POST['category'])&&isset($_POST['sub'])&&isset($_POST['property'])&&isset($_POST['location']))
{
$category=$_POST['category'];
$sub=$_POST['sub'];
$property=$_POST['property'];
$location=$_POST['location'];
if(!empty($category)&&!empty($sub)&&!empty($property)&&!empty($location))
{
$result=mysql_query("select *from advancedetails where category='".$category."' AND subcategory='".$sub."' AND property='".$property."' AND location='".$location."'");
 echo "<center><table border='1'><tr><th>Owner Name</th><th>Category</th><th>Sub-Category</th><th>Property</th><th>Location</th><th>Email</th><th>Contact</th><th>Area</th><th>Price</th><th>Date</th><th>Address</th></tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr><td>".$row['ownername']."</td><td>". $row['category']."</td><td>". $row['subcategory']."</td><td>". $row['property']."</td><td>". $row['location']."</td><td>". $row['email']."</td><td>". $row['contact']."</td><td>". $row['area']."</td><td>". $row['price']."</td><td>". $row['date']."</td><td>". $row['address']."</td>";
	echo "</tr>";
 }
 echo "</table></center>"; 
}
}
}

?>
<html><head>
<style>
body
{


padding:0;
	margin:0;
	background:url(red_texture.jpg);
      
       
}
</style>
</head>
<body>

</body>
</html>