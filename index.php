<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage - doNation</title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    </head>
    <body>
<!-------Headsection------>        
        <section class="header">
            <nav>
                <a href="index.html"><img src="homepic/Hlogo1.png" ></a>
                <div class="nav-links" Id="navLinks"> 
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about/about.html">About</a></li>
                        <li><a href="contact/contact.html">Contact</a></li>
                    </ul>
                </div>
                <i class="fa  fa-bars"  onclick="showMenu()"></i>
            </nav>
                <div class="text-box">
                    <h1>MR.HR</h1>
                    <h3>SOLUTIONS</h3>
                    <p>THE WAY TO SUCCESS WITH HR</p>
                    <a href="" class="hero-btn">Visit Us to know more</a>
                    
                </div>
        </section>

<!--------------Disaster Recovery------------>
        <section class="disaster">  
            <h1>Explore Our Package</h1>
            <p></p>

            <div class="row">
                <div class="disaster-col">
                    <img src="homepic/H001.jpg" >
                    <div class="layer">
                    <a href> <h3>Package-01</h3></a>
                    </div>
                </div>
                <div class="disaster-col">
                    <img src="homepic/H002.jpg" >
                    <div class="layer">
                        <a href=><h3>Package-02</h3></a>
                    </div>
                </div>
                <div class="disaster-col">
                    <img src="homepic/H003.jpg" >
                    <div class="layer">
                        <a href=></a><h3>Package-03</h3></a>
                    </div>
                </div>

            </div>
        </section>

        <!----------How It WORKS------------->
  
        <section class="how">
            <h1>Compare Packages</h1>
            

            <div class="row">
                <div class="how-col">
                    <h3>Basic</h3>
                    <p>$5</p>
            </div>

                <div class="how-col">
                    <h3>Standard</h3>
                    <p>$10</p>
                </div>
                <div class="how-col">
                    <h3>Premium</h3>
                    <p>$20</p>
                </div>	
        </section>


        <section class="news">
            <h1>News Feed</h1>
        
            <div class="row">
                <div class="news-col">
                    <img src="Hpics/H04.jpg" >
                    <h3>Coronavirus Relief</h3>
                    <p>Support coronavirus relief efforts led by doNation vetted nonprofit partners.</p>
                </div>
                <div class="news-col">
                    <img src="Hpics/H05.jpg" >
                    <h3>We're Hiring</h3>
                    <p>Join our amazing team and help people around the world.</p>
                </div>
                <div class="news-col">
                    <img src="Hpics/H06.jpg" >
                    <h3>Wear Right Mask</h3>
                    <p>The doNation site is running a campaign these days about putting on the right mask.</p>
                </div>
            </div>
            <br>
            <div class="news-col">
                    <h3>Send Your choice</h3>
                    <p>Select your package,compare package and mail us</p>
                    <a href="mailto:mrhrsolutions@gmail.com"><i id="i" class="fas fa-envelope">&nbsp;&nbsp;&nbsp;&nbsp;mrhrsolutions@gmail.com</i></a>
                </div>
            
        
        </section>
        <!-----------Footer------------>
<footer>
	<div class="row">
		<div class="col">
			<img src="homepic/Hlogo.png" class="logo">
			<h2>About Us</h2>
			<p></p>
			<h2>Contact us</h2>
			<p class="email-id">donations.g03@gmail.com</p>
		</div>
		<div class="col">
			<h3>Our Details</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about/about.html">About Us</a></li>
				<li><a href="contact/contact.html">Contact Us</a></li>
			</ul>
			
		
		</div>
		<div class="col">
			<h3>Our Partners</h3>
			<ul>
				<li><a href="#">J.M.B.Ideas</a></li>
			</ul>
			
		
		</div>
		<div class="col">
			<h3>Join to Donate</h3>
			<form >
				<i class="far fa-envelope"></i>
				<input type="email" placeholder="Enter your Email" required>
				<button type="submit"><i class="fas fa-arrow-right"></i></button>
			</form>
			<div class="social-icons">
				<a href="https://www.facebook.com/mrhrsolutions.lk/?ref=pages_you_manage"><i class="fab fa-facebook-f"></i></a>
				<a href="https://twitter.com/Donatio66123075"><i class="fab fa-twitter"></i></a>
				<a href="https://www.instagram.com/donationgrp03/?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
				<a href="https://www.linkedin.com/feed/?trk=onboarding-landing"><i class="fab fa-linkedin"></i></a>
			</div>
		</div>
	
	</div>
	<hr>
	<p class="copyright">Copyright © 2022 <a href="#">J.M.B.Ideas</a>. All rights reserved</p>
</footer>
<!------------JavaScript for Toggle Menu------------->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu() {
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right="-200px";
    }
</script>


        
    </body>
    
</html>
