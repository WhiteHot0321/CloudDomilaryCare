<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zHospital</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body id="single">
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header>
	<div class="top-bar">
		<div class="wrap-top zerogrid">
			<div class="row">
				<div class="col-1-2">
					<div class="wrap-col">
						<ul>
							<li class="mail"><p>ContacUst@Gmail.com</p></li>
							<li class="phone"><p>80 88888 7</p></li>
						</ul>
					</div>
				</div>
				<div class="col-1-2">
					<div class="wrap-col f-right">
						<div class="top-social">
							<a href="#"><img src="images/Facebook.png" title="facebook"/></a>
							<a href="#"><img src="images/Twitter.png" title="twitter"/></a>
							<a href="#"><img src="images/Skype.png" title="google"/></a>
							<a href="#"><img src="images/Pinterest.png" title="pinterest"/></a>
							<a href="#"><img src="images/Youtoube.png" title="instagram"/></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap-header">
		<div class="zerogrid">
			<div class="row">
				<div class="col-1-3">
					<div class="wrap-col">
						<div class="logo"><a href="#"><img src="images/logo.png"/></a></div>	
					</div>
				</div>
				<div class="col-2-3">
					<div class="wrap-col f-right">
						<ul>
							<li>
								<form method="get" action="/search" id="search" >
								  <input name="q" type="text" size="40" placeholder="Search..." />
								</form>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap-banner">
		<div id="menu">
			<nav>
				<div class="wrap-nav">
				   <ul>
					<li><a href="index.html">Home</a></li>
					 <li><a href="account.html">Blog</a></li>
					 <li><a href="Home.html">About Us</a></li>
					 <li class="active"><a href="contact.html">Contact</a></li>
				   </ul>
			   </div>
			</nav>
		</div>
		<div class="zerogrid">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="top-title">
						<h1>MEDICAL PROFESSIONALS</h1>
						<p>Nulla eget mauris quis elit mollis ornare vitae ut odio. Cras tincidunt, augue vitae sollicitudin commodo,<br>
						quam elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia nisl.
						Nulla eget mauris quis elit mollis ornare vitae ut odio. Cras tincidunt, augue vitae sollicitudin commodo,<br>
						quam elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia nisl.</p>
						<a class="button button01" href="#">MORE</a>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					&nbsp
				</div>
			</div>
		</div>
	</div>
</header>


<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="zerogrid">
			<div id="main-content" class="col-2-3">
				<div class="wrap-content">
					<div class="contact">
						<h2>Contact</h2>
						<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="contact.php">
								<label>
								<span>Enter your name:</span>
								<input type="text"  name="name" id="name" required>
								</label>
								<label>
								<span>Enter your email:</span>
								<input type="email"  name="email" id="email" required>
								</label>
								<label>
								<span>Your message here:</span>
								<textarea name="message" id="message"></textarea>
								</label>
								<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="col-1-3">
				<div class="wrap-sidebar">
					<!---- Start Widget ---->
					<div class="widget wid-about">
						<div class="wid-header">
							<h5>About Us</h5>
						</div>
						<div class="wid-content">
							<img src="images/15.jpg"/>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-tag">
						<div class="wid-header">
							<h5>Tags</h5>
						</div>
						<div class="wid-content">
							<a href="#">animals ,</a>
							<a href="#">cooking ,</a>
							<a href="#">countries ,</a>
							<a href="#">home ,</a>
							<a href="#">likes ,</a>
							<a href="#">photo ,</a>
							<a href="#">travel ,</a>
							<a href="#">video </a>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-post">
						<div class="wid-header">
							<h5>Latest Posts</h5>
						</div>
						<div class="wid-content">
							<div class="post">
								<a href="#"><img src="images/15.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">A Blue Morning</a></h5><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/15.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">A Blue Morning</a></h5><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/15.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">A Blue Morning</a></h5><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-archive">
						<div class="wid-header">
							<h5>Archives</h5>
						</div>
						<div class="wid-content">
							<select>
							    <option value="audi" selected>Select Month</option>
								<option value="volvo">March 2015</option>
								<option value="saab">Febuary 2015</option>
								<option value="vw">VW</option>
							</select>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-gallery">
						<div class="wid-header">
							<h5>Gallery</h5>
						</div>
						<div class="wid-content">
							<a href="#"><img src="images/15.jpg"></a>
							<a href="#"><img src="images/15.jpg"></a>
							<a href="#"><img src="images/15.jpg"></a>
							<a href="#"><img src="images/15.jpg"></a>
							<a href="#"><img src="images/15.jpg"></a>
							<a href="#"><img src="images/15.jpg"></a>
						</div>
					</div>
					<div class="widget wid-meta">
						<div class="wid-header">
							<h5>Meta</h5>
						</div>
						<div class="wid-content">
							<div class="row">
								<ul>
									<li><a href="#">> Lorem ipsum dolor sit amet, consectetur elit.</a></li>
									<li><a href="#">> Nullam venenatis lacus a elit fermentum.</a></li>
									<li><a href="#">> Morbi ut sapien nec nisl pulvinar suscipit.</a></li>
									<li><a href="#">> Integer a enim ac ex porta molestie ut at ex.</a></li>
									<li><a href="#">> Sed in nunc non eleifend laoreet eu quis elit.</a></li>
									<li><a href="#">> Nullam venenatis lacus fermentum.</a></li>
									<li><a href="#">> Lorem ipsum dolor sit amet, consectetur elit.</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="widget wid-about">
							<div class="wid-header">
								<h5>Welcome</h5>
							</div>
							<div class="logo"><a href="#"><img src="images/logo.png"/></a></div>
							<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque quod maxime placeat 
								facere possimus nihil impedit quo minus id quod maxime placeat facere possimus. </p>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="widget wid-meta">
							<div class="wid-header">
								<h5>Links List</h5>
							</div>
							<div class="widget-content">
								<div class="row">
									<ul>
										<li><a href="#">> Lorem ipsum dolor sit </a></li>
										<li><a href="#">> Nullam venenatis lacus a </a></li>
										<li><a href="#">> Morbi ut sapien nec nisl</a></li>
										<li><a href="#">> Integer a enim ac ex.</a></li>
										<li><a href="#">> Sed in nunc non eleifend  </a></li>
										<li><a href="#">> Integer a enim ac ex.</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="widget wid-tag">
						<div class="wid-header">
							<h5>Tags</h5>
						</div>
						<div class="wid-content">
							<a href="#">animals ,</a>
							<a href="#">cooking ,</a>
							<a href="#">countries ,</a>
							<a href="#">home ,</a>
							<a href="#">likes ,</a>
							<a href="#">photo ,</a>
							<a href="#">travel ,</a>
							<a href="#">video </a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="widget wid-meta">
							<div class="wid-header">
								<h5>Links List</h5>
							</div>
							<div class="widget-content">
								<div class="row">
									<ul>
										<li><a href="#">> Lorem ipsum dolor sit </a></li>
										<li><a href="#">> Nullam venenatis lacus a </a></li>
										<li><a href="#">> Morbi ut sapien nec nisl</a></li>
										<li><a href="#">> Integer a enim ac ex.</a></li>
										<li><a href="#">> Sed in nunc non eleifend  </a></li>
										<li><a href="#">> Integer a enim ac ex.</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-footer">
		<div class="wrap-bottom ">
			<div class="copyright">
				<p>??2015 - Designed by <a href="https://www.zerotheme.com" title="free website Templates">ZEROTHEME</a></p>
			</div>
		</div>
	</div>
</footer>


</div>
</body></html>