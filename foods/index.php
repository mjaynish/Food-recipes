<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/search.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
   <!--  <link rel="stylesheet" type="text/css" href="style.css">-->

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>
<body>
        <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Hunger <span>.</span>Stay</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse" >
                    
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#menu" class="smoothScroll">Recipes</a></li>
                         <li><a href="#footer" class="smoothScroll">Contact Us</a></li>
                         
                          
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">Call Now! <i class="fa fa-phone"></i> 010 020 0340</a></li>
                            <li>      <?php  if (isset($_SESSION['username'])) : ?>
                                    <p> <a href="index.php?logout='1'" class="section-btn" >logout</a> </p>
                                    <?php endif ?> </li>
                                   
                      </ul>

               </div>

        </div>
     </section>

<section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
     

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3></h3>
                                             <h1>
                                              <?php  if (isset($_SESSION['username'])) : ?>
    	                                         Welcome, <?php echo $_SESSION['username']; ?>
                                              <?php endif ?></h1>
                                              <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover our recipes</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Your Perfect Breakfast</h3>
                                             <h1>The best dinning quality can be here too!</h1>
                                            
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>

  <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Read our story</h4>
                                   <h2>We've been Making The Delicious Foods Since 1999</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>To create great dine-in experience across the country. We aim to provide a cheap and convenient way for small restaurants to digitize and go online. Restaurant owner who wants to take and grow their business online, with low budget can start their restaurant business and get many more customers. Restaurant owners can make more visibility over the internet without any technical knowledge. Please Tell your friends about hunger stay Thank you.</p>
                              </div> 
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


    


     <!-- MENU-->

     <center><div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Recipes</h2>
                              
                         </div>
                    </div></center>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Recipes.." title="Type in a name">
<ul id="myUL">
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                   
<div class="col-md-4 col-sm-6">
  <div class="menu-thumb">
    <li><a href="images/menu-image1.jpg" class="image-popup" title="american breakfast">
        <img src="images/menu-image1.jpg" class="img-responsive" alt="">
            <div class="menu-info">
                <div class="menu-item">
                    <h3>American Breakfast</h3>
                    <p>Tomato / Eggs / Sausage</p>
                </div>
                                        
            </div>
    <li><a>American Breakfast</a></li>
  </div>
</div>


<div class="col-md-4 col-sm-6">
  <div class="menu-thumb">
      <li><a href="images/menu-image2.jpg" class="image-popup" title="self-made Salad">
        <img src="images/menu-image2.jpg" class="img-responsive" alt="">
            <div class="menu-info">
                <div class="menu-item">
                    <h3>Self-made Salad</h3>
                    <p>Green / Fruits / Healthy</p>
                </div>
                                        
            </div>
      <li><a>Self-Made Salad</a></li>
  </div>
</div>


<div class="col-md-4 col-sm-6">
  <div class="menu-thumb">
    <li><a href="images/menu-image3.jpg" class="image-popup" title="chinese noodles">
      <img src="images/menu-image3.jpg" class="img-responsive" alt="">
          <div class="menu-info">
              <div class="menu-item">
                  <h3>Chinese Noodles</h3>
                  <p>Pepper / Chicken / Vegetables</p>
              </div>
                                        
          </div>
    <li><a>Chinese Noodles</a></li>
  </div>  
</div>

<div class="col-md-4 col-sm-6"> 
  <div class="menu-thumb">
    <li><a href="images/menu-image4.jpg" class="image-popup" title="rice soup">
      <img src="images/menu-image4.jpg" class="img-responsive" alt="">
          <div class="menu-info">
              <div class="menu-item">
                  <h3>Rice Soup</h3>
                  <p>Green / Chicken</p>
              </div>
                                        
          </div>
    <li><a>Rice Soup</a></li>
  </div>
</div>

<div class="col-md-4 col-sm-6"> 
  <div class="menu-thumb">
    <li><a href="images/menu-image5.jpg" class="image-popup" title="deli burger">
      <img src="images/menu-image5.jpg" class="img-responsive" alt="">
          <div class="menu-info">
              <div class="menu-item">
                  <h3>Deli Burger</h3>
                  <p>Beef / Fried Potatoes</p>
              </div>
                                        
          </div>
    <li><a>Deli Burger</a></li>
  </div>
</div>

<div class="col-md-4 col-sm-6"> 
  <div class="menu-thumb">
    <li><a href="images/menu-image6.jpg" class="image-popup" title="Big flat fried">
      <img src="images/menu-image6.jpg" class="img-responsive" alt="">
          <div class="menu-info">
              <div class="menu-item">
                  <h3>Big Flat Fried</h3>
                  <p>Pepper / Crispy</p>
              </div>
                                        
          </div>
    <li><a>Big Flat Fried</a></li>
  </div>
</div>
</div>
</div>
</section>
</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

   

        


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Iraniwadi road No 2,<br>Near Asian Bakery<br>Kandivali west</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Reservation</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>090-080-0650 | 090-070-0430</p>
                                   <p><a href="mailto:mjaynish@yahoo.com">mjaynish@yahoo.com</a></p>
                                   <p>LINE: Hunger stay </p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Monday: Closed</p>
                                   <div>
                                        <strong>Tuesday to Friday</strong>
                                        <p>7:00 AM - 9:00 PM</p>
                                   </div>
                                   <div>
                                        <strong>Saturday - Sunday</strong>
                                        <p>11:00 AM - 10:00 PM</p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                              <p><br> <br>Hunger Stay 
                              
                             
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>