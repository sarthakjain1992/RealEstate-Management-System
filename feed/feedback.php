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
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Feedback</title>
		<meta name="description" content="Blueprint: Blueprint: Google Grid Gallery" />
		<meta name="keywords" content="google getting started gallery, image gallery, image grid, template, masonry" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<span>Real Estate Marketing <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1>Online Dealers</h1>
				<nav>
					<a href="../home.php" class="bp-icon bp-icon-prev" data-info="Home"><span>hHome</span></a>
					<!--a href="" class="bp-icon bp-icon-next" data-info="next Blueprint"><span>Next Blueprint</span></a-->
					<a href="../logout.php" class="bp-icon bp-icon-drop" data-info="Logout"><span>bLogout</span></a>
					<a href="../products.php" class="bp-icon bp-icon-archive" data-info="seller and Buyer"><span>Product</span></a>
				</nav>
			</header>
			<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<form method='POST' id='contact' name="query" action="feedback.php">
						<li>
							<figure>
								<img src="img/thumb/1.png" alt="img01"/>
								<figcaption><h3>Name:</h3><p><input type='text' name='name' placeholder='Name' size=27/></p></figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/thumb/2.png" alt="img02"/>
								<figcaption><h3>Email</h3><p><input type='text' name='email' placeholder='E-mail'size=27/> </p></figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/thumb/3.png" alt="img03"/>
								<figcaption><h3>Feedback</h3><p><textarea name='query' cols='20' rows='10' ></textarea></p></figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/thumb/4.png" alt="img04"/>
								<figcaption><h3>Submit</h3><p><input type='submit' name='submit'></p></figcaption>
							</figure>
						</li>
						
						
						
						
						</form>
						
					</ul>
				</section><!-- // grid-wrap -->
				<section class="slideshow">
					<ul>
						<li>
							<figure>
								<figcaption>
									<h3>Letterpress asymmetrical</h3>
									<p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
								</figcaption>
								<img src="img/large/1.png" alt="img01"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>Vice velit chia</h3>
									<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
								</figcaption>
								<img src="img/large/2.png" alt="img02"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>Brunch semiotics</h3>
									<p>IPhone PBR polaroid before they sold out meh you probably haven't heard of them leggings tattooed tote bag, butcher paleo next level single-origin coffee photo booth.</p>
								</figcaption>
								<img src="img/large/3.png" alt="img03"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>Chillwave nihil occupy</h3>
									<p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
								</figcaption>
								<img src="img/large/4.png" alt="img04"/>
							</figure>
						</li>
						
						
						
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navigate with arrow keys</div>
				</section><!-- // slideshow -->
			</div><!-- // grid-gallery -->
		</div>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/cbpGridGallery.js"></script>
		<script>
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		</script>
	</body>
</html>
