<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Ini Resume</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>
<?php
       $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
       $cleardb_server = $cleardb_url["host"];
       $cleardb_username = $cleardb_url["user"];
       $cleardb_password = $cleardb_url["pass"];
       $cleardb_db = substr($cleardb_url["path"],1);
       $active_group = 'default';
       $query_builder = TRUE;
       
      $connect = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db)
      or exit("Error from Database Connection");
         $regError= array();
         $regSuccess = array();
            
         if(isset($_POST['submit'])){
             $firstname = $_POST['firstname'];
             $lastname = $_POST['lastname'];
             $email = $_POST['email'];
             $subject = $_POST['subject'];
             $message = $_POST['message'];



             if(empty($firstname)){
               $regError[] = "<h3>Please Enter your Firstname in the Contact Section</h3>".'<br>';
             }
             if(empty($lastname)){
                $regError[] = "<h3>Please Enter your Lastname in the Contact Section</h3".'<br>';
              }
              if(empty($email)){
                $regError[] = "<h3>Please Enter your Email in the Contact Section</h3".'<br>';
              }
              if(empty($subject)){
               $regError[] = "<h3>Please Enter the Subject in the Contact Section</h3".'<br>';
             }
             if(empty($message)){
               $regError[] = "<h3>Please Enter your Message in the Contact Section</h3".'<br>';
             }
              if(empty($regError)){
                $query = "INSERT INTO resume1(firstname, lastname, email, subject, message) VALUES('$firstname', '$lastname', 
                '$email', '$subject','$message')"; 

              $result = mysqli_query($connect,$query)
             or exit("Error in Table");
              
              
             if ($result) {
                $regSuccess[] = "Thanks For Contacting Me!";
             }
            else{
                
            }
        
            }
            mysqli_close($connect);
        }
       
       ?>
   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <?php
            for($j=0; $j<count($regSuccess); $j++){
         echo $regSuccess[$j];
         }
       for($i=0; $i<count($regError); $i++){
         echo $regError[$i];
           }
            ?>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
	         <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">I'm Inioluwa Alake.</h1>
            <h3>I am a Backend web developer.</h1></span>
               <span>I build and maintain the technology needed to power the components which enable the user-facing side of the website to exist.
                   This includes the core application logic, databases, data and application integration, API and other back end processes. <a class="smoothscroll" href="#about">about me</a>.</h3>
            <hr />
            <ul class="social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span>Inioluwa Alake</span><br>
						   <span>1600 Amphitheatre Parkway<br>
						         Nigeria
                     </span><br>
						   <span>080-456-7890</span><br>
                     <span>inioluwa@website.com</span>
					   </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>Babcock University</h3>
                  <p class="info">Bachelor of Sofware Engineering <span>&bull;</span> <em class="date">April 2007</em></p>


               </div>

            </div> <!-- item end -->

      

         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Work
      ----------------------------------------------- -->
      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Work</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>Zuri Internship</h3>
                  <p class="info">Web Developer(Backend) Intern<span>&bull;</span> <em class="date">August 2021 - Present</em></p>
                  <p><a href="http://zuri.team"> 
                     <img src="https://internship.zuri.team/static/media/logo.36d2d48a.svg" alt="zuri logo"></a>
                     click on the logo for more info about Zuri Company</p>
                  <p>
                     Integration of front-end element created by front-end developers.Maintains professional and technical knowledge by attending educational workshops; reviewing professional publications; 
                     establishing personal networks; benchmarking current practices; participating in professional societies.
                     PHP- Web App Development to create enterprise web portal. 80% New/ 20% sustainment (some legacy PHP Apps).
                     Work closely with Project Manager and Team Leads on change request functions.Performs technical analyses for development of new features
                  </p>

               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Work -->


      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

				<div class="bars">

				   <ul class="skills">
					   <li><span class="bar-expand photoshop"></span><em>PHP</em></li>
                  <li><span class="bar-expand illustrator"></span><em>Javescript</em></li>
						<li><span class="bar-expand wordpress"></span><em>Python</em></li>
						<li><span class="bar-expand css"></span><em>CSS</em></li>
						<li><span class="bar-expand html5"></span><em>HTML5</em></li>
                  <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
					</ul>

				</div><!-- end skill-bars -->

			</div> <!-- main-col end -->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->



   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead">Please Enter the Following Details</p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">
    
               <!-- form -->
               <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="firstName">Firstname <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="firstname">
                  </div>

                  <div>
						   <label for="lastName">LastName <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="lastname">
                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="email">
                  </div>

                  <div>
						   <label for="contactSubject">Subject</label>
						   <input type="text" value="" size="35" id="contactSubject" name="subject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="message"></textarea>
                  </div>

                  <div>
                     <input type="submit" value="Submit" name="submit">
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

					</fieldset>
				   </form> <!-- Form End -->


            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
					   <p class="address">
						   Jonathan Doe<br>
						   1600 Amphitheatre Parkway <br>
						   Mountain View, CA 94043 US<br>
						   <span>(123) 456-7890</span>
					   </p>

				   </div>

               <div class="widget widget_tweets">

                  <h4 class="widget-title">Latest Tweets</h4>

                  <ul id="twitter">
                     <li>
                        <span>
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                        <a href="#">http://t.co/CGIrdxIlI3</a>
                        </span>
                        <b><a href="#">2 Days Ago</a></b>
                     </li>
                     <li>
                        <span>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi
                        <a href="#">http://t.co/CGIrdxIlI3</a>
                        </span>
                        <b><a href="#">3 Days Ago</a></b>
                     </li>
                  </ul>

		         </div>

            </aside>

      </div>

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>&copy; Copyright 2014 CeeVee</li>
               <li>Design by <a href="http://www.styleshout.com/" title="Styleshout" target="_blank">Styleshout</a></li>   
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>

</html>