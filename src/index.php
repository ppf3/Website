<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Patrick Francisco">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Patrick Francisco</title>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CORE BOOTSTRAP CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
    </head>
    <body>
	
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		
        <!-- CONTAINER -->
		<div class="container">
			<div class="row">
			
				<!-- SIDEBAR, 4 columns wide -->
				<?php include("php/nav_index.php");?>

				<!-- CONTENT, 8 columns wide  -->
				<div id="content-wrap" class="col-md-8">
					<div class="content">
					<!-- the meat of the content goes here -->
	
	
						<!--===== WORKS =====-->
						<section id="works">
						<br>
							<h1> WORKS </h1>					
							<div class="workbar""> <!-- 2.2015 -->
								<a href="games/escape.php">
								<img src="img/750/escape-750.jpg"/>
									<h4 class="workbar-caption">Escape - 2.2015</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 12.2014 -->
								<a href="graphics/dating.php">
									<img src="img/750/datingapp-750.jpg"/>
									<h4 class="workbar-caption">Dating App UX - 12.2014</h4>  
								</a>
							</div>
							
							<div class="workbar"> <!-- 10.2014 -->
								<a href="graphics/rosetta.php">
									<img src="img/750/rosetta-750.jpg"/>
									<h4 class="workbar-caption">Rosetta Image Scale - 10.2014</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 6.2014 -->
								<a href="photos/truck.php">
									<img src="img/750/truck-750.jpg"/>
									<h4 class="workbar-caption">Truck Composition - 6.2014</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 4.2014 -->
								<a href="graphics/drawing.php">
									<img src="img/750/bluegirl-750.jpg"/>
									<h4 class="workbar-caption">Digital Drawing - 4.2014</h4> 
								</a>
							</div>
	
							<div class="workbar"> <!-- 3.2014 -->
								<a href="graphics/xboxflyer.php">
									<img src="img/750/xboxmusic-750.jpg"/>
									<h4 class="workbar-caption"><span class="fa fa-trophy"></span> Xbox Music Promo - 3.2014</h4> 
								</a>
							</div>	
							
							<div class="workbar"> <!-- 8.2013 -->
								<a href="videos/spongebob.php">
									<img src="img/750/spongebob-750.jpg"/>
									<h4 class="workbar-caption">Spongebob Sings Katy Perry's Roar - 8.2013</h4> 
								</a>
							</div>
							
							<div class="workbar"> <!-- 3.2013 -->
								<a href="videos/phonepromo.php">
									<img src="img/750/windowsphone-750.jpg"/>
										<h4 class="workbar-caption"><span class="fa fa-trophy"></span> Windows Phone Promo - 3.2013</h4> 
								</a>
							</div>	
							
							<div class="workbar"> <!-- 7.2012 -->
								<a href="videos/1fort.php">
								<img src="img/750/1fort-750.jpg"/>
								<h4 class="workbar-caption">1fort - 7.2012</h4> 
								</a>
							</div>	
							
						</section>					
						<hr>
						
						<!--===== ABOUT =====-->
						<section id="about">
							<h1> ABOUT </h1>
							<p>
							My name is Patrick Francisco, and I love to create digital things! I graduated from New Jersey Institute of Technology in December 2014 with a degree in Information Technology. Adobe Photoshop and Adobe Premiere are my primary tools of the trade, but I am always expanding my toolbox. I am currently teaching myself about virtual reality development, and I look forward to becoming more involved in the VR industry! 
							</p>
						</section>
						<hr>
						
						<!--===== CONTACT =====-->
						<section id="contact">
							<h1> CONTACT </h1>
							<a href="https://www.linkedin.com/in/patfran" target="_blank">LINKEDIN <span class="fa fa-external-link"></span></a>
							<a href="https://github.com/ppf3" target="_blank">GITHUB <span class="fa fa-external-link"></span></a>
							<a href="mailto:ppf3@njit.edu">EMAIL <span class="fa fa-paper-plane-o"></span></a>
						</section>
						
						
					</div><!-- /content -->
					
					
					<hr>
					<?php include("php/footer.php");?>
					
				</div>
				<!-- /content-wrap -->
			</div>
		</div> 
		<!-- /END CONTAINER -->
		
		<?php include("php/bottom_scripts.php");?>
	
    </body>
</html>
