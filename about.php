<?php include 'includes/session.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Organic aroma - Cosmetics & Beauty eCommerce </title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.3.2/css/simple-line-icons.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">   
    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="style.css">
    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Ionicon CSS ==-->
    <link href="assets/css/ionicons.min.css" rel="stylesheet" />
    <!--== Simple Line Icon CSS ==-->
    <link href="assets/css/simple-line-icons.css" rel="stylesheet" />
    <!--== Line Icons CSS ==-->
    <link href="assets/css/lineIcons.css" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Range Slider CSS ==-->
    <link href="assets/css/range-slider.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet" />
    <!--== Owl Carousel Min CSS ==-->
    <link href="assets/css/owlcarousel.min.css" rel="stylesheet" />
    <!--== Owl Theme Min CSS ==-->
    <link href="assets/css/owltheme.min.css" rel="stylesheet" />
    <!--== Spacing CSS ==-->
    <link href="assets/css/spacing.css" rel="stylesheet" />

    <!--== Theme Font CSS ==-->
    <link href="assets/css/theme-font.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- DataTables -->
      <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://kit.fontawesome.com/3477ae541c.js" crossorigin="anonymous"></script>
  	<!-- Custom CSS -->
    <style type="text/css">
    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px){ 
      #navbar-search-input{ 
        width: 60px; 
      }
      #navbar-search-input:focus{ 
        width: 100px; 
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px){ 
      #navbar-search-input{ 
        width: 150px; 
      }
      #navbar-search-input:focus{ 
        width: 250px; 
      } 
    }

    .word-wrap{
      overflow-wrap: break-word;
    }
    .prod-body{
      height:300px;
    }

    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .register-box{
      margin-top:20px;
    }

    #trending{
      list-style: none;
      padding:10px 5px 10px 15px;
    }
    #trending li {
      padding-left: 1.3em;
    }
    #trending li:before {
      content: "\f046";
      font-family: FontAwesome;
      display: inline-block;
      margin-left: -1.3em; 
      width: 1.3em;
    }

    /*Magnify*/
    .magnify > .magnify-lens {
      width: 100px;
      height: 100px;
    }

    </style>
  
</head>

<body>

    <!--wrapper start-->
    <div class="wrapper home-default-wrapper">

        <!--== Start Preloader Content ==-->
        <div class="preloader-wrap">
            <div class="preloader">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!--== End Preloader Content ==-->

            <!--== Start Header Wrapper ==-->
            <header class="header-area header-default header-style2">
            <!--== Start Header Top ==-->
            <div class="header-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 hidden-md-down">
                            <div class="contact-email">
                                <span>Email us: <a href="mailto:demo@example.com">demo@example.com</a></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 text-md-start text-lg-center text-center">
                            <p>Additional 20% Off Sale Items – Please See Details</p>
                        </div>
                        <div class="col-md-6 col-lg-4 text-md-end text-center mt-sm-15">
                            <div class="theme-setting">
                               
                            </div>
                            <div class="theme-currency">
                                <a class="dropdown-btn" href="#" role="button">
          Indian  Rupee
                
              </a>
                               
                            </div>
                            <div class="theme-language">
                                <a class="dropdown-btn" href="#" role="button">
                <img src="assets/img/photos/language-01.jpg" alt="Has-Image">English
               
              </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Header Top ==-->

            <!--== Start Header Middle ==-->
            <div class="header-middle hidden-md-down">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col col-md-4 col-sm-12">
                            <div class="contact-link">
                                <div class="contact-info">
                                    <span class="phone">Call Us: <a href="tel:(+123)4567890">(+123)4567890</a></span>
                                    <div class="time-contact">7 Days a week from 9:00 am to 7:00 pm</div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-4 col-sm-12">
                            <div class="header-logo-area text-center">
                                <a href="index.html">
                <img class="logo-main" src="assets/img/logo.png" alt="Logo" />
                <img class="logo-light d-none" src="assets/img/logo-light.png" alt="Logo" />
              </a>
                            </div>
                        </div>
                        <div class="col col-md-4 col-sm-12">
                            <div class="header-action-area float-end">
                                <div class="search-content-wrap">
                                   
                                    <div class="btn-search-content">
                                    
                                    </div>
                                </div>
                                <div class="shop-button-group">
                                    
                                    
                                    <div class="shop-button-item">
                                    <?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo '
               
                 <a class="dropdown-btn" href="profile.php" role="button">
                    <img src="'.$image.'" class="user-image" alt="User Image" style="border-radius:90%; width: 35px;">
                  
                  </a>
                 
                    <ul class="submenu-nav"><!-- User image -->
                 
                      

                      <p>
                        '.$user['firstname'].' '.$user['lastname'].'
                       
                      </p>
                    </li>
                    <li >
                     
                     
                    </li>
                  </ul>
               
              ';
            }
            else{
              echo "
              <a href='login.php'>LOGIN</a>&nbsp;
              <a href='signup.php'>SIGNUP</a>
              ";
            }
          ?>
                                    </div>
                                    <div class="shop-button-item">
                                   
            <div class=pop-cart-content>
        
          </li>
</ul>
            </div>
                                        <a class="shop-button" href="#">
                    <i class="icon-bag icon"></i>
                    <sub class="shop-count">.</sub>
                   
                  </a>
                                        <div class="popup-cart-content">
                                            <ul class="popup-product-list">
                                                <li class="product-list-item">
                                               
            <div class=pop-cart-content>
            <ul class="popup-product-list">
              <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
              <li>
                <ul class="menu" id="cart_menu">
                </ul>
              </li>
              
            </ul>
                                                       </li>
                                            </ul>
                                            
                                            <div class="checkout">
                                                <a href="cart_view.php" class="btn-Checkout">GO TO Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Header Middle ==-->

            <!--== Start Header Bottom ==-->
            <div class="header-bottom sticky-header hidden-md-down">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-12 position-relative">
                            <div class="header-align align-default justify-content-center">
                                <div class="header-navigation-area hidden-md-down">
                                    <ul class="main-menu nav">
                                        <li class="has-submenu"><a href="index.php">Home</a>
                                        
                                        </li>
                                        <li><a href="about.php">About Us</a></li>
                                        
                                        <li class="has-submenu"><a href="#">shop</a>
                                        <ul class=" submenu-nav ">
                                        <?php
             
             $conn = $pdo->open();
             try{
               $stmt = $conn->prepare("SELECT * FROM category");
               $stmt->execute();
               foreach($stmt as $row){
                 echo "
                   <li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                 ";                  
               }
             }
             catch(PDOException $e){
               echo "There is some problem in connection: " . $e->getMessage();
             }

             $pdo->close();

           ?>
         
                                            </ul>
                                    </li>
                                                           <li><a href="contact.html">Contact us</a></li>
                                    
                                                           <form method="POST" class="navbar-form navbar-left" action="search.php">
          <div class="input-group">
              <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
              <span class="input-group-btn" id="searchBtn" style="display:none;">
                  <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
              </span>
          </div>
        </form>                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--== End Header Bottom ==-->

            <!--== Start Responsive Header ==-->
            <div class="responsive-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4">
                            <div class="header-item">
                                <button class="btn-menu" type="button"><i class="icon-menu"></i></button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="header-item justify-content-center">
                                <div class="header-logo-area">
                                    <a href="index.html">
                  <img class="logo-main" src="assets/img/logo.png" alt="Logo" />
                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="header-item justify-content-end">
                            <div class="shop-button-item">
                                    <?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo '
               
                 <a class="dropdown-btn" href="profile.php" role="button">
                    <img src="'.$image.'" class="user-image" alt="User Image" style="border-radius:90%; width: 35px;">
                  
                  </a>
                 
                    <ul class="submenu-nav"><!-- User image -->
                 
                      

                      <p>
                        '.$user['firstname'].' '.$user['lastname'].'
                       
                      </p>
                    </li>
                    <li >
                     
                     
                    </li>
                  </ul>
               
              ';
            }
            else{
              echo "
              <a href='login.php'>LOGIN</a>&nbsp;
              <a href='signup.php'>SIGNUP</a>
              ";
            }
          ?>
          
                                    </div>
                                    <button class="btn-cart" onclick="window.location.href='cart_view.php'"><i class="icon-bag"></i> <span class="item-count">.</span></button>
                                    
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="responsive-search-content">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Responsive Header ==-->
        </header>
        <!--== End Header Wrapper ==-->
 <!--== End Header Wrapper ==-->

        <main class="main-content">
            <!--== Start Page Header Area Wrapper ==-->
            <div class="page-header-area bg-img" data-bg-img="assets/photo/bg-02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="page-header-content">
                                <nav class="breadcrumb-area">
                                    <ul class="breadcrumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
                                        <li>About us</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start About Area Wrapper ==-->
            <section class="about-area about-page-area">
                <div class="container">
                    <div class="row about-page-wrap">
                        <div class="col-md-6">
                            <div class="about-content">
                                <h1 style="font-size: 24px;" class="title">An overview of organic skin and hair care products redefining organic skin and hair care.
