<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>OsteriaX | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
</head>
<body>
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>

      <header class="sm_header">
          <nav class="navbar navbar-default sm_main_navbar">
            <div class="container">
                <div class="navbar-header">
                     <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

                <a class="navbar-brand" href="index.html"><strong><b>The Taj</b></strong>
                    <br> <span><i>Restaurant & Cafe</span></i></a> 
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
                    <li onclick="ScrollToTarget('home')">HOME</li>
                    <li onclick="ScrollToTarget('about')">ABOUT US</li>                       
                    <li onclick="ScrollToTarget('menu')">MENU</li>                       
                    <li onclick="ScrollToTarget('reservation')">RESERVATION</li>                      
                    <li onclick="ScrollToTarget('gallery')">GALLERY</li>
                    <li onclick="ScrollToTarget('chefs')">OUR CHEFS</li> 
                    <li onclick="ScrollToTarget('contact')">CONTACT</li> 
                    </ul>                            
                </div>



            </div>
          </nav>

      </header>

      <section id="sm_home">
          <h2> <i>Home </i></h2>
         
         <div class="slider carousel slide " data-ride="carousel">
  <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active" id="video">
                    <video id="video" muted autoplay="autoplay" loop="loop" preload="auto">
                      <source src="assets/img/slider/video1.mp4"></source>
                    </video>
                    <div class="sm_home_videoText typewriter">                       
                      <p>Welcome to the Taj Restaurant & Cafe ........ your dream hotel.</p>
                    </div>
                  </div>                  
                </div>
                <div class="slider-layout"></div>
                <div class="slider-caption">
              </div>
              </div>
        </div>




      </section>
      <section id="sm_about">
          <Strong><i>About Us </i></Strong>
      </section>
      <section id="sm_counter">
          <i>Counters </i>
      </section>
      <section id="sm_menu">
          <i>Restaurant Menu </i>
      </section>
      <section id="sm_reservation">
          <i>Reservation </i>
          <form method="post" action="Reservation.php"> 
              <div class="col-md-6">
                <div class="mu-reservation-left">
                  <form class="mu-reservation-form">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">                       
                          <input type="text" name="fullname"  class="form-control" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="text" name="PhoneNumber" class="form-control" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <select name="NoOfPersons" class="form-control">
                            <option value="0">How Many?</option>
                            <option value="1">1 Person</option>
                            <option value="2">2 People</option>
                            <option value="3">3 People</option>
                            <option value="4">4 People</option>
                            <option value="5">5 People</option>
                            <option value="6">6 People</option>
                            <option value="7">7 People</option>
                            <option value="8">8 People</option>
                            <option value="9">9 People</option>
                            <option value="10">10 People</option>
                          </select>                      
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" name="date" class="form-control" id="datepicker" placeholder="Date">              
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                      </div>
                      <button type="submit" name="btn_MakeReservation" class="mu-readmore-btn">Make Reservation</button>
                    </div>
                  </form>    
                </div>
              </div>
          </form>

      </section>
      <section id="sm_gallery">
          <i>Gallery </i>
      </section>
      <section id="sm_testimonial">
          <i>Testimonial </i>
      </section>
       <section id="sm_chef">
          <i>Our Chefs </i>
      </section>
      <section id="sm_contact">
          <i>Contact Us </i>
      </section>
      <section id="sm_map">
          <i>Find us on Google Map </i>
          <div style="height: 400px; width:100%">
  <iframe height="400px" width="100%" frameborder="5px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.0793710672046!2d78.37174761475154!3d17.455914788037624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93daa6ed8c8f%3A0x3c0f1542a8b97c78!2sGrepthor+Software+Solutions+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1530444539786" width=100% height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
  
</div>
      </section>






<!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <!--<script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>-->
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  
  <script src="assets/js/SM_Scripts.js"></script> 

  </body>
</html>