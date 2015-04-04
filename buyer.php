<!DOCTYPE html>

<html lang="en" class="no-js">
	<head>
	<style>
	#welcome
	{
	
	border-radius:10px;
	padding:15px;
	width:110px;
	height:30px;
	position:absolute;
	background-color:rgba(0,0,0,0.02);
	color:dark white;
	font-family:"calibry";
	margin-top:5px;
	margin-left:100px;
	}
	</style>
		<title>Buyer</title>
		
		<link rel="shortcut icon" href="../favicon.ico">
		
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
		<script src="js/modernizr.custom.25376.js"></script>
	</head>
	
	<body >
		<div id="perspective" class="perspective effect-rotateleft" style="background:url(22.jpg);background-repeat:no-repeat; background-size:cover" ;>
			<div class="container" style="background:url(24.jpg);background-repeat:no-repeat; background-size:cover" ;>
				<div class="wrapper"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
					<div class="codrops-top clearfix">
						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/ProgressButtonStyles/"><span>RealEstateMarketing.com</span></a>
						<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=17915"><span>A Happy Deal</span></a></span>
					</div>
					<header class="codrops-header">
						<h1 style="color:White";>Real Estate Marketing<span style="color:white";>An Online Property Market</span></h1>	
					</header>
					<div class="main clearfix">
						<div class="column">
							<p><button id="showMenu">Buyer</button></p>
							<p style="color:black";>Click on this button to see the what's new for the Buyer.</p>
							
						</div>
						
						<div class="column">
							<nav class="codrops-demos">
								<form method="POST" name="buyer" action="buyer/buyerdetails.php">
								<h1 style="color:black";>Advance Search:</h1>
								<strong style="color:black";>Category:</strong>&nbsp; <select name="category" width=50 style="margin-left:40px";>
									 <option value='0'>--Select Category--</option>
									<option value="Agriculture">Agriculture</option>
									<option value="Industrial">Industrial</option>
									<option value="Residential">Residential</option>
								</select><br><br>
								<strong style="color:black";>Sub-Category:</strong>&nbsp; <select name="sub" width=50 style="margin-left:11px";>
									 <option value='0'>--Select Sub-Category--</option>
									<option value="Farm">Farm</option>
									<option value="Factory">Factory</option>
									<option value="Building">Buildings</option>
									<option value="Industry">Indusrty</option>
								</select><br><br>
								<strong style="color:black";>Property Type:</strong>&nbsp; <select name="property" width=50 style="margin-left:9px";>
									 <option value='0'>--Select Property--</option>
									<option value="Rent">Rent</option>
									<option value="Purchase">Purchase</option>
									<option value="Buy">Buy</option>
									
								</select><br><br>
								<strong style="color:black";>Location:</strong>&nbsp; <select name="location" width=50 style="margin-left:45px";>
									 <option value='0'>--Select State--</option><option value="Andaman and Nicobar Islands">Andaman and Nicobar</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Odisha">Odisha</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttrakhand">Uttrakhand</option><option value="West Bengal">West Bengal</option><option value="Army Post Office">Army Post Office</option> </select></td></tr>
		
								</select><br><br>
								
								<center><strong style="color:black;margin-top:-20px,position:absolute";><h2>or</h2></strong><center>
								<h1 style="color:black;margin-top:-20px;position:absolute";>Advance Search:</h1><br>
								<h3 style="color:White;position:absolute;margin:-left:-200px;margin-top:0px";>Area(in sq.feets):</h3><input type="text" name="search" /><br>
								<input type="submit" value="  submit  " style="margin-left:-190px;margin-top:10px";/>
								</form>
							</nav>
						</div>
						<div class="related">
							<p style="color:White";>For More Details Contact Us:</p>
							<p ><a href="http://tympanus.net/Tutorials/AnimatedBorderMenus/"style="color:black";>ajaykedia1992@gmail.com</a></p>
							
						</div>
					</div><!-- /main -->
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav right vertical" >
				<a href="home.php" class="icon-home" >Home</a>
				<a href="products.php" class="icon-news" >Products</a>
				<a href="blogs/sitedesigner.php" class="icon-image" >Blogs & News</a>
				<a href="seller.php" class="icon-upload">Seller</a>
				<a href="blogs/sitedesigner.php" class="icon-star">Contact Us</a>
				<a href="password/changepassword.php" class="icon-mail">Change Password</a>
				<a href="logout.php" class="icon-lock">Logout</a>
			</nav>
		</div><!-- /perspective -->
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
	</body>

</html>