</h1>
                                <p>We are proud to introduce Soul Graden, a natural brand that produces products for women that are of the highest quality. Suitable for sensitive skin of all types. With organic ingredients and no harmful chemicals, all of our products are made by hand in small batches. Every ingredient is organically sourced and responsibly crafted.
Soul Graden offers a wide range of products to suit your needs! </p>
                                <a class="btn-theme" href="contact.php">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-thumb">
                                <img src="assets/img/about/01.jpg" alt="Image-HasTech" class="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End About Area Wrapper ==-->

            <!--== Start Feature Area Wrapper ==-->
            <div class="feature-area feature-about-area position-relative z-index-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-icon-box-style2">
                                <div class="inner-content">
                                    <div class="icon-box">
                                        <img src="assets/img/icons/f01.png" alt="Image-HasTech" class="icon-img">
                                    </div>
                                    <div class="content">
                                    <h5 class="title">NO SHORTCUTS
        </h5>
                                        <p>We formulate luxury skincare essentials with an equal focus on quality, efficacy, luxury, and inclusivity</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-icon-box-style2">
                                <div class="inner-content">
                                    <div class="icon-box">
                                        <img src="assets/img/icons/f02.png" alt="Image-HasTech" class="icon-img">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">24*7 Customer Support
        </h5>
                                        <p>We strive to satisfy our customers with our 24*7 customer service.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-icon-box-style2">
                                <div class="inner-content">
                                    <div class="icon-box">
                                        <img src="assets/img/icons/f03.png" alt="Image-HasTech" class="icon-img">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Secure Payment</h5>
                                        <p>Our delivery team ensures that all deliveries arrive on time without delay.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-group">
                    <div class="shape-img1">
                        <img src="assets/img/shape/01.png" alt="Image">
                    </div>
                    <div class="shape-img2">
                        <img src="assets/img/shape/02.png" alt="Image">
                    </div>
                </div>
            </div>
            <!--== End Feature Area Wrapper ==-->


            <!--== Start Contact Info Area Wrapper ==-->
            <section class="bg-black-color">
                <div class="container pt-35 pb-40">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-info contact-info-static">
                                <div class="row">
                                    <div class="col-border col-12 col-md-4 col-sm-6 border-0">
                                        <div class="info-item">
                                            <div class="icon-box">
                                                <i class="icon las la-phone-volume"></i>
                                            </div>
                                            <p>1800.3687.6886 M-F 9AM-6PM</p>
                                        </div>
                                    </div>
                                    <div class="col-border col-12 col-md-4 col-sm-6 mt-xs-35">
                                        <div class="info-item">
                                            <div class="icon-box">
                                                <i class="icon las la-envelope"></i>
                                            </div>
                                            <p>demo@example.com</p>
                                        </div>
                                    </div>
                                    <div class="col-border col-12 col-md-4 col-sm-12 mt-sm-35">
                                        <div class="info-item">
                                            <div class="icon-box">
                                                <i class="icon lab la-facebook-messenger"></i>
                                            </div>
                                            <p>Virtual Chat 24/7 | Live M-F 9am-6pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Contact Info Area Wrapper ==-->

            <!--== Start Divider Area Wrapper ==-->
            <section class="divider-area">
                <div class="container pt-90 pt-lg-70 pb-lg-60">
                    <div class="row">
                        <div class="col-12">
                            <div class="divider-style-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="divider-content text-center">
                                            <h4 class="title hidden-sm-down">Let’s Connect On Social</h4>
                                            <h4 class="title2 hidden-md-up collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-1">Let’s Connect On Social</h4>
                                            <div id="dividerId-1" class="collapse">
                                                <div class="social-icons">
                                                    <a href="#/"><i class="la la-facebook"></i></a>
                                                    <a href="#/"><i class="la la-twitter"></i></a>
                                                    <a href="#/"><i class="la la-youtube"></i></a>
                                                    <a href="#/"><i class="la la-instagram"></i></a>
                                                </div>
                                                <p class="mb-sm-25">Follow us on your favorite platforms. Check out new launch teasers, how-to videos, and share your favorite looks.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="divider-content text-center">
                                            <h4 class="title hidden-sm-down" data-margin-bottom="32">Sign Up For Newsletter</h4>
                                            <h4 class="title2 hidden-md-up collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-2">Sign Up For Newsletter</h4>
                                            <div id="dividerId-2" class="collapse">
                                                <div class="newsletter-content-wrap">
                                                    <div class="newsletter-form">
                                                        <form>
                                                            <input type="email" class="form-control" placeholder="Your email address">
                                                            <button class="btn btn-submit" type="button">Sign up</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Divider Area Wrapper ==-->
        </main>

        <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--== Start Footer Widget Area ==-->
                        <div class="footer-widget-area pb-30">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="widget-item">
                                        <div class="about-widget">
                                            <div class="inner-content">
                                                <div class="footer-logo">
                                                    <a href="index.php">
                          <img class="logo-light" src="assets/img/logo-light.png" alt="Logo" />
                        </a>
                                                </div>
                                                <p>Location: HIG-23 sector/1 Shankar Nagar Raipur Chhattisgarh 492007Soul Garden</p>
                                            </div>
                                            <div class="widget-desc">
                                                <p>We are a brand that believes in the power of nature. With all of our organic and natural products, we provide you with the best care for your skin.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="widget-item">
                                        <div class="widget-menu-wrap">
                                            <ul class="nav-menu">
                                               
                                                <li><a href="about.php">About us</a></li>
                                              
                                                <li><a href="contact.php">Contact us</a></li>
                                                <li><a href="#/">Sitemap</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Footer Widget Area ==-->
                    </div>
                </div>
            </div>
            <!--== Start Footer Bottom Area ==-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="copyright">Copyright © 2021 All Rights Reserved | Made with <i class="fa fa-heart-o"></i> by <a target="_blank" href="rechnor.in">RECHNOR INDIA</a></p>
                        </div>
                        <div class="col-lg-6">
                            <div class="payment">
                                <img src="assets/img/photos/payment.png" alt="Payment">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Footer Bottom Area ==-->
        </footer>
        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div id="scroll-to-top" class="scroll-to-top"><span class="ion-md-arrow-up"></span></div>

        <!--== Start Side Menu ==-->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <div class="off-canvas-overlay"></div>
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="close-action">
                            <button class="btn-menu-close">menu<i class="icon-arrow-left"></i></button>
                        </div>
                    </div>

                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu menu-active-one">
                            <!-- Note Content Auto Generate By Jquery From Main Menu -->
                        </div>
                        <!-- End Mobile Menu Wrapper -->
                    </div>
                </div>
                <!-- End Off Canvas Content Wrapper -->
            </div>
        </aside>
        <!--== End Side Menu ==-->

        <!--== Start Popup Product  ==-->
        <div class="popup-product-quickview">
            <div class="product-single-item">
                <div class="row">
                    <div class="col-md-6">
                        <!--== Start Product Thumbnail Area ==-->
                        <div class="product-thumb">
                            <div class="swiper-container single-product-thumb-content single-product-thumb-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#/">
                    <img src="assets/img/shop/product-single/05.jpg" alt="Image-HasTech">
                    <span class="product-flag-new">New</span>
                  </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#/">
                    <img src="assets/img/shop/product-single/06.jpg" alt="Image-HasTech">
                    <span class="product-flag-new">New</span>
                  </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container single-product-nav-content single-product-nav-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/img/shop/product-single/nav-05.jpg" alt="Image-HasTech">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/shop/product-single/nav-06.jpg" alt="Image-HasTech">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Product Thumbnail Area ==-->
                    </div>
                    <div class="col-md-6">
                        <!--== Start Product Info Area ==-->
                        <div class="product-single-info mt-sm-70">
                            <h1 class="title">Water And Wind Resistant Insulated Jacket</h1>
                            <div class="product-info">
                                <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star icon-color-gray"></i>
                                </div>
                                <ul class="comments-advices">
                                    <li><a href="#/" class="reviews"><i class="fa fa-commenting-o"></i>Read reviews (1)</a></li>
                                    <li><a href="#/" class="comment"><i class="fa fa-pencil-square-o"></i>Write a review</a></li>
                                </ul>
                            </div>
                            <div class="prices">
                                <span class="price">€14.52</span>
                                <div class="tax-label">Tax included</div>
                            </div>
                            <div class="product-description">
                                <ul class="product-desc-list">
                                    <li>Stay ready for a change in weather with the IZOD® Water and Wind Resistant Insulated Jacket.</li>
                                    <li>Water-resistant jacket keeps you warm and dry.</li>
                                    <li>Stand collar features an attached hood.</li>
                                    <li>Front-zip closure.</li>
                                </ul>
                            </div>
                            <div class="product-quick-action">
                                <div class="product-quick-qty">
                                    <div class="pro-qty">
                                        <input type="text" id="quantity" title="Quantity" value="1">
                                    </div>
                                </div>
                                <a class="btn-product-add" href="single-product.html">Add to cart</a>
                            </div>
                            <div class="product-wishlist-compare">
                                <a href="#" class="btn-wishlist"><i class="icon-heart"></i>Add to wishlist</a>
                                <a href="#" class="btn-compare"><i class="icon-shuffle"></i>Add to compare</a>
                            </div>
                            <div class="social-sharing">
                                <span>Share</span>
                                <div class="social-icons">
                                    <a href="#/"><i class="la la-facebook"></i></a>
                                    <a href="#/"><i class="la la-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--== End Product Info Area ==-->
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-product-overlay"></div>
        <button class="popup-product-close"><i class="la la-close"></i></button>
        <!--== End Popup Product  ==-->
    </div>

    <!--=======================Javascript============================-->

    <!--=== Modernizr Min Js ===-->
    <script src="assets/js/modernizr.js"></script>
    <!--=== jQuery Min Js ===-->
    <script src="assets/js/jquery-main.js"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="assets/js/jquery-migrate.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== jQuery Appear Js ===-->
    <script src="assets/js/jquery.appear.js"></script>
    <!--=== jQuery Swiper Min Js ===-->
    <script src="assets/js/swiper.min.js"></script>
    <!--=== jQuery Fancy Box Min Js ===-->
    <script src="assets/js/fancybox.min.js"></script>
    <!--=== jQuery Slick Nav Js ===-->
    <script src="assets/js/slicknav.js"></script>
    <!--=== jQuery Waypoints Js ===-->
    <script src="assets/js/waypoints.js"></script>
    <!--=== jQuery Owl Carousel Min Js ===-->
    <script src="assets/js/owlcarousel.min.js"></script>
    <!--=== jQuery Match Height Min Js ===-->
    <script src="assets/js/jquery-match-height.min.js"></script>
    <!--=== jQuery Zoom Min Js ===-->
    <script src="assets/js/jquery-zoom.min.js"></script>
    <!--=== Countdown Js ===-->
    <script src="assets/js/countdown.js"></script>

    <!--=== Custom Js ===-->
    <script src="assets/js/custom.js"></script>

</body>

</html>