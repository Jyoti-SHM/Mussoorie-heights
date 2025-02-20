<!DOCTYPE html>
<html lang="en">
<head>
  <!--================ Mobile specific metas ================-->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
  <meta name="google-site-verification" content="zO9k5ACF79SE7EjtpE_ng1aGsu6apT5fa4qkOp4iNXA"/>
  <!--================ Basic page needs ================-->
  <title>Hotel Mussoorie Heights | Mussoorie Hotels</title>
  <meta name="description" content="Hotel Mussoorie Heights is the best hotel in Mussoorie. It offers quality services with amazing view at an affordable price.">  
  <!--================ Google web fonts ================-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,900&amp;display=swap" rel="stylesheet" />
  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="css/fontawesome-all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp" rel="stylesheet" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="vendors/arcticmodal/jquery.arcticmodal-0.3.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/revolution/css/settings.css" />
  <link rel="stylesheet" href="vendors/revolution/css/layers.min.css" />
  <link rel="stylesheet" href="vendors/revolution/css/navigation.min.css" />
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="vendors/fancybox/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/slider.css"/>
  <link rel="stylesheet" href="css/jquery-ui.css"/>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css"/>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
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
    
    <!------Slider-------->
    
    <div class="desktop-slider">
    <section id="lab_video_slider desktop-slider">
    <div class="row">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
        
        <div id="slide_three" class="swiper-slide">
            <img src="images/slider/3.jpg" width="100%">
          </div>
          
          <div id="slide_one" class="swiper-slide">
            <img src="images/slider/1.jpg" width="100%">
          </div>
          
          <div id="slide_two" class="swiper-slide">
            <img src="images/slider/2.jpg" width="100%">
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      </div>
      </section>
      </div>
      
      <!------Slider End-------->
      
      <!------Mobile Slider-------->
    
    <div class="mobile-slider">
    <section id="lab_video_slider">
    <div class="row">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
        
        <div id="slide_three" class="swiper-slide">
            <img src="images/slider/ms-1.jpg" width="100%">
          </div>
          
          <div id="slide_one" class="swiper-slide">
            <img src="images/slider/ms-2.jpg" width="100%">
          </div>
          
          <div id="slide_two" class="swiper-slide">
            <img src="images/slider/ms-3.jpg" width="100%">
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      </div>
    </section>
    </div>
      
      <!------Mobile Slider End-------->
      
      
      <!----Booking Form----->
      
      <div class="mad-section container-fluid small-size mad-colorizer--scheme-color-3 mad-colorizer--scheme-light">
        <form method="post" action="#" class="mad-form">
          <div class="mad-form-row">
            <div class="mad-form-col short-col">
              <label>Arrival Date</label>
              <div class="mad-datepicker">
                <div class="mad-datepicker-body">
                  <span class="mad-datepicker-others">
                  <input type="text" id="datepicker">
                  </span>
                </div>
              </div>
            </div>
            <div class="mad-form-col short-col">
              <label>Departure Date</label>
              <div class="mad-datepicker">
                <div class="mad-datepicker-body">
                  <span class="mad-datepicker-others">
                   <input type="text" id="datepicker2">
                  </span>
                </div>
              </div>
            </div>
            <div class="mad-form-col short-col">
              <label>Adults</label>
              <div class="quantity size-2">
                <input type="text" value="1" readonly="" />
                <button type="button" class="qty-plus">
                  <i class="material-icons">keyboard_arrow_up</i>
                </button>
                <button type="button" class="qty-minus">
                  <i class="material-icons">keyboard_arrow_down</i>
                </button>
              </div>
            </div>
            <div class="mad-form-col short-col">
              <label>Children</label>
              <div class="quantity size-2">
                <input type="text" value="0" readonly="" />
                <button type="button" class="qty-plus">
                  <i class="material-icons">keyboard_arrow_up</i>
                </button>
                <button type="button" class="qty-minus">
                  <i class="material-icons">keyboard_arrow_down</i>
                </button>
              </div>
            </div>
            <div class="mad-form-col short-col mobile-center">
              <button type="submit" class="btn-g-form">Check Availability</button>
            </div>
          </div>
        </form>
      </div>
      
      <!----Booking Form End----->
      
      
      <!----------Room Section---------->
      
      <div class="mad-content">
      <div class="container">
         <div class="mad-title-wrap">
            <h3 class="mad-section-title" align="center">Our Rooms</h3>
            <p align="center">We offer Exclusive Super Deluxe Rooms and Deluxe Rooms.</p>
          </div><br>
        <div class="mad-entities mad-entities-details type-4 with-img-border">
          <!--================ Entity ================-->
          <article class="mad-entity">
            <div class="mad-entity-media">
              <div class="owl-carousel mad-simple-slideshow mad-grid with-nav">
                <div class="mad-owl-item"><img src="images/rooms/exclusive-super-deluxe/1.jpg" alt="Exclusive Super Deluxe Room" title="Exclusive Super Deluxe Room"></div>
                <div class="mad-owl-item"><img src="images/rooms/exclusive-super-deluxe/2.jpg" alt="Exclusive Super Deluxe Room" title="Exclusive Super Deluxe Room"></div>
                <div class="mad-owl-item"><img src="images/rooms/exclusive-super-deluxe/3.jpg" alt="Exclusive Super Deluxe Room" title="Exclusive Super Deluxe Room"></div>
              </div>
            </div>
            <div class="mad-entity-content">
              <div class="mad-entity-header">
                <h4 class="mad-entity-title golden-color">Exclusive Super Deluxe Room</h4>
                <div class="mad-room-details">
                  <span class="mad-room-detail"><i class="fa fa-tv"></i> <span>32 inch LCD's</span></span>
                  <span class="mad-room-detail"><i class="fa fa-wifi"></i> <span>Internet Services</span></span>
                  <span class="mad-room-detail"><i class="fa fa-coffee"></i> <span>Tea and Coffee Makers</span></span>
                  <span class="mad-room-detail"><i class="fa fa-bath"></i> <span>Modern Bathroom</span></span>
                </div>
                <p class="text-mobile">All rooms are elegantly furnished and specially designed for your maximum comfort, convenience and infinity view of Valley in Super Deluxe Rooms and the back hill in the Deluxe Rooms.</p>
              </div>
              <div class="mad-entity-footer">
                <div class="btn-set justify-content-center">
                  <a href="contact.php" class="btn">Book Now</a>
                  <a href="exclusive-super-deluxe-room.php" class="btn style-2">Details</a>
                </div>
              </div>
            </div>
          </article>
          <!--================ End of Entity ================-->
          <!--================ Entity ================-->
          <article class="mad-entity">
            <div class="mad-entity-media">
              <div class="owl-carousel mad-simple-slideshow mad-grid with-nav">
                <div class="mad-owl-item"><img src="images/rooms/deluxe-room/1.jpg" alt="Deluxe Room" title="Deluxe Room"></div>
                <div class="mad-owl-item"><img src="images/rooms/deluxe-room/2.jpg" alt="Deluxe Room" title="Deluxe Room"></div>
                <div class="mad-owl-item"><img src="images/rooms/deluxe-room/3.jpg" alt="Deluxe Room" title="Deluxe Room"></div>
              </div>
            </div>
            <div class="mad-entity-content">
              <div class="mad-entity-header">
                <h4 class="mad-entity-title golden-color">Deluxe Room</h4>
                <div class="mad-room-details">
                  <span class="mad-room-detail"><i class="fa fa-tv"></i> <span>32 inch LCD's</span></span>
                  <span class="mad-room-detail"><i class="fa fa-wifi"></i> <span>Internet Services</span></span>
                  <span class="mad-room-detail"><i class="fa fa-coffee"></i> <span>Tea and Coffee Makers</span></span>
                  <span class="mad-room-detail"><i class="fa fa-bath"></i> <span>Modern Bathroom</span></span>
                </div>
                <p class="text-mobile">All rooms are elegantly furnished and specially designed for your maximum comfort, convenience and infinity view of Valley in Super Deluxe Rooms and the back hill in the Deluxe Rooms.</p>
              </div>
              <div class="mad-entity-footer">
                <div class="btn-set justify-content-center">
                  <a href="contact.php" class="btn">Book Now</a>
                  <a href="deluxe-room.php" class="btn style-2">Details</a>
                </div>
              </div>
            </div>
          </article>
          <!--================ End of Entity ================-->
        </div>
      </div>
    </div>
      
    <!----------Room Section End----------->
    
    
    <!----------About Section----------->
    
    <div class="mad-content no-pd bg-grey pad-20">
      <div class="container-fluid">
        <div class="
              mad-section
              align-center
              mad-section--stretched
              mad-colorizer--scheme-
            ">
          <div class="mad-colorizer-bg-color">
            <div class="mad-section-svg to-right">
              <img src="royal_beach_resort_svg/leaves_bg4.svg" alt="" />
            </div>
          </div>
          <div class="mad-title-wrap">
            <div class="mad-pre-title mobile-hide">welcome</div>
            <h3 class="mad-section-title">About Us</h3>
          </div>
          <div class="content-element-6">
            <p class="mad-text-medium text-mobile">Welcome to Hotel Mussoorie Heights, this hotel is the best hotel in Mussoorie. It offers quality services with amazing view at an affordable price. It is designed in a modern way as per the convenience of the guest. Right from sanitised stays with modern amenities, Hotel Mussoorie Heights offers amazing view of valley. Our Rooms are decorated with modern facilities and comfortably furnished. Take a break from working routine and relax in our rooms. Our rooms have been carefully designed with your comfort and convenience in mind. These beautifully appointed room provides you an relaxing ambience. Each feature of this hotel designed with perfection and give a unique luxuriousness to its guests.</p>
            <p class="mad-text-medium text-mobile">Hotel Mussoorie Heights is a solution between quality and price by creating a courteous and relaxing environment. We believe to create a natural environment to comfort guests and make them feel like a second home. Different category rooms offer a different experience and meet with the specified requirements of the guests.</p>
          </div>
        </div>
       </div>
     </div>
     
     <!----------About Section End----------->
     
     
     <!----------Picture Gallery Section----------->
     
     <div class="container-fluid">
        <div class="mt-80 mb-20">
        <div class="content-element-5">
        <div class="mad-title-wrap">
            <h3 class="mad-section-title" align="center">Photo Gallery</h3>
            <p align="center">Make Your Moments Here</p>
          </div>
        </div>
        <div data-isotope-layout="grid" class="mad-gallery item-col-4 mad-grid--isotope">
            <div class="mad-grid-sizer"></div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/home-gallery/2.jpg" data-fancybox="gallery"
                  ><img src="images/home-gallery/2.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/gallery/23.jpg" data-fancybox="gallery"
                  ><img src="images/gallery/23.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/gallery/21.jpg" data-fancybox="gallery"
                  ><img src="images/gallery/21.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/gallery/22.jpg" data-fancybox="gallery"
                  ><img src="images/gallery/22.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/home-gallery/5.jpg" data-fancybox="gallery"
                  ><img src="images/home-gallery/5.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/home-gallery/6.jpg" data-fancybox="gallery"
                  ><img src="images/home-gallery/6.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/home-gallery/7.jpg" data-fancybox="gallery"
                  ><img src="images/home-gallery/7.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/home-gallery/8.jpg" data-fancybox="gallery"
                  ><img src="images/home-gallery/8.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">

                <a href="images/home-gallery/9.jpg" data-fancybox="gallery"
                  ><img src="images/home-gallery/9.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/home-gallery/10.jpg" data-fancybox="gallery"
                  ><img src="images/home-gallery/10.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/home-gallery/11.jpg" data-fancybox="gallery"
                  ><img src="images/home-gallery/11.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="images/home-gallery/12.jpg" data-fancybox="gallery"
                  ><img src="images/home-gallery/12.jpg" alt=""
                /></a>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
          </div>
          </div>  
        
        </div>
        </div>
        </div>
     
     <!----------Picture Gallery Section End----------->
       
     <!----------About Mussoorie Section----------->
      
      <div class="mad-content pad-b">
      <div class="container">
        <div class="mad-section no-pd mad-section--stretched-content-no-px">
            <div class="mad-instafeed">
              <div class="mad-grid item-col-2 no-gutters">
                <div class="mad-col">
                  <img src="images/mussoorie.jpg" alt="Mussoorie" title="Mussoorie" width="100%" height="100%"/>
                </div>
                <div class="mad-col mussoorie-sec">
                <h5 class="white">Mussoorie: The Queen of the Hills</h5>
                  <p class="mad-text-medium text-mobile" align="justify">Mussoorie is one of the most popular hill stations located at a distance of 290 km from Delhi in the Dehradun district of Uttarakhand. With a backdrop of the Shivalik range of Himalayas and doon valley, Mussoorie, also known as Queen of The Hills, stands at an altitude of 7000 feet above sea level. With a cool and pleasant climate throughout the year, Mussoorie was once the British summer capital.</p>
