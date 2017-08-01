<?php
//CONNECT TO DATABASE

//GET DATABASE INFO

$server = "localhost";
$s_user = "root";
$s_pass = "";
$db = "nisho";


//connect to database
$con = mysql_connect($server,$s_user,$s_pass) or die(mysql_error());

mysql_select_db($db) or die(mysql_error());


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Omonzejele Precious">
  <title>Nisho Ventures</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="icon fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>N</span>isho Ventures</h1>
            <p class="animated fadeInRightBig">We offer various services</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Find Out</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Like our <span class="facebook"><i class="icon fa-facebook-official"></i></span> page</h1>
            <p class="animated fadeInRightBig">Don't get left out when you use facebook, we try to spread our stories As Spreadable As Possible #ASAP</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="https://facebook.com/" target="_blank">Like Us <i class="icon fa-thumbs-up"></i></a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are also on <span class="twitter"><i class="icon fa-twitter"></i></span></h1>
            <p class="animated fadeInRightBig">Follow our stories bumpa to bumpa <i class="icon fa-smile-o"></i></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="https://twitter.com/" target="_blank">Start Following <i class="icon fa-twitter"></i></a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="icon fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="icon fa-angle-right"></i></a>

      <a id="tohash" href="#about-us"><i class="icon fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">
            <h1 class="logo"><span class="left-l"> <span class="put-magic"></span></span> <span class="right-l"></span> <span class="put-round"></span></h1>
          </a>                    
        </div>
        <div class="menu-list collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
			<li class="scroll"><a href="#services">Services</a></li> 
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  
  <section id="about-us" class="parallax">
    <div class="container">
	<br><br><br>
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>About us</h2>
            <p>Starting up as a little company, we've been trying to step up our game. Realising the online platform was the major thing needed.</p>
            <p>We pride ourselves on providing a high level of professional expertise with a strong emphasis on technical and managerial skills. Our services cover the complete spectrum of project management and technical due diligence. We offer a ‘one stop shop’ list of services, tailored for each client’s specific requirements.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Building &amp; Acquisition Surveys</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Office Design &amp; Project Management</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="75">75%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Retail Design &amp; Project Management</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="60">60%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
              <p class="lead">Ingoing Surveys / Schedules</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="85">85%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  
  
  <section id="team" class="parallax">
    <div class="container">
      <div class="row">
        <div class="heading col-sm-8 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2><span class="coloured">O</span>ur Team <i class="icon fa-users coloured"></i></h2>
          <p></p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
          
  <?php
  //LIST OUT THE MEMBERS
  $query = mysql_query("SELECT * FROM team") or die(mysql_error);
  
  if(mysql_num_rows($query) > 0){
	  $t_m = array();
	  
	  while($row = mysql_fetch_array($query)){
		  $t_m[] = $row;
		  $t;
	  }
	  $wow_delay = 300;
	  for($t = 0; $t < count($t_m); $t++){
		  //KEEP INCREASING THE DELAY
		  $wow_delay =$wow_delay + 300;
		  
		  if($t == 4){
			  //RESET TIMER
			  $wow_delay = 300;
		  }
		  
  echo "
  <div class=\"col-sm-3\">
            <div class=\"team-member wow flipInY\" data-wow-duration=\"1000ms\" data-wow-delay=\"".$wow_delay."ms\">
              <div class=\"member-image\">
                <img class=\"img-responsive\" src=\"images/team/".stripslashes($t_m[$t]["img"])."\" alt=\"".stripslashes($t_m[$t][2])." ".stripslashes($t_m[$t][1])."\">
              </div>
              <div class=\"member-info\">
                <h3>".stripslashes($t_m[$t][2])." ".stripslashes($t_m[$t][1])."</h3>
                <h4>".stripslashes($t_m[$t][4])."</h4>";
				$sd = trim($t_m[$t][5]);
				if(empty($sd)){
					$details = "";
				}
				else{
					$details = "<p>".stripslashes($t_m[$t][5])."</p>";
				}
				echo "$details";
				
                echo"
              </div>
			  ";
			  
			  //CHECK IF THE MEMBER IS SOCIAL
			  if (empty($t_m[$t][6]) && empty($t_m[$t][7]) && empty($t_m[$t][8])){//he or she is not on any
				  $social_display = "";
				
			  }
			  
			  else{  
				  //HE/SHE IS ON SOME , IF NOT THE 3 SOCIAL MEDIAS
				
				//check if he/she is on the types of social media
				
				if(!empty($t_m[$t][6])){
					$fb_disp = " <li><a class=\"facebook\" href=\"https://www.facebook.com/".$t_m[$t][6]."\"><i class=\"icon fa-facebook\"></i></a></li>
                 ";
				}
				else{
					$fb_disp = "";
				}
				if(!empty($t_m[$t][7])){
					$t_disp = "   <li><a class=\"twitter\" href=\"https://www.twitter.com/".$t_m[$t][7]."\"><i class=\"icon fa-twitter\"></i></a></li>
                 ";
				}
				else{
					$t_disp = "";
				}
				
				if(!empty($t_m[$t][8])){
					$ln_disp = "  <li><a class=\"linkedin\" href=\"https://www.linkedin.com/".$t_m[$t][8]."\"><i class=\"icon fa-linkedin\"></i></a></li>              
                 ";
				}
				else{
					$ln_disp = "";
				}
				
				$social_display = "
              <div class=\"social-icons\">
                <ul>
				".$fb_disp.$t_disp.$ln_disp."
                </ul>
              </div>
           
         ";
			  }
			  
			  //ECHO THE REST
			  echo $social_display."
            </div>
          </div>
         ";
  
	  }
	  
  }
  
  ?>
  
        </div>
      </div>            
    </div>
  </section><!--/#team-->

   <?php 
   $query = mysql_query("SELECT * FROM portfolio") or dir(mysql_error());
   
 ?>
  
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading col-sm-8 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2><span class="coloured">P</span>ortfolio<div class="line"></div></h2>
          
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/1.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="icon fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="icon fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
   if(mysql_num_rows($query) > 0){
	   
	   $port = array();
	   
	   while($row = mysql_fetch_array($query)){
		   $port[] = $row;
		   $p;
	   }
	   $wow_delay = 300;
	   for($p = 0; $p < count($port); $p++){
		  
		   
	   echo"
	   
        <div class=\"col-sm-3\">
          <div class=\"folio-item wow fadeInRightBig\" data-wow-duration=\"1000ms\" data-wow-delay=\"".$wow_delay."ms\">
            <div class=\"folio-image\">
              <img class=\"img-responsive\" src=\"images/portfolio/".stripslashes($port[$p][3])."\" alt=\"".stripslashes($port[$p][1])."\">
            </div>
            <div class=\"overlay\">
              <div class=\"overlay-content\">
                <div class=\"overlay-text\">
                  <div class=\"folio-info\">
                    <h3>".stripslashes($port[$p][1])."</h3>
                    <p>".stripslashes($port[$p][4])."</p>
                  </div>
                  <div class=\"folio-overview\">
                    <span class=\"folio-link\"><a class=\"folio-read-more\" href=\"#\" data-single_url=\"portfolio-single.php?pid=".$port[$p][0]."\" ><i class=\"icon fa-link\"></i></a></span>
                    <span class=\"folio-expand\"><a href=\"images/portfolio/".$port[$p][3]."\" data-lightbox=\"portfolio\"><i class=\"icon fa-search-plus\"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
	   ";
	   
	   $wow_delay += 100;
	   
	   }
	   
   }
   
  ?>
  
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  
  <section id="services">
  <div class="row">
  <div class="col-lg-8">
   
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-1">
            <h2><span class="coloured">O</span>ur Services <i class="icon fa-magic coloured"></i></h2>
            <p></p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-offset-1 col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="icon fa-flask"></i>
            </div>
            <div class="service-info">
              <h3>Colour mizxing</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="icon fa-umbrella"></i>
            </div>
            <div class="service-info">
              <h3>Creative Idea</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="icon fa-gift"></i>
            </div>
            <div class="service-info">
              <h3>Awuuf Things</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
        </div>
      </div>
    
	</div><!-- //COL -->
	<div class="col-lg-4">
			<section id="features" class="parallax">
    
      <div class="row count">
        <div class="col-lg-12 col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="icon fa-user"></i>
          <h3 class="timer">250</h3>
          <p>Happy Clients</p>
        </div>
        <div class="col-lg-12 col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="icon fa-desktop"></i>
          <h3 class="timer">170</h3>                    
          <p>Contracts Made</p>
        </div> 
        <div class="col-lg-12 col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="icon fa-star-half-empty"></i>
          <h3 class="timer">20</h3>                    
          <p>Ratings</p>
        </div> 
        <div class="col-lg-12 col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="icon fa-comment-o"></i>                    
          <h3>24/7</h3>
          <p>Contact Form</p>
        </div>                 
      </div>
    
	</div>
	</div>
  </section><!--/#features-->

	</div><!--//COL-->
	</div><!--//ROW-->
  </section><!--/#services-->
  
  
  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <p></p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-md-offset-3 col-sm-offset-3 col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" title="Your Name" placeholder="Name" value="<?php echo $_POST["name"]; ?>" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" title="Your E-mail Address" class="form-control" placeholder="Email Address" value="<?php echo $_POST["email"]; ?>" required="required">
                    </div>
                  </div>
                </div>
				<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                
				<div class="col-sm-6">
                <div class="form-group">
                  <input type="tel" name="subject" class="form-control" title="Your Phone Number" placeholder="Phone Number (OPTIONAL)" value="<?php echo $_POST["phone"]; ?>" required="required">
                </div>
				</div>
				<div class="col-sm-6">  
                <div class="form-group">
                  <input type="text" name="subject" title="Subject" class="form-control" placeholder="Subject" value="<?php echo $_POST["subject"]; ?>" required="required">
                </div>
				</div>
				</div>
                <div class="form-group">
                  <textarea name="message" id="message" name="message" class="form-control" rows="4" title="Type something" placeholder="Enter your message" required="required"><?php echo $_POST["message"]; ?></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" name="submit" class="btn-submit">Send Now <i class="icon fa-send-o"></i></button>
                </div>
              </form>   
            </div>
            
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container">
	  <!--
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
        --->
		<div class="row">
          <div class="col-sm-6">
            <p>&copy; <?php echo date("Y"); ?> <span class="foot-label">Nisho</span> Ventures</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Powered by <a href="http://www.jempton.com" target="_blank">Jempton</a></p>
          </div>
        </div>
      
      </div>
    </div>
  </footer>
<div class="social-media">
          <ul>
            <li><a class="envelope" href="mailto:info@nishoventures.com.ng" target="_blank"><i class="icon fa-envelope"></i></a></li>
			<li><a class="facebook" href="#" target="_blank"><i class="icon fa-facebook"></i></a></li>           
		   <li><a class="twitter" href="#" target="_blank"><i class="icon fa-twitter"></i></a></li> 
            <li><a class="linkedin" href="#" target="_blank"><i class="icon fa-linkedin"></i></a></li>
			<li><a class="phone" href="mailto:info@nishoventures.com.ng" target="_blank"><i class="icon fa-phone"></i></a></li>
			
          </ul>
        </div>
     
	 <!--blanket purpose -->
	 <div id="make-blanket"></div>
	 
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
<?php
mysql_close($con);
?>