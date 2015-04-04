<?php
include "conn.php";
include "core.php";
if(loggedin())
{
@$name=getuserfield('username');
echo "<div id='welcome'>Welcome ".$name."</div>";
}





?>
<html>
<head>
  
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <link href="index1.css" rel="stylesheet" type="text/css" />
	<link href="common1.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />
	
<title>Home</title>
<script>

function call1()
{
var a=document.getElementById("s").value;

if(a=="1")
{
window.location ="seller.php";
}

}
function call2()
{
var p=document.getElementById("b").value;
if(p=="2") 
{window.location= "buyer.php";
}}
</script>
</head>
<body style="height:100";>

			<div id="top">
		<div id="navigation">
		<script>
		function call()
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
             <li><a href="blogs/sitedesigner.php">Contact Us</a></li>
			 <li><a href="password/changepassword.php">change password</a></li>
             <li><a href="logout.php">Logout</a></li>
             
			
			 </ul>
         </div>
		 
			<div class="clear"></div>
		</div>
		<div class="tab" id="toptab"><a href="javascript:void(0)" title="Toggle info" class="showhint">&nbsp;</a></div>
	</div>
	



        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
        
<div id="box9">
<br><br>
<center>
<h1 style="color:white";>Who you Are:</h1><br>
<form  onclick="call1();">
<input type="radio" name="product1" id="s" value="1"><h2 style="color:white";>Seller</h2><br></form>
<form  onclick="call2();">
<input type="radio" name="product1"  id="b" value="2"><h2 style="color:white";>Buyer</h2></form>

</center>
</div>

</body>

</html>



</form>