<p class="mad-text-medium text-mobile" align="justify">The British remnants can be seen in the city in the archaic architecture of the hotels and churches. One of the most popular tourist attractions in Mussoorie is The Mall (also known as the Mall Road), which is a slightly steep boulevard with eateries and other shops lining its entire stretch. From the little houses spread around the area to the architecture of even the lamp posts, The Mall gives off a distinct colonial vibe.</p>
<p class="mad-text-medium text-mobile" align="justify">Another major highlight of Mussoorie is the Ropeway to Gun Hill. Gun Hill is the second highest peak in Mussoorie, and tourists can avail of the cable car ropeway ride to Gun Hill, which offers an enchanting view of the entire city as well as the surrounding Himalayan mountains.</p>
<p class="mad-text-medium text-mobile" align="justify">The adjoining little hill station of Landour, along with Mussoorie, Barlowganj and Jharipani together form the greater Mussoorie.  With a lot of waterfalls, the town of Dhanaulti in the vicinity and the remains of colonial architecture, Mussoorie has everything to make a memorable vacation.</p>
             </div>
             </div>
             </div>
           </div>
         </div>
       </div>
            
     <!----------About Mussoorie Section End----------->


    <?php
    include 'include/footer.php'
    ?>

  </div>
 
  <script src="vendors/jquery-3.6.0.min.js"></script>
  <script src="vendors/jquery.easing.1.3.min.js"></script>
  <script src="vendors/jquery.parallax-1.1.3.min.js"></script>
  <script src="vendors/isotope.pkgd.min.js"></script>
  <script src="vendors/fancybox/jquery.fancybox.min.js"></script>
  <script src="js/modules/mad.isotope.js"></script>
  <script src="vendors/modernizr.js"></script>
  <script src="vendors/monkeysan.accordion.js"></script>
  <script src="vendors/monkeysan.jquery.nav.1.0.js"></script>
  <script src="vendors/monkeysan.validator.min.js"></script>
  <script src="vendors/handlebars-v4.0.5.min.js"></script>
  <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
  <script src="vendors/retina.min.js"></script>
  <script src="vendors/sticky-sidebar.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/mad.customselect.js"></script>
  <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script src="vendors/countdown/jquery.plugin.min.js"></script>
  <script src="vendors/countdown/jquery.countdown.js"></script>
  <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="vendors/moment.min.js"></script>
  <script src="js/modules/mad.alert-box.min.js"></script>
  <script src="js/modules/mad.newsletter-form.min.js"></script>
  <script src="js/modules/mad.sticky-header-section.min.js"></script>
  <script src="js/mad.app.js"></script>
  
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
	$( "#datepicker2" ).datepicker();
  } );
  </script>
 
  
  <!-- Swiper JS -->
      <script src="js/slider.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 30,
            autoplay: 3000,
            autoplayDisableOnInteraction: false
        });
      </script>
    </div>
    <!-- end .row -->
  </div>
  <!-- end .container-->
  </div>
  <!-- end #section -->
<!-- partial -->
</body>
</html>