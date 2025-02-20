<!DOCTYPE html>
<html lang="en">
<head>
    <!--================ Mobile specific metas ================-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-sscalable=no"/>
    <!--================ Basic page needs ================-->
    <title>Book Mussoorie Hotels | Best Deals On Mussoorie Hotels</title>
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
          <h1 class="mad-page-title">Contact Us</h1>
          <nav class="mad-breadcrumb-path">
            <span><a href="index.php" class="mad-link">Home</a></span> /
            <span>Contact Us</span>
          </nav>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content no-pd">
        <div class="container-fluid">
          <article
            class="
              mad-section
              mad-colorizer--scheme-color-7
              mad-section--stretched
            "
          >
            <!--================ Icon Boxes ================-->
            <div class="mad-icon-boxes align-center icon-size-2 item-col-3">
              <div class="mad-col">
                <!--================ Icon Box ================-->
                <article class="mad-icon-box">
                  <div class="mad-icon-box-content">
                  <i class="fa fa-map-marker contact-icon"></i>
                    <p class="mad-icon-box-title contact-text">
                      Hotel Mussoorie Heights, Picture Palace - Kincraig Road, Tara Hall, Mussoorie - 248179, Uttarakhand
                    </p>
                  </div>
                </article>
                <!--================ End of Icon Box ================-->
              </div>
              <div class="mad-col">
                <!--================ Icon Box ================-->
                <article class="mad-icon-box">
                  <div class="mad-icon-box-content">
                  <i class="fa fa-phone contact-icon"></i>
                    <p class="mad-icon-box-title contact-text">
                      Reservations - 9897055949,
9897055999<br>
                    </p>
                  </div>
                </article>
                <!--================ End of Icon Box ================-->
              </div>
              <div class="mad-col">
                <!--================ Icon Box ================-->
                <article class="mad-icon-box">
                  <div class="mad-icon-box-content">
                  <i class="fa fa-envelope contact-icon"></i>
                    <p class="mad-icon-box-title contact-text">
                      info@mussoorieheights.com
                    </p>
                  </div>
                </article>
                <!--================ End of Icon Box ================-->
              </div>
            </div>
            <!--================ End of Icon Boxes ================-->
          </article>
          
          <div class="mad-content no-pd">
          <div class="mad-section">
            <div class="row vr-size-2">
              <div class="col-lg-6">
                <div class="mad-title-wrap">
                  <h4 class="mad-section-title">Get In Touch</h4>
                </div>
                <div class="messages"><?php print $message; ?></div>
				<form action="php-file.php" method="POST" class="mad-form type-2 item-col-1" >
                <input type="hidden" name="action"id="name" value="submit"> 
                  <div class="mad-col">
                    <div class="mad-form-item">
                      <label>First Name</label>
                      <input type="text" name="name" placeholder="First Name" required=""/>
                    </div>
                    <div class="mad-form-item">
                      <label>Email</label>
                      <input type="email" name="email" placeholder="Email Address" required=""/>
                    </div>
                    <div class="mad-form-item">
                      <label>Phone Number</label>
                      <input type="number" name="phone" placeholder="Phone Number" required=""/>
                    </div>
                    <div class="mad-form-item">
                      <label> Message</label>
                      <textarea type="text" name="message" placeholder="Type Your Message Here"></textarea>
                    </div>
                    <div class="mad-form-item">
                      <div class="g-recaptcha" data-sitekey="6Lfg5mEeAAAAANratX7VimDOpqYVuFdWBQWWK2Gq"></div>
                      <span class="msg-error error"></span>
                    </div>
                  </div>
                  <div class="mad-col">
                    <div class="mad-form-item">
                      <button type="submit" class="btn-g" onClick="return validateCaptach(); sendAllMail();">
                        <span>Submit</span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-6">
              <div class="mad-title-wrap">
                  <h4 class="mad-section-title">Our Location</h4>
                </div>
                <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3439.4944773438274!2d78.08427971512475!3d30.45042948173636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4039ddedcfde1900!2zMzDCsDI3JzAxLjYiTiA3OMKwMDUnMTEuMyJF!5e0!3m2!1sen!2sin!4v1643865144609!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
              </div>
            </div>
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
