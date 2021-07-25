<!DOCTYPE html>
<html>
   <head>
      <title>Hospital</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-site-verification" content="" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <!-- favicon -->
      <link href="images/favicon.png" rel="icon" />
      <meta name="theme-color" content="#354f8e">
      <!-- end favicon -->
      <!-- required css  -->
      <link rel="stylesheet" href="css/app.css" />
      <!-- end -->
   </head>
   <body>
      <header id="header" class="bg-white">
         <!-- start offcanvas menu -->
         <div id="offcanvas-reveal" uk-offcanvas="flip: true;  overlay: true;">
            <div class="uk-offcanvas-bar uk-dark uk-offcanvas-bar-white uk-padding-remove  uk-box-shadow-medium uk-flex uk-flex-between uk-flex-column">
               <div class="uk-margin-remove uk-position-relative uk-border-bottom bg-white uk-padding-small">
                  <button class="uk-offcanvas-close uk-close-large" type="button" uk-close></button>
                  <a class="uk-navbar-item uk-background-white uk-padding-small" href="index.php">
                  <img src="images/logo.png" alt="Logo" class="uk-logo-light" width="210">
                  </a>
               </div>
               <div>
                  <nav>
                     <ul class="uk-navsidebar    uk-nav-parent-icon uk-nav-left uk-margin-auto-vertical" uk-nav="multiple: false">
                        <li class="uk-active"><a href="index.php">Home</a></li>
                        <li class="uk-parent">
                           <a href="">Hospital</a>
                           <ul class="uknavsub">
                              <li><a href="about-us.php">About Hospital</a></li>
                              <li><a href="awards-recognitions.php">Awards & Recognitions</a></li>
                              <li><a href="team.php">Founder Members</a></li>
                              <li><a href="team.php">Executive Committee</a></li> 
                           </ul>
                        </li>
                        <li class="uk-parent uk-active">
                           <a href="#">Centres of Excellence</a>
                           <ul class="uk-nav-parent-icon uk-nav" uk-nav="multiple: false" aria-hidden="true" hidden="">
                              <li class="uk-parent">
                                 <a href="">24 hours Services</a>
                                 <ul class="uknavsub" aria-hidden="true" hidden="">
                                    <li><a href="service-single.php">Emergency</a></li>
                                    <li><a href="service-single.php">Pathology</a></li>
                                    <li><a href="service-single.php">X-ray</a></li>
                                    <li><a href="service-single.php">ECG</a></li>
                                    <li><a href="service-single.php">Pharmacy</a></li>
                                    <li><a href="service-single.php">In patient Service</a></li>
                                 </ul>
                              </li>
                              <li class="uk-parent">
                                 <a href="">Surgery</a>
                                 <ul class="uknavsub" aria-hidden="true" hidden="">
                                    <li><a href="service-single.php">ENT Surgery</a></li>
                                    <li><a href="service-single.php">General Surgery</a></li>
                                    <li><a href="service-single.php">Cataract Surgery</a></li>
                                    <li><a href="service-single.php">Orthopedic Surgery</a></li>
                                    <li><a href="service-single.php">URSL Stone Surgery</a></li>
                                 </ul>
                              </li>
                              <li class="uk-parent">
                                 <a href="">OPD</a>
                                 <ul class="uknavsub" aria-hidden="true" hidden="">
                                    <li><a href="service-single.php">Dental</a></li>
                                    <li><a href="service-single.php">Urology</a></li>
                                    <li><a href="service-single.php">Pediatrics</a></li>
                                    <li><a href="service-single.php">Cardiology</a></li>
                                    <li><a href="service-single.php">Gastroenterology</a></li>
                                    <li><a href="service-single.php">Thyroid and Diabetes</a></li>
                                    <li><a href="service-single.php">General Surgery</a></li>
                                    <li><a href="service-single.php">Gynecology</a></li>
                                    <li><a href="service-single.php">Ophthalmogy</a></li>
                                    <li><a href="service-single.php">Internal Medicine</a></li>
                                    <li><a href="service-single.php">Ear, Nose & Throat</a></li>
                                    <li><a href="service-single.php">Dermatology & Venerology</a></li>
                                    <li><a href="service-single.php">Orthopedics</a></li>
                                    <li><a href="service-single.php">Rheumatology</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li><a href="doctors.php">Find A Doctor</a></li>
                        <li><a href="donors.php">Donors</a></li>
                        <li class="uk-parent">
                           <a href="">Media</a>
                           <ul class="uknavsub">
                              <li><a href="media-list.php">Blog - Let's Talk Health</a></li>
                              <li><a href="media-list.php">Media Coverage</a></li>
                              <li><a href="media-list.php">Events</a></li>
                              <li><a href="media-list.php">CSR Activities</a></li>
                              <li><a href="media-list.php">Camps</a></li>
                            </ul>
                        </li>
                        <li><a href="get-involved.php">Get Involved</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                     </ul>
                  </nav>
               </div>
               <!-- social icon -->
               <div class="uk-position-relative">
                  <div>
                     <div class="uk-padding-small bg-primary-light">
                        <ul class="uk-grid-small  uk-flex-center" uk-grid>
                           <li><a class="facebookBtn smGlobalBtn" href="#"></a></li>
                           <li><a class="instagramBtn smGlobalBtn" href="#"></a></li>
                           <li><a class="twitterBtn smGlobalBtn" href="#"></a></li>
                           <li><a class="youtubeBtn smGlobalBtn" href="#"></a></li>
                           <li><a class="linkedinBtn smGlobalBtn" href="#"></a></li>
                        </ul>
                     </div>
                     <div>
                        <a href="appointment.php" class="uk-display-block uk-button  uk-button-secondary"><i class="fa fa-calendar"></i> Online Appointment</a>
                     </div>
                     <div class="uk-padding-small  bg-primary">
                        <div class="f-12 uk-margin-remove uk-text-left@s uk-text-center">Contact at</div>
                        <div class="f-16 uk-margin-remove uk-text-left@s uk-text-center"><a href="tel:977-1- 4257911">977-1- 4257911 /</a> 
                           <a href="tel:977-1- 4266229">4266229 /</a>
                           <a href="tel:977-1- 4216138">4216138</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end social icon -->
            </div>
         </div>
         <!-- end offcanvas menu -->
         <!-- mobile top menu -->
         <div class="uk-header-mobile uk-border-bottom uk-hidden@m uk-box-shadow-small bg-white">
            <div class="" uk-sticky="" show-on-up="" animation="uk-animation-slide-top" cls-active="uk-navbar-sticky" sel-target=".uk-navbar-container" class="uk-sticky">
               <div class="uk-navbar-container bg-white">
                  <nav uk-navbar="" class="uk-navbar">
                     <div class="uk-navbar-left">
                        <a href="index.php" class="uk-navbar-item uk-logo">
                        <img alt="" src="images/logo.png" width=" ">
                        </a>
                     </div>
                     <div class="uk-navbar-center">
                     </div>
                     <div class="uk-navbar-right">
                        <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-reveal">
                           <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"></div>
                        </a>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
         <!-- end mobile top menu -->
         <!-- small header -->
         <div class="bg-primary uk-top-header uk-visible@m">
            <div class="uk-container">
               <div class="uk-flex uk-flex-between uk-flex-middle">
                  <div class=" text-white">
                     <ul class="uk-flex">
                        <li> Follow Us on Social Media </li>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                  </div>
                  <div>
                     <ul class="uk-flex">
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Disclaimer</a></li>
                        <li>
                           <a href="tel:977-1- 4257911">977-1- 4257911 /</a> 
                           <a href="tel:977-1- 4266229">4266229 /</a>
                           <a href="tel:977-1- 4216138">4216138</a>
                        </li>
                        <li>
                           <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-reveal " style="min-height: 15px !important;">
                              <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon uk-light"></div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- end  -->
         <!-- top logo section -->
         <div class="header-top   uk-visible@m uk-header-overlay uk-padding-small">
            <div class="uk-container ">
               <div class="uk-child-width-1-2@l uk-child-width-1-2@m  uk-child-width-1-2@s uk-grid-large uk-flex-middle" uk-grid>
                  <!--  -->
                  <div>
                     <div class="logo">
                        <a href="index.php">
                        <img src="images/logo.png" alt="">
                        </a>
                     </div>
                  </div>
                  <!--  -->
                  <!--  -->
                  <div>
                     <div class="uk-text-right">
                        <ul class="uk-grid-small uk-flex-right" uk-grid>
                           <li><a href="appointment.php" class="uk-button  uk-button-secondary-outline"><i class="fa fa-calendar"></i> Online Appointment</a></li>
                        </ul>
                     </div>
                  </div>
                  <!--  -->
               </div>
            </div>
         </div>
         <!-- end top logo section -->
         <!-- start main menu -->
         <div class="uk-h-sticky uk-visible@m uk-border-top" uk-sticky="top: 200; animation:uk-animation-fade uk-animation-slow uk-transform-origin-bottom-center">
         <div class="  uk-inner-navigation navbar-container uk-position-relative ">
            <div class="uk-container">
               <nav class="uk-navbar uk-display-block" uk-navbar="">
                  <ul class="uk-navbar-nav uk-flex uk-flex-between">
                     <li><a href="index.php">Home</a></li>
                     <li>
                        <a href="news-list.php">Hospital<span class="" uk-icon="icon: chevron-down; ratio: 1;"></span></a>
                        <div class="uk-navbar-dropdown">
                           <ul class="uk-nav uk-navbar-dropdown-nav">
                             <li><a href="about-us.php">About Hospital</a></li>
                              <li><a href="awards-recognitions.php">Awards & Recognitions</a></li>
                              <li><a href="team.php">Founder Members</a></li>
                              <li><a href="team.php">Executive Committee</a></li> 
                           </ul>
                        </div>
                     </li>
                     <li>
                        <a href="#">Centres of Excellence<span class="" uk-icon="icon: chevron-down; ratio: 1;"></span></a>
                        <div class="uk-navbar-dropdown">
                           <ul class="uk-nav uk-navbar-dropdown-nav">
                              <li>
                                 <a href="">24 hours Services <span class="uk-margin-remove uk-align-right " uk-icon="icon: chevron-right; ratio: 1;"></span></a>
                                 <div uk-dropdown="pos: right-top; offset: 0; delay-hide: 200;" class="uk-dropdown">
                                    <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="service-single.php">Emergency</a></li>
                                    <li><a href="service-single.php">Pathology</a></li>
                                    <li><a href="service-single.php">X-ray</a></li>
                                    <li><a href="service-single.php">ECG</a></li>
                                    <li><a href="service-single.php">Pharmacy</a></li>
                                    <li><a href="service-single.php">In patient Service</a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li>
                                 <a href="">Surgery <span class="uk-margin-remove uk-align-right " uk-icon="icon: chevron-right; ratio: 1;"></span></a>
                                 <div uk-dropdown="pos: right-top; offset: 0; delay-hide: 200;" class="uk-dropdown">
                                    <ul class="uk-nav uk-dropdown-nav">
                                       <li><a href="service-single.php">ENT Surgery</a></li>
                                    <li><a href="service-single.php">General Surgery</a></li>
                                    <li><a href="service-single.php">Cataract Surgery</a></li>
                                    <li><a href="service-single.php">Orthopedic Surgery</a></li>
                                    <li><a href="service-single.php">URSL Stone Surgery</a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li>
                                 <a href="">OPD <span class="uk-margin-remove uk-align-right " uk-icon="icon: chevron-right; ratio: 1;"></span></a>
                                 <div uk-dropdown="pos: right-top; offset: 0; delay-hide: 200;" class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                                    <div class=" uk-child-width-1-3 uk-grid-small" uk-grid>
                                       <div>
                                          <ul class="uk-nav uk-navbar-dropdown-nav">
                                             <li><a href="service-single.php">Dental</a></li>
                                             <li><a href="service-single.php">Urology</a></li>
                                             <li><a href="service-single.php">Pediatrics</a></li>
                                             <li><a href="service-single.php">Cardiology</a></li>
                                             <li><a href="service-single.php">Gastroenterology</a></li>
                                          </ul>
                                       </div>
                                       <div>
                                          <ul class="uk-nav uk-navbar-dropdown-nav">
                                             <li><a href="service-single.php">Thyroid and Diabetes</a></li>
                                             <li><a href="service-single.php">General Surgery</a></li>
                                             <li><a href="service-single.php">Gynecology</a></li>
                                             <li><a href="service-single.php">Ophthalmogy</a></li>
                                             <li><a href="service-single.php">Internal Medicine</a></li>
                                          </ul>
                                       </div>
                                       <div>
                                          <ul class="uk-nav uk-navbar-dropdown-nav">
                                             <li><a href="service-single.php">Ear, Nose & Throat</a></li>
                                             <li><a href="service-single.php">Dermatology & Venerology</a></li>
                                             <li><a href="service-single.php">Orthopedics</a></li>
                                             <li><a href="service-single.php">Rheumatology</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li><a href="doctors.php">Find A Doctor</a></li>
                        <li><a href="donors.php">Donors</a></li>
                     <li>
                        <a href="#">Media<span class="" uk-icon="icon: chevron-down; ratio: 1;"></span></a>
                        <div class="uk-navbar-dropdown">
                           <ul class="uk-nav uk-navbar-dropdown-nav">
                             <li><a href="media-list.php">Blog - Let's Talk Health</a></li>
                              <li><a href="media-list.php">Media Coverage</a></li>
                              <li><a href="media-list.php">Events</a></li>
                              <li><a href="media-list.php">CSR Activities</a></li>
                              <li><a href="media-list.php">Camps</a></li>
                            </ul>
                        </div>
                     </li>
                     <li><a href="get-involved.php">Get Involved</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- end main menu -->
      </header>
      <!-- /header -->
      <!--Pre loader start-->
      <div id="uk-preloader">
         <div class="uk-loading">
            <svg version="1.2" height="300" width="600" xmlns="http://www.w3.org/2000/svg"
               viewport="0 0 60 60" xmlns:xlink="http://www.w3.org/1999/xlink">
               <path id="uk-pulsar" stroke="rgba(0,155,155,1)" fill="none" stroke-width="2"stroke-linejoin="round" 
                  d="M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210" />
            </svg>
         </div>
      </div>
      <!--pre loader end-->