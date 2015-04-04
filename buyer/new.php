<?php
mysql_connect("localhost","root","");
mysql_select_db("realestate");


$result = mysql_query("select district from location");
while($row= mysql_fetch_array($result))
{
$name = $row['district'];
}


if(isset($_POST['neww']))
{
$newww = $_POST['neww'];
}
?>


<html>


<form action = "new.php" method="post">
NAMEW: <input type="radio" name="neww" value=" <?php echo $name ?>" >
<input type="submit" >
</form>
</html>