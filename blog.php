<!DOCTYPE html>
<html lang="en">
<head>
    <!--================ Mobile specific metas ================-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-sscalable=no"/>
    <!--================ Basic page needs ================-->
    <title>Blog | Best Deals On Mussoorie Hotels</title>
    <meta name="description" content="Hotel Mussoorie Heights gives best deals on bookings. Book your stay now!" />

    <!--================ Google web fonts ================-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,900&amp;display=swap" rel="stylesheet"/>
    <!--================ Vendor CSS ================-->
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp" rel="stylesheet"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="vendors/arcticmodal/jquery.arcticmodal-0.3.css"/>
    <!--================ Theme CSS ================-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/blog.css" />
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
  <link rel="shortcut icon" href="favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <!--================ Favicon ================-->
    
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5KYD8CHHYJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5KYD8CHHYJ');
</script>


  </head>

  <body>
    <div id="mad-page-wrapper" class="mad-page-wrapper">
    
    <?php
    include 'include/header.php'
    ?>
    
      <!--================ Breadcrumb ================-->
      <div
        class="mad-breadcrumb with-bg-img with-overlay"
        data-bg-image-src="images/contact-head.jpg"
      >
        <div class="container wide">
          <h1 class="mad-page-title">Our Latest Blogs</h1>
          <nav class="mad-breadcrumb-path">
            <span><a href="index.php" class="mad-link">Home</a></span> /
            <span>Our Blogs</span>
          </nav>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content">
        <div class="card col-lg-3">

            <div class="img-head">
              <img src="blog/blog1.jpg" alt="Perfect Hill Station Getaway in Mussoorie">
            </div>

            <h6>Plan Your Perfect Family Vacation in Mussoorie, the Best Hill Station</h6>

            <p class="descr">Mussoorie, lovingly dubbed the "Queen of the Hills," makes for an ideal family getaway. .</p>

            <div class="mad-entity-footer">
                <div class="btn-set justify-content-center">
                  <a href="plan-your-family-vacation-in-mussoorie-the-best-hill-station.php" class="btn">Read More</a>
                </div>
            </div>
  
        </div>
        <div class="card col-lg-3">

            <div class="img-head">
              <img src="blog/blog1.jpg" alt="Perfect Hill Station Getaway in Mussoorie">
            </div>

            <h6>Best Time to Visit Mussoorie and What to Expect</h6>

            <p class="descr">Mussoorie, known as the “Queen of the Hills,” is a beautiful hill station in the Garhwal Himalayas.</p>

            <div class="mad-entity-footer">
                <div class="btn-set justify-content-center">
                  <a href="best-time-to-visit-mussoorie-and-what-to-expect.php" class="btn">Read More</a>
                </div>
            </div>

         </div>
      </div>
      
    <?php
    include 'include/footer.php'
    ?>
    
    </div>
    <script src="vendors/modernizr.js"></script>
    <script src="vendors/jquery-3.6.0.min.js"></script>
    <script src="vendors/jquery.easing.1.3.min.js"></script>
    <script src="vendors/jquery.parallax-1.1.3.min.js"></script>
    <script src="vendors/monkeysan.accordion.js"></script>
    <script src="vendors/monkeysan.jquery.nav.1.0.js"></script>
    <script src="vendors/monkeysan.validator.min.js"></script>
    <script src="vendors/handlebars-v4.0.5.min.js"></script>
    <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
    <script src="vendors/retina.min.js"></script>
    <script src="vendors/monkeysan.tabs.min.js"></script>
    <script src="vendors/sticky-sidebar.js"></script>
    <script src="vendors/mad.customselect.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyA_Yp_8RGMFiW6N-X8WLKYyfzvlOSzWwII&amp;amp;libraries=geometry&amp;amp;v=3.20"></script>
    <script src="js/modules/mad.alert-box.min.js"></script>
    <script src="js/modules/mad.contact-form.js"></script>
    <script src="js/modules/mad.newsletter-form.min.js"></script>
    <script src="js/modules/mad.sticky-header-section.min.js"></script>
    <script src="js/mad.app.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
function validateCaptach(){
	var xv = grecaptcha.getResponse();
        
  //var txtcpat = $("#recaptcha-accessible-status").text();
  
  if( $.trim(xv)== '' ){
	 $(".msg-error").html("Please validate captcha");
	 return false;
  }else{
	  $(".msg-error").html("");
	  return true;
  }
}
</script>
  </body>
</html>
