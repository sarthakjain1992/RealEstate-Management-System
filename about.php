<?php
include 'conn.php';
if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['query']))
{
@$a=$_POST['name'];
@$b=$_POST['email'];
@$c=$_POST['query'];
if(isset($a)&&isset($b)&&isset($c))
{
$sql=mysql_query("insert into query values('$a','$b','$c')");
if($sql)
{
echo "<div id='feedback'>Thank You For Your Feedback..!!</div>";
}
}
}
?>
<html>
<head>
<link href="common1.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />
    <link href="text.css" rel="stylesheet" type="text/css" />
	<link href="layout.css" rel="stylesheet" type="text/css" />
	<link href="menu.css" rel="stylesheet" type="text/css" />
	<link href="rating.css" rel="stylesheet" type="text/css" />
<link href="rating.js" rel="stylesheet" type="text/javascript">
<title>gameZone</title>
<style>
#feedback
{
color:red;
position:absolute;
margin-top:680px;
margin-left:370px;
}
	#up
{
z-index:1;
position:absolute;
margin-top:-1730px;
margin-left:1200px;
}
</style>
</head>
<body>

 		<div id="top">
		<div id="navigation">
		<script>
		function call1()
		{
		printf("facebook");
		return false;
		}
		</script>
		 <div style="margin-left:400px";><a href="https://www.facebook.com/11bit0146"><img src="fb.png" onmouseover="return call1()"></a>&nbsp;&nbsp <img src="gplus.png" >&nbsp;&nbsp <img src="twit.png">&nbsp;&nbsp <img src="you.png">&nbsp;&nbsp <img src="link.png">&nbsp;&nbsp <img src="flickr.png">&nbsp;&nbsp <img src="pinterest.png"></div>
      
				<div class="albuminfo" style="margin-top:-20px";><u style="color:grey";>Ajay Kedia</u> :&nbsp; <b>9092489091</b></a><br><u style="color:grey";>Ankit Adarsh</u> :&nbsp;<b>9092489091<b></div> 
			<h1 style="margin-top:-28px";><b><u><a href="mainpage.php">Real Estate Marketing</a></u></b></h1><br>
			<div class="topmenu">
             <ul>
             <li><a href="home.php">Home</a></li>
             <li><a href="products.php">products</a></li>
             <li><a href="blogs/index.php" >Blogs & News</a></li>
             <li><a href="about.php">Contact Us</a></li>
			 <li><a href="password/changepassword.php">change password</a></li>
             <li><a href="logout.php">Logout</a></li>
             
			
			 </ul>
         </div>
		 
			<div class="clear"></div>
		</div>
		<div class="tab" id="toptab"><a href="javascript:void(0)" title="Toggle info" class="showhint">&nbsp;</a></div>
	</div>
	
<div id="box1"><br><br>
<font color=olivegreen" style="font-family:century;"><h1> About Site:</h1></font>
<h2><font color=white style="margin-left:130px; font-family:century;">This site contains Reviews about latest games, latest Trailer, live Streaming of the games,upcoming Games, cheat codes and walkthroughs. You can buy the games from here.</font>
</h2><br><br><font color=olivegreen" style="font-family:century;"><h1> Contact Us:</h1></font>
<div id="box4">
<div style='float:left; width:48%;line-height:20px; font-family:century;'>
	
	<b>Ajay Kedia</b><br>
	11BIT0146 <br >
	Btech IT<br />
	ph:+91 9092489091<br />
	
</div>
	<div style='float:left; width:48%; line-height:20px;'>
	<b>Ankit Adarsh</b><br>
	11BIT0129<br >
	Btech IT<br />
	ph:+91 9597370549<br /></div>
</div>
<div id="photo1"><img src="photo2.jpg" width=100 height=150 style="opacity:0.4; margin-left:300;"></div>
<div id="photo1"><img src="photo1.jpg" width=100 height=150 style="opacity:0.5; margin-left:750; margin-top:-140;"></div>
<div id="move">
	<script src="rating.js"></script>
<form method='POST' id='contact' name="query" action="about.php"><table id='suggestionForm'>
		<tr><td><h3>Name</h3></td> <td><input type='text' name='name' placeholder='Name' size=27/></td></tr>
		<tr><td><h3>Email</h3></td> <td><input type='text' name='email' placeholder='E-mail'size=27/></td></tr>
		<tr><td><h3>Query</h3></td> <td><textarea name='query' cols='40' rows='10' ></textarea></td></tr>
		
		<tr><td><input type='submit' name='submit' value="   Submit  "style="visibility:on;color:darkblack;height:40px;width:100px;position:absolute;border-radius:25px; margin-left:-13px; margin-top:10px;size:40;"onclick="return ratingForm()"/></td></tr>
	</table></form>
	</div>	
</div>

<div id="box2"><h2><p align=right style="margin-right:30px; margin-top:30px;">Designed By<br> Ajay Kedia<br>Ankit Adarsh<br></p></h2>
</div>
<form id="up" action="logout.php">
<input style="color:white; background-color:black;border-radius:20px;size:50px; font-size:20px;"type="submit" value="   logout   ">
</form>
</body>

</html>