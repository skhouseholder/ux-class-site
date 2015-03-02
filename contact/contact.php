<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];
$submitcontact=$_POST["submitcontact"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Missingidea - Creative Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
	<link rel="stylesheet" type="text/css" media="all" href="style/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="style/prettyPhoto.css" />
	<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700italic,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="style/stylemobile.css" />
	<link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" />
	<script src="script/modernizr.js" type="text/javascript"></script>
	<script src="script/jquery.js" type="text/javascript"></script>
</head>
<body>
    <div id="header-full">
		<div id="header">
            <a href="#nav" class="open-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
			<a href="#" id="logo"><img src="images/logo.png" data-retina="images/logo-retina.png" alt="Missingidea" /></a>
			<ul id="nav-social">
                <li id="icon-facebook"><a href="#">Facebook</a></li>
                <li id="icon-twitter"><a href="#">Twitter</a></li>
                <li id="icon-dribbble"><a href="#">Dribbble</a></li>
            </ul>
            <nav id="nav" class="clearfix">
                <a href="#" class="close-menu-big">Close</a>
                <div id="nav-container">
                    <a href="#" class="close-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <ul id="nav-main">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="newslist.html">Blog</a>
                            <ul>
                                <li><a href="newslist.html">Blog List</a></li>
                                <li><a href="newsdetail.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="#">Other</a>
                            <ul>
                                <li><a href="#">Color Variation</a>
                                    <ul>
                                        <li><a href="../blue/index.html">Blue</a></li>
                                        <li><a href="../green/index.html">Green</a></li>
                                        <li><a href="../orange/index.html">Orange</a></li>
                                    </ul>
                                </li>
                                <li><a href="index.html">Homepage Video</a></li>
                                <li><a href="index-slide.html">Homepage Slideshow</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="career.html">Career</a></li>
                                <li><a href="typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="current-menu-item"><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
			</nav>
		</div>
	</div>
	<div id="hero-container" class="color-2">
        <img src="http://placehold.it/700x430" data-retina="http://placehold.it/1400x860" alt="missingidea" />
	</div>
    <header id="main-header" class="clearfix">
		<div id="intro-header-inner">
			<h1 id="main-title">Contact Missingidea</h1>
		</div>
	</header>
    <div id="big-map" class="clearfix">
        <!-- <div id="overlay-map" onClick="style.pointerEvents='none'" onmouseleave="style.pointerEvents='auto'"></div> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1390.5812863475437!2d-94.58329788845377!3d39.093958169954384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2811fc0091489d61!2sNara+NeoJapanese!5e1!3m2!1sen!2sus!4v1405472594873"></iframe>
        <aside id="contact-container">
            <div id="contact-wrapper">
                <article class="static-page">
                    <p>Nulla facilisi. Morbi euismod quam non magna consequat pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus pulvinar id elit nec feugiat. Integer sit amet hendrerit lorem. Ut vestibulum elit at massa porta mattis.</p>
                    <?php
                    if ($submitcontact) {
				        $error=0;
				        if ($name=="") {
				            echo "<div class=\"errordiv\">Please type your name.</div>";
				            $error=1;
				        }
				        if ($email=="") {
				            echo "<div class=\"errordiv\">Please type your email address.</div>";
				            $error=1;
				        } else if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email)) {
				            echo "<div class=\"errordiv\">Please type valid email address.</div>";
				            $error=1;
				        }
				        if ($message=="") {
				            echo "<div class=\"errordiv\">Type your message.</div>";
				            $error=1;
                        } 
				        if ($error==0) {
				            $myemail="hello@cubicthemes.com"; // Change it with your email address
				            $to=$myemail;
				            $subject="[Contact Us] $name";
				            $header="from: $name <$email>\n";
				            $header.="MIME-Version: 1.0";
				            $message2="$name $phone \r\n\r\n";
				            $message2.="$message \r\n\r\n";
				            $sentmail = mail($to,$subject,$message2,$header);
				            if ($sentmail) {
				                echo "<div class=\"correctdiv\">Thank you for your message, we will reply your message as soon as possible</div>";
				                $name="";
				                $email="";
				                $phone="";
				                $message2="";
				            }
				        }
				    }
				    ?>
                    <h3>Contact Us</h3>
                    <form method="post" action="#" id="form-contact" class="clearfix">
                        <div>
                            <label for="text-name">Name <span>*</span></label>
                            <input type="text" name="name" class="input" id="text-name" value="<?php echo $name ?>" /><br />
                            <label for="text-email">Email</label>
                            <input type="text" name="email" class="input" id="text-email" value="<?php echo $email ?>" /><br />
                            <label for="text-phone">Phone</label>
                            <input type="text" name="phone" class="input" id="text-phone" value="<?php echo $phone ?>" /><br />
                            <label for="text-message">Message <span>*</span></label>
                            <textarea cols="10" rows="20" class="input textarea" id="text-message" name="message"><?php echo $comment ?></textarea><br />
                            <input type="submit" name="submitcontact" class="button" value="Sent Message" />
                        </div>
                    </form>
                </article>
            </div>
        </aside>
    </div>
    <div class="full-homepage">
        <div class="content-mini-bottom">
            <header class="title-home-content">
                <img src="images/icon-home-3.png" alt="Our Team" />
                <h3>Our Team</h3>
                <p>Here’s the people behind our creative team. Click it to get more detail</p>
            </header>
            <div id="slideshow-team" class="flexslider">
                <ul class="slides">
                    <li class="clearfix">
                        <aside class="team-slide">
                            <a href="#"><img src="http://placehold.it/240x240" data-retina="http://placehold.it/480x480" alt="Jane Applegate" /></a>
                            <h3>Jane Applegate</h3>
                            <h4>Art Director</h4>
                        </aside>
                        <aside class="team-slide">
                            <a href="#"><img src="http://placehold.it/240x240" data-retina="http://placehold.it/480x480" alt="Christina Tilaar" /></a>
                            <h3>Christina Tilaar</h3>
                            <h4>Lead Developer</h4>
                        </aside>
                        <aside class="team-slide">
                            <a href="#"><img src="http://placehold.it/240x240" data-retina="http://placehold.it/480x480" alt="John Doe" /></a>
                            <h3>John Doe</h3>
                            <h4>Co Founder</h4>
                        </aside>
                        <aside class="team-slide last">
                            <a href="#"><img src="http://placehold.it/240x240" data-retina="http://placehold.it/480x480" alt="Roberto Carlos" /></a>
                            <h3>Roberto Carlos</h3>
                            <h4>Football Player</h4>
                        </aside>
                    </li>
                    <li class="clearfix">
                        <aside class="team-slide">
                            <a href="#"><img src="http://placehold.it/240x240" data-retina="http://placehold.it/480x480" alt="Jane Applegate" /></a>
                            <h3>Jane Applegate</h3>
                            <h4>Art Director</h4>
                        </aside>
                        <aside class="team-slide">
                            <a href="#"><img src="http://placehold.it/240x240" data-retina="http://placehold.it/480x480" alt="Christina Tilaar" /></a>
                            <h3>Christina Tilaar</h3>
                            <h4>Lead Developer</h4>
                        </aside>
                        <aside class="team-slide">
                            <a href="#"><img src="http://placehold.it/240x240" data-retina="http://placehold.it/480x480" alt="John Doe" /></a>
                            <h3>John Doe</h3>
                            <h4>Co Founder</h4>
                        </aside>
                        <aside class="team-slide last">
                            <a href="#"><img src="http://placehold.it/240x240" data-retina="http://placehold.it/480x480" alt="Roberto Carlos" /></a>
                            <h3>Roberto Carlos</h3>
                            <h4>Football Player</h4>
                        </aside>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="bottom-page">
        <div id="contact-bottom">
            <h4><span>Got any Question?</span> Don’t be shame, just contact us &amp; we’ll get you back</h4>
            <div id="contact-bottom-button">
                <a href="#">Contact Us Now</a>
            </div>
        </div>
    </div>
    <footer id="main-footer">
        <div id="main-footer-container" class="clearfix">
            <div id="footer-description">
                <a href="#"><img src="images/logo-dark.png" data-retina="images/logo-dark-retina.png" alt="Missingidea" id="logo-footer" /></a>
                <p>Maecenas leo purus, porta sit amet mauris ut, bibendum adipiscing odio. Lorem ipsum dolor sit amet pallentesque adispicing vivamur pulvinar.</p>
                <ul id="list-contact">
                    <li class="icon-phone">+62 83848585</li>
                    <li class="icon-mail">hello@cubicthemes.com</li>
                </ul>
            </div>
            <div id="sidebar-footer-left" class="sidebar-footer">
                <aside class="widget-container">
                    <div class="widget-wrapper clearfix">
                        <h3 class="widget-title">Sitemap</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">What can we do?</a></li>
                            <li><a href="#">Portfolio &amp; Upcoming Work</a></li>
                            <li><a href="#">How it works</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div id="sidebar-footer-middle" class="sidebar-footer">
                <aside class="widget-container">
                    <div class="widget-wrapper clearfix">
                        <h3 class="widget-title">Our Products</h3>
                        <ul>
                            <li><a href="#">Social Media</a></li>
                            <li><a href="#">WordPress Theme</a></li>
                            <li><a href="#">E-commerce</a></li>
                            <li><a href="#">Javascript Frameworks</a></li>
                            <li><a href="#">Slideshow</a></li>
                            <li><a href="#">WordPress Plugin</a></li>
                            <li><a href="#">Frameworks</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div id="sidebar-footer-right" class="sidebar-footer">
                <aside class="widget-container">
                    <div class="widget-wrapper clearfix">
                        <h3 class="widget-title">From Our Blog</h3>
                        <ul class="menu news-sidebar">          
                            <li class="clearfix">
                                <img src="http://placehold.it/85x85" data-retina="http://placehold.it/170x170" alt="We are launching new client" class="imgframe alignleft" />
                                <h4><a href="#">We just finish creating a website for Adidas</a></h4>
                                <span class="date-news">July 5, 2014</span>
                                <h5><a href="#">No Comments</a></h5>
                            </li>
                            <li class="clearfix">
                                <img src="http://placehold.it/85x85" data-retina="http://placehold.it/170x170" alt="A new Office is opening by our President" class="imgframe alignleft" />
                                <h4><a href="#">A new Office is opening by our President</a></h4>
                                <span class="date-news">July 2, 2014</span>
                                <h5><a href="#">Comments (5)</a></h5>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div id="footer-copyright" class="clearfix">
                <h5>&copy; 2014 Cubicthemes - P Sherman, 42 Wallaby Way, Australia</h5>
                <ul id="nav-footer">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <a href="#" id="back-top"><span>Top</span></a>
    </footer>
    <script src="script/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="script/jquery-ui.js" type="text/javascript"></script>
    <script src="script/jquery.flexslider.js" type="text/javascript"></script>
    <script src="script/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="script/jquery.retina.js" type="text/javascript"></script>
    <script src="script/scripts.js" type="text/javascript"></script>
</body>
</html>