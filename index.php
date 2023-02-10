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

        <!--== End Preloader Content ==-->

            <!--== Start Header Wrapper ==-->
            <header class="header-area header-default header-style2">
            <!--== Start Header Top ==-->
            <div class="header-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 hidden-md-down">
                            <div class="contact-email">
                                <span>Email us: <a href="mailto: Soulgarden2012@gmail.com"> Soulgarden2012@gmail.com</a></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 text-md-start text-lg-center text-center">
                           
                        </div>
                        <div class="col-md-6 col-lg-4 text-md-end text-center mt-sm-15">
                            <div class="theme-setting">
                               
                            </div>
                            <div class="theme-currency">
                                <a class="dropdown-btn" href="#" role="button">
         
                
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
                                    <span class="phone">Call Us: <a href="tel:7694866000">7694866000</a></span>
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

        <main class="main-content">
            <!--== Start Hero Area Wrapper ==-->
            <section class="home-slider-area">
                <div class="swiper-container swiper-pagination-style dots-bg-light home-slider-container default-slider-container">
                    <div class="swiper-wrapper home-slider-wrapper slider-default">
                        <div class="swiper-slide">
                            <div class="slider-content-area" data-bg-img="assets/best-face-pack-glowing-skin.jpg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-10 col-sm-6 col-md-5">
                                            <div class="slider-content slider-content-light animate-pulse">
                                                <h1 class="sub-title transition-slide-0" style="color:#fa8d4c;">Herbal Products For Skin Care</h1>
                                                <h2 class="title transition-slide-1 mb-0"><span class="font-weight-400" style="color:#fa8d4c;">For The Modern-Day Skincare Routine.</span></h2>
                                               
                                                <a class="btn-slide transition-slide-3" href="#/">Shop Now </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-content-area" data-bg-img=" assets/best-oil-for-face-body.jpg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-10 col-sm-6 col-md-5">
                                            <div class="slider-content slider-content-light animate-flipInX">
                                                <h5 class="sub-title transition-slide-0">100% Ayurvedic Skin Care Products </h5>
                                                <h2 class="title transition-slide-1 mb-0"><span class="font-weight-400"></span></h2>
                                                <h2 class="title transition-slide-2">Discover Soul Garden</h2>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--== Add Swiper Pagination ==-->
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <!--== End Hero Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section>
                <div class="container pt-30 pt-sm-15 pb-15 pb-lg-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="images-col3-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="thumb thumb-scale-hover-style">
                                        <a href="single-product.html">
                    <img src="assets/best-under-eye-cream.jpg" alt="Image-HasTech" class="hover-img">
                  </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb thumb-scale-hover-style">
                                        <a href="https://organicaroma.rechnor.in/single-product.php?product=OIL%20PULLING%20OIL">
                    <img src="assets/oilpulling.jpeg" alt="Image-HasTech" class="hover-img">
                  </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb thumb-scale-hover-style">
                                        <a href="https://organicaroma.rechnor.in/single-product.php?product=GULAB%20JAL">
                    <img src="assets/best-gulab-jal-rose-water.jpg" alt="Image-HasTech" class="hover-img">
                  </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area">
                <div class="container pb-lg-60">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="section-title text-center mb-30">
                                <h2 class="title">Our Products</h2>
                                <div class="desc">
                                    <p>Natural Organic Skin Care Products </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-tabs-content-wrap">
                                <ul class="nav mb-25 product-tab-nav" id="pills-tab" role="tablist">
                                    <li role="presentation">
                                        <a class="active" id="makeup-tab" data-bs-toggle="pill" href="#makeup" role="tab" aria-controls="makeup" aria-selected="true">Face Pack</a>
                                    </li>
                                    <li role="presentation">
                                        <a id="skin-care-tab" data-bs-toggle="pill" href="#skin-care" role="tab" aria-controls="skin-care" aria-selected="false">Hair-Care</a>
                                    </li>
                                    <li role="presentation">
                                        <a id="health-care-tab" data-bs-toggle="pill" href="#health-care" role="tab" aria-controls="health-care" aria-selected="false">ESSENTIAL OILS    </a>
                                    </li>
                                    <li role="presentation">
                                        <a id="hand-cream-tab" data-bs-toggle="pill" href="#hand-cream" role="tab" aria-controls="hand-cream" aria-selected="false">Face Cream </a>
                                    </li>
                                    <li role="presentation">
                                        <a id="other-product-tab" data-bs-toggle="pill" href="#other-product" role="tab" aria-controls="other-product" aria-selected="false">Other Product    </a>
                                    </li>
                                </ul>
                                <div class="tab-content product-tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="makeup" role="tabpanel" aria-labelledby="makeup-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-slider owl-carousel owl-theme">
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="single-product.html">
                                  <img src="images/orange_aura.webp" alt="Image-HasTech">
                                  <img class="second-image" src="images/orange_aura.webp" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount">-10%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 class=""><a href="https://organicaroma.rechnor.in/single-product.php?product=ORANGE%20AURA-Face%20Pack">ORANGE AURA                   </a></h4>
                                                                        <h5 class="title">     Face Pack For Daily Exfoliator For Smooth, Natural-looking Skin</h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old">&#8377;     450</span>
                                                                            <span class="price">&#8377;     500</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                      
                                                                   
                                                                    
                                                                    
        
        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-1"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>  
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=D-TAN%20PACK-Face%20Pack">
                                  <img src="images/D_tan_pack.webp" alt="Image-HasTech">
                                  <img class="second-image" src="images/D_tan_pack.webp" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-10%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 class=""><a href="https://organicaroma.rechnor.in/single-product.php?product=D-TAN%20PACK-Face%20Pack">D-TAN PACK  </a></h4>
                                                                        <h5 class="title">The One-Stop Solution For Tanning & Whitening</h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     450</span>
                                                                            <span class="price text-black">&#8377;     550</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-2"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=SHAHI%20UBTAN%20-Face%20Pack">
                                  <img src="images/shahi_ubtan.webp" alt="Image-HasTech">
                                  <img class="second-image" src="images/shahi_ubtan.webp" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 class=""><a href="https://organicaroma.rechnor.in/single-product.php?product=SHAHI%20UBTAN%20-Face%20Pack">SHAHI UBTAN     </a></h4>
                                                                    <h5 class="title">
                                                                    Organic Ubtan Made With Natural Oils Of Nuts                                                              
                                                                    </h5>                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old">&#8377;     300</span>
                                                                            <span class="price">&#8377;     250</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-3"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=MUD%20PACK-%20Face%20Pack">
                                  <img src="assets/face-pack/best-mud-pack-for-face.png" alt="Image-HasTech">
                                  <img class="second-image" src="assets/face-pack/best-mud-pack-for-face.png" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 class=""><a href="https://organicaroma.rechnor.in/single-product.php?product=MUD%20PACK-%20Face%20Pack">MUD PACK                                                            </a></h4>
                                                                      <h5 class="title">   An energizing body bath that contains minerals </h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     300</span>
                                                                            <span class="price text-black">&#8377;     300</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-4"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=ANTI-AGEING%20PACK-%20Face%20Pack">
                                  <img src="assets/face-pack/best-anti-aging-face-pack.png" alt="Image-HasTech">
                                  <img class="second-image" src="assets/face-pack/best-anti-aging-face-pack.png" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 ><a href="https://organicaroma.rechnor.in/single-product.php?product=ANTI-AGEING%20PACK-%20Face%20Pack">ANTI-AGEING PACK</a></h4>
                                                                        <h5 class="title">Anti-ageing face pack enriched with almonds and coffee</h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="ion-md-star icon-color-gray"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     300</span>
                                                                            <span class="price text-black">&#8377;     300</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-5"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=AYURVEDIC%20PACK-%20Face%20pack">
                                  <img src="assets/face-pack/best-ayurvedic-face-pack.png" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 class=""><a href="https://organicaroma.rechnor.in/single-product.php?product=AYURVEDIC%20PACK-%20Face%20pack">AYURVEDIC PACK       </a></h4>
                                                                        <h5 class="title">        Skin-refreshing and skin-refining Deep Cleansing Face Pack</h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     300</span>
                                                                            <span class="price text-black">€23.06</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-6"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    
                                                  
                                                
                                          
                                                    
                                                
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="skin-care" role="tabpanel" aria-labelledby="skin-care-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-slider owl-carousel owl-theme">
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=SPA%20Cream">
                                  <img src="images/spa_cream.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="images/spa_cream.jpg" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount">-10%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4><a href="https://organicaroma.rechnor.in/single-product.php?product=SPA%20Cream">SPA CREAM  </a></h4>
                                                                        <h5 class="title">     100% Organic Deep Nourishing Hair Spa Cream </h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old">&#8377;     450</span>
                                                                            <span class="price">&#8377;     500</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-7"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=DRY%20SHAMPOO">
                                  <img src="images/dry_shampoo.webp" alt="Image-HasTech">
                                  <img class="second-image" src="images/dry_shampoo.webp" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-10%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4><a href="https://organicaroma.rechnor.in/single-product.php?product=DRY%20SHAMPOO">DRY SHAMPOO                                           </a></h4>
<h5 class="title">   Herbal dry shampoo with soothing properties</h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     450</span>
                                                                            <span class="price text-black">&#8377;     550</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-8"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=MEHENDI%20PACK">
                                  <img src="images/mehendi.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="images/mehendi.jpg" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 ><a href="https://organicaroma.rechnor.in/single-product.php?product=MEHENDI%20PACK">MEHNDI PACK                                                                                                                                                                                      </a></h4>
                                                                        <h5 class="title">       An organic henna powder infused with herbs</h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old">&#8377;     300</span>
                                                                            <span class="price">&#8377;     250</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-9"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=Hair%20Oil">
                                  <img src="images/hair_oil.webp" alt="Image-HasTech">
                                  <img class="second-image" src="images/hair_oil.webp" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-10%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                    <h4 class=""><a href="https://organicaroma.rechnor.in/single-product.php?product=Hair%20Oil">HAIR OIL                                                                                                                                                                                                                                                                                                                                                                                   .</a></h4>
                                                                        <h5 class="title">             Anti-Hair Fall Ayurvedic Oil For Weak Hairs</h5>
                                                                         <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     450</span>
                                                                            <span class="price text-black">&#8377;     550</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-22"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=NATURAL%20HAIR%20DYE">
                                  <img src="images/natural.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="images/natural.jpg" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4><a href="https://organicaroma.rechnor.in/single-product.php?product=NATURAL%20HAIR%20DYE">NATURAL HAIR DYE                                                                                                                                                                                                     </a></h4>
                                                                        <h5 class="title"> 100% Natural Dark Brown Hair Color  </h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     300</span>
                                                                            <span class="price text-black">&#8377;     300</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-10"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=MORINGA%20HAIR%20BUTTER">
                                  <img src="images/hair_butter.webp" alt="Image-HasTech">
                                  <img class="second-image" src="images/hair_butter.webp" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 ><a href="https://organicaroma.rechnor.in/single-product.php?product=MORINGA%20HAIR%20BUTTER">MORINGA HAIR BUTTER                                                                                                                                                                    </a></h4>
                                                                        <h5 class="title">                  Moringa Hair Butter For Soft And Shiny Hairs </h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="ion-md-star icon-color-gray"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     300</span>
                                                                            <span class="price text-black">&#8377;     300</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-1"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                   
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="other-product" role="tabpanel" aria-labelledby="other-product-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-slider owl-carousel owl-theme">
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=RELAXING%20SEA%20SALT">
                                  <img src="assets/other-product/best-sea-salt.png" alt="Image-HasTech">
                                  <img class="second-image" src="assets/other-product/best-sea-salt.png" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount">-10%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4><a href="https://organicaroma.rechnor.in/single-product.php?product=RELAXING%20SEA%20SALT">RELAXING SEA SALT  </a></h4>
                                                                        <h5 class="title">    Relaxing Sea Salt For Stress Relief Bath
 </h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old">&#8377;     450</span>
                                                                            <span class="price">&#8377;     500</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 
                                                                        <div class="menu" data-name="p-12"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    
                                             
                                                        <!--== End Shop Item ==-->
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=GULAB%20JAL">
                                  <img src="assets/other-product/best-gulab-jal-rose-water.png" alt="Image-HasTech">
                                  <img class="second-image" src="assets/other-product/best-gulab-jal-rose-water.png" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 ><a href="https://organicaroma.rechnor.in/single-product.php?product=GULAB%20JAL">GULAB JAL
                                                                                                                                                                   </a></h4>
                                                                        <h5 class="title">       Natural Gulab Jal With Picked Desi Gulab </h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="ion-md-star icon-color-gray"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     300</span>
                                                                            <span class="price text-black">&#8377;     300</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-16"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=MORINGA%20HAIR%20BUTTER">
                                                                  <img src="assets/img/shop/06.jpg" alt="Image-HasTech">
                                                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                      <i class="icon-heart icon"></i>
                                                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                                      <i class="icon-shuffle icon"></i>
                                                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                     <div class="product-desc">
                                                                    <div class="product-info">
                                                                    <h4 ><a href="https://organicaroma.rechnor.in/single-product.php?product=MORINGA%20HAIR%20BUTTER">MORINGA HAIR BUTTER                                                                                                                                                                    </a></h4>
                                                                        <h5 class="title">                  Moringa Hair Butter For Soft And Shiny Hairs </h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     300</span>
                                                                            <span class="price text-black">€23.06</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

                                                                     <div class="menu" data-name="p-17"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
                                                                           </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="hand-cream" role="tabpanel" aria-labelledby="hand-cream-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-slider owl-carousel owl-theme">
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=NIGHT%20CREAM">
                                  <img src="images/FACE-OIL.webp" alt="Image-HasTech">
                                  <img class="second-image" src="images/FACE-OIL.webp" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount">-10%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4><a href="https://organicaroma.rechnor.in/single-product.php?product=NIGHT%20CREAM">NIGHT CREAM                                                                                                                                                                                                         </a></h4>
                                                                        <h5 class="title">          Wrinkle-reducing and fine-lines-reducing night cream </h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old">&#8377;     450</span>
                                                                            <span class="price">&#8377;     500</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-18"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    
                                                   
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="health-care" role="tabpanel" aria-labelledby="health-care-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-slider owl-carousel owl-theme">
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=FACIAL%20OIL">
                                  <img src="images/Face_oil.webp" alt="Image-HasTech">
                                  <img class="second-image" src="images/Face_oil.webp" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount">-10%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 class=""><a href="https://organicaroma.rechnor.in/single-product.php?product=FACIAL%20OIL">FACIAL OIL                                                                                                                                                                                            .</a></h4>
                                                                        <h5 class="title">       Natural Facial Oil with a glow-boosting effect</h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old">&#8377;     450</span>
                                                                            <span class="price">&#8377;     500</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-21"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                   
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=OIL%20PULLING%20OIL">
                                  <img src="assets/oil/Best-oil-pilling-oil.png" alt="Image-HasTech">
                                  <img class="second-image" src="assets/oil/Best-oil-pilling-oil.png" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                    <h4 class=""><a href="https://organicaroma.rechnor.in/single-product.php?product=OIL%20PULLING%20OIL">OIL PULLING OIL</a></h4>
                                                                        <h5 class="title">               Organic Ayurvedic Oil Pulling Mouth wash </h5> <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old">&#8377;     300</span>
                                                                            <span class="price">&#8377;     250</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-23"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="https://organicaroma.rechnor.in/single-product.php?product=PAIN%20OIL">
                                  <img src="assets/oil/best-pain-relief-oil.png" alt="Image-HasTech">
                                  <img class="second-image" src="assets/oil/best-pain-relief-oil.png" alt="Image-HasTech">
                                </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        <li class="discount visually-hidden">-5%</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4><a href="https://organicaroma.rechnor.in/single-product.php?product=PAIN%20OIL">PAIN OIL                                                                                                                                                                                                 </a></h4>
                                                                    <h5 class="title"> 100% Natural Pain Relief Massage Oil For Body</h5>
                                                                        <div class="star-content">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span class="price-old visually-hidden">&#8377;     300</span>
                                                                            <span class="price text-black">&#8377;     300</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-24"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area">
                <div class="container pt-5 pb-45">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="section-title text-center">
                                <h2 class="title">New Arrivals</h2>
                                <div class="desc">
                                    <p>Nature's best for your skin in our new arrivals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="thumb thumb-scale-hover-style">
                                <a href="single-product.html"><img src="assets/best-beauty-poducts-for-skin.jpg" alt="Image-HasTech" class="hover-img"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--== Start Shop Item ==-->
                            <div class="product-col2-slider owl-carousel owl-theme">
                                <div class="item">
                                    <!--== Start Shop Item ==-->
                                    <div class="product-item mb-30">
                                        <div class="inner-content">
                                            <div class="product-thumb">
                                                <a href="https://organicaroma.rechnor.in/single-product.php?product=NIGHT%20CREAM">
                        <img src="assets/cream/best-night-cream-for-face.png" alt="Image-HasTech">
                        <img class="second-image" src="assets/cream/best-night-cream-for-face.png" alt="Image-HasTech">
                      </a>
                                                <div class="product-action">
                                                    <div class="addto-wrap">
                                                        <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                            <i class="icon-heart icon"></i>
                          </a>
                                                        <a class="add-compare" href="compare.html" title="Add to compare">
                            <i class="icon-shuffle icon"></i>
                          </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                    <li class="discount">-10%</li>
                                                </ul>
                                            </div>
                                            <div class="product-desc">
                                                <div class="product-info">
                                                    <h4 class="title"><a href="https://organicaroma.rechnor.in/single-product.php?product=NIGHT%20CREAM">NIGHT CREAM                                                                                                                                                                                                           </a></h4>
                                                    <p>  Wrinkle-reducing and fine-lines-reducing night cream</p>
                                                    <div class="star-content">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price-old">&#8377;     450</span>
                                                        <span class="price">&#8377;     500</span>
                                                    </div>
                                                </div>
                                                <div class="product-footer">
                                                   
                                                    <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-18"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Shop Item ==-->

                                    <!--== Start Shop Item ==-->
                                    <div class="product-item mb-30">
                                        <div class="inner-content">
                                            <div class="product-thumb">
                                                <a href="https://organicaroma.rechnor.in/single-product.php?product=FACIAL%20OIL">
                        <img src="images/Face_oil.webp" alt="Image-HasTech">
                        <img class="second-image" src="images/Face_oil.webp" alt="Image-HasTech">
                      </a>
                                                <div class="product-action">
                                                    <div class="addto-wrap">
                                                        <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                            <i class="icon-heart icon"></i>
                          </a>
                                                        <a class="add-compare" href="compare.html" title="Add to compare">
                            <i class="icon-shuffle icon"></i>
                          </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                    <li class="discount visually-hidden">-10%</li>
                                                </ul>
                                            </div>
                                            <div class="product-desc">
                                                <div class="product-info">
                                                    <h4 class="title"><a href="https://organicaroma.rechnor.in/single-product.php?product=FACIAL%20OIL">FACIAL OIL                                                                                                                                                                                              </a></h4>
                                                    <p>     Natural Facial Oil with a glow-boosting effect</p>
                                                    <div class="star-content">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price-old visually-hidden">&#8377;     450</span>
                                                        <span class="price text-black">&#8377;     550</span>
                                                    </div>
                                                </div>
                                                <div class="product-footer">
                                                   
                                                    <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-21"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Shop Item ==-->
                                </div>
                                <div class="item">
                                    <!--== Start Shop Item ==-->
                                    <div class="product-item mb-30">
                                        <div class="inner-content">
                                            <div class="product-thumb">
                                                <a href="https://organicaroma.rechnor.in/single-product.php?product=SHAHI%20UBTAN%20-Face%20Pack">
                        <img src="assets/face-pack/best-sahi-ubtan.png" alt="Image-HasTech">
                        <img class="second-image" src="assets/face-pack/best-sahi-ubtan.png" alt="Image-HasTech">
                      </a>
                                                <div class="product-action">
                                                    <div class="addto-wrap">
                                                        <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                            <i class="icon-heart icon"></i>
                          </a>
                                                        <a class="add-compare" href="compare.html" title="Add to compare">
                            <i class="icon-shuffle icon"></i>
                          </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                    <li class="discount">-5%</li>
                                                </ul>
                                            </div>
                                            <div class="product-desc">
                                                <div class="product-info">
                                                    <h4 class="title"><a href="https://organicaroma.rechnor.in/single-product.php?product=SHAHI%20UBTAN%20-Face%20Pack">SHAHI UBTAN                                                                                                                                                                                   </a></h4>
                                                    <p> Organic Ubtan Made With Natural Oils Of Nuts                                                              </p>
                                                    <div class="star-content">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price-old">&#8377;     300</span>
                                                        <span class="price">&#8377;     250</span>
                                                    </div>
                                                </div>
                                                <div class="product-footer">
                                                   
                                                    <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-3"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Shop Item ==-->

                                    <!--== Start Shop Item ==-->
                                    <div class="product-item mb-30">
                                        <div class="inner-content">
                                            <div class="product-thumb">
                                                <a href="https://organicaroma.rechnor.in/single-product.php?product=GULAB%20JAL">
                        <img src="assets/other-product/best-gulab-jal-rose-water.png" alt="Image-HasTech">
                        <img class="second-image" src="assets/other-product/best-gulab-jal-rose-water.png" alt="Image-HasTech">
                      </a>
                                                <div class="product-action">
                                                    <div class="addto-wrap">
                                                        <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                            <i class="icon-heart icon"></i>
                          </a>
                                                        <a class="add-compare" href="compare.html" title="Add to compare">
                            <i class="icon-shuffle icon"></i>
                          </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                    <li class="discount visually-hidden">-5%</li>
                                                </ul>
                                            </div>
                                            <div class="product-desc">
                                                <div class="product-info">
                                                    <h4 class="title"><a href="https://organicaroma.rechnor.in/single-product.php?product=GULAB%20JAL">Gulab Jal
</a></h4><p>100% Natural Gulab Jal For Smooth Skin </p>
                                                    <div class="star-content">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price-old visually-hidden">&#8377;     300</span>
                                                        <span class="price text-black">&#8377;     300</span>
                                                    </div>
                                                </div>
                                                <div class="product-footer">
                                                   
                                                    <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-13"> 
                                                                    <a class="" href="#;" title="Quick view">Quick view</a>
            </div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Shop Item ==-->
                                </div>
                                </div>
                            <!--== End Shop Item ==-->
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Divider Area Wrapper ==-->
            <section class="divider-area divider-product-discount-area bg-img" data-bg-img="assets/best-herbal-natural-cream-skin.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="divider-style2-wrap">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="divider-content">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Divider Area Wrapper ==-->

            <!--== Start Testimonial Area Wrapper ==-->
            <section class="testimonial-area">
                <div class="container pt-95 pb-95 pt-lg-70 pb-lg-70">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="section-title text-center">
                                <h2 class="title">Client Testimonials</h2>
                                <div class="desc">
                                    <h2>The products we offer are highly rated by our happy customers</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonials-slider testi-first-active owl-carousel owl-theme">
                                <div class="item">
                                    <!--== Start Testimonial Item ==-->
                                    <div class="testimonial-item testi-height-style matchHeight">
                                        <div class="testi-inner-content">
                                            <div class="testi-author">
                                                <div class="testi-thumb">
                                                    <img src="assets/img/testimonial/chhaya.png" alt="chhaya.png" class="img" style="border-radius:50px;">
                                                </div>
                                                <div class="testi-info">
                                                    <span class="name">Chhaya Sharma</span>
                                                    
                                                </div>
                                            </div>
                                            <div class="testi-content">
                                                <p>An organic product from Soul Garden was recommended to me by a friend for my dry skin. The lotion I ordered helped nourish my skin because it contained vitamin E. It relieved my dry skin without making me feel sticky or greasy. </p>
                                                <div class="testi-info">
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Testimonial Item ==-->
                                </div>
                                <div class="item">
                                    <!--== Start Testimonial Item ==-->
                                    <div class="testimonial-item testi-height-style matchHeight">
                                        <div class="testi-inner-content">
                                            <div class="testi-author">
                                                <div class="testi-thumb">
                                                    <img src="assets/img/testimonial/nidhi.png" alt="Image-HasTech" class="img" style="border-radius:50px;">
                                                </div>
                                                <div class="testi-info">
                                                    <span class="name">Nidhi Sharma</span>
                                                   
                                                </div>
                                            </div>
                                            <div class="testi-content">
                                                <p>Herbal Hair Oil works exceptionally well. As a result, the hair becomes thicker and stronger. Furthermore, it provides relief from headaches, mental stress, physical stress, fatigue, and insomnia. I'll definitely order more Soul Garden products in the future.</p>
                                                <div class="testi-info">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Testimonial Item ==-->
                                </div>
                                <div class="item">
                                    <!--== Start Testimonial Item ==-->
                                   
                                    <!--== End Testimonial Item ==-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Testimonial Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section>
                <div class="container pt-0 pb-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="thumb thumb-scale-hover-style">
                                <a href="single-product.html"><img src="assets/best-organic-raw-honey.jpg" alt="Image-HasTech" class="hover-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Blog Area Wrapper ==-->
            
            <!--== End Blog Area Wrapper ==-->

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
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <p>7694866000,9425519800</p>
                                        </div>
                                    </div>
                                    <div class="col-border col-12 col-md-4 col-sm-6 mt-xs-35">
                                        <div class="info-item">
                                            <div class="icon-box">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <p> Soulgarden2012@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="col-border col-12 col-md-4 col-sm-12 mt-sm-35">
                                        <div class="info-item">
                                            <div class="icon-box">
                                                <i class="fa fa-whatsapp"></i>
                                            </div>
                                            <p> Whatsapp 24/7 </p>
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
                                                    <a href="#/"><i class="fa fa-facebook"></i></a>
                                                    <a href="#/"><i class="fa fa-twitter"></i></a>
                                                    <a href="#/"><i class="fa fa-youtube"></i></a>
                                                    <a href="#/"><i class="fa fa-instagram"></i></a>
                                                </div>
                                                <p class="mb-sm-25">Follow us on your favorite platforms. We'd love to hear your feedback on our new launches..</p>
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
                                                <li><a href="index.php">Home</a></li>
                                               
                                                <li><a href="about.php">About us</a></li>
                                                
                                                <li><a href="contact.php">Contact us</a></li>
                                               
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
                            <p class="copyright">Copyright ©  2021 All Rights Reserved | Made with <i class="fa fa-heart-o"></i> by <a target="_blank" href="https://rechnor.in/">Rechnor India.</a></p>
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
        <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

        <!--== Start Side Menu ==-->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <div class="off-canvas-overlay"></div>
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="close-action">
                            <button class="btn-menu-close">menu<i class="fa fa-arrow-left"></i></button>
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
         
<div class="menu-preview">   <!--products-preview-->

<div class="preview" data-target="p-1">
    <i class="fa-solid fa-xmark"></i>
   <img height="300px" src="images/orange_aura.webp" alt="">
   <h3>ORANGE AURA </h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
   </div>
   <p>
Face Pack For Daily Exfoliator For Smooth, Natural-looking Skin
An aromatic blend of sun-dried orange peel powder, handpicked nuts, along with processed grains and lentils.
It is a gentle daily exfoliator for a smooth and natural glow. The ingredients found within these products are sourced from Indian jungles, making them highly effective at deeply cleansing the skin without stripping it of its natural oils. Not only that but there's more. Your natural glow will also be enhanced with this face pack, which removes tan and gets rid of tan.</p>

</div>

<div class="preview" data-target="p-2">
    <i class="fa-solid fa-xmark"></i>
   <img  height="300px"src="assets/face-pack/best-d-tan-pack.png" alt="">
   <h3>D-TAN Pack</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      
   </div>
   <p>The One-Stop Solution For Tanning & Whitening
Infused with rose and camphor, which reduce pigmentation, encourage collagen production, clear acne marks, remove dark spots, remove tanning, and cleanse and whiten the skin. </p>

</div>

<div class="preview" data-target="p-3">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px" src="images/shahi_ubtan.webp" alt="">
    <h3>Sahi Ubtan</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <p>   Organic Ubtan Made With Natural Oils Of Nuts 
A combination of cardamom saffron handpicked nuts, and rose petals have the effective property of removing dead cells and improving the skin texture. The natural oils of nuts moisturize the skin and give it a natural glow to it. 
Women with dark skin and those who live outdoors are highly recommended. To achieve brighter, fairer, and even-toned skin, our cream contains no harmful chemicals and is safe to use daily.</p>
   
</div>  

<div class="preview" data-target="p-4">
    <i class="fa-solid fa-xmark"></i>
    <img  height="300px" src="assets/face-pack/best-mud-pack-for-face.png" alt="">
    <h3>Mud Pack</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>   An energizing body bath that contains minerals 
A soothing mixture of mud extracted below the pnd, enriched with minerals mixed with camphor.
The cooling property of mineral-enriched soil rejuvenates and relaxes the skin. Also used for body baths during summer to beat the heat.</p>
   
</div> 

<div class="preview" data-target="p-5">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px"  src="images/ANTI-AGEING-PACK.webp" alt="">
    <h3>Anti Ageing Face Pack</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>Anti-ageing face pack enriched with almonds and coffee. 
A blend of coffee and sweet almonds deeply moisturizes the skin. The anti-aging properties of ingredients increase skin elasticity and smooth fine lines.</p>
   
</div> 

<div class="preview" data-target="p-6">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px" src="assets/face-pack/best-ayurvedic-face-pack.png" alt="">
    <h3>AYURVEDIC PACK   </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>Skin-refreshing and skin-refining Deep Cleansing Face Pack 
It has a soothing effect on your pimples due to its ancient combination of purified and sun-dried herbs. With regular use, it provides deep cleansing for the skin and a natural glow. </p>
 <div class="price">$2.00</div>
 <a href="#" class="buy">order now</a>
</div> 
    <div class="preview" data-target="p-7">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px" src="image/coffe-6.jpg" alt="">
    <h3>SPA Cream  </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p> 100% Organic Deep Nourishing Hair Spa Cream 
This cream is a blend of cold-pressed castor oil, olive oil, and jasmine essential oil. You will experience a relaxing effect with this cream, and your hair will be soft, smooth, and frizz-free.</p>
   
</div> 
<div class="preview" data-target="p-8">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px"  src="image/coffe-6.jpg" alt="">
    <h3>DRY SHAMPOO  </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p> Herbal dry sha
Packed with sun-dried and powdered soothing herbs like Reetha, Amla, Shikakai, and Bhrigraj, it Controls dandruff and gives nourishment to control hair breakage and thinning. Also gives a luster after use.</p>
   
</div> <div class="preview" data-target="p-9">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px" src="image/coffe-6.jpg" alt="">
    <h3>MEHNDI PACK  </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>  An organic henna powder infused with herbs
Soak the Henna Powder in an iron skillet in Tea Water or Coffee Water overnight. (Adding coffee makes the red color of the henna more visible.)
On the next day, apply the paste on clean, product-free hair for 2 hours, depending on the preferred intensity
Rinse well with water, repeating as many times as you intuitively need. Do not use shampoo.
Wash your hair with a cleansing shampoo the next day. You can choose our shampoos with our Ayurvedic ingredients like Hibiscus for hair. </p>
   
</div> <div class="preview" data-target="p-10">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px"  src="image/coffe-6.jpg" alt="">
    <h3>Natural Hair Dye  </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>100% Natural Dark Brown Hair Color  
A proportion of Indigo powder and herbs designed to give your hair a natural dark brown color and luster. It also has a property to make your hair soft and silky after use. 
</p>
   
</div> 
<div class="preview" data-target="p-12">
    <i class="fa-solid fa-xmark"></i>
    <img  height="300px" src="assets/other-product/best-sea-salt.png" alt="">
    <h3>Relaxing Sea Salt For Stress Relief Bath
</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>Skin-refreshing and skin-refining Deep Cleansing Face Pack 
It has a soothing effect on your pimples due to its ancient combination of purified and sun-dried herbs. With regular use, it provides deep cleansing for the skin and a natural glow. </p>
        
</div> 
<div class="preview" data-target="p-13">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px" src="assets/other-product/best-raw-honey-organic-honey.png" alt="">
    <h3>Honey </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>100% Organic Honey For Smooth Skin 
Extracted from honeycombs, which are found in jungles. It is pure and 100 % natural. In addition to being able to consume, it can also be used on the skin</p>
   
</div> 
<div class="preview" data-target="p-14">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px" src="assets/other-product/best-face-exfloriator.png" alt="">
    <h3>LEMON EXFOLIATOR    </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>Lemon Exfoliator For Oily & Acne Prone Skin 
It is made from sun-dried lemon peel powder combined with selected grains. This product is designed to treat sensitive skin, acne, acne-prone skin, and oily skin. Afterward, your skin feels smooth, soft, and simple. </p>
   
</div> 
<div class="preview" data-target="p-15">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px" src="assets/other-product/best-face-exfloriator.png" alt="">
    <h3>ORANGE EXFOLIATOR   </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>Orange Exfoliator Suitable For Dry Skin
It creates a soft, clear complexion by combining sun-dried orange peel and organic almond oil. You will notice that your skin is hydrated after using it. Additionally, it is suitable for dry skin </p>
    
</div> 
<div class="preview" data-target="p-16">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px" src="assets/other-product/best-gulab-jal-rose-water.png" alt="">
    <h3>GULAB JAL</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>
Natural Gulab Jal With Picked Desi Gulab 
Made with hand-picked Desi Gulab, distilled in earthen pots, following the ancient technique of preparing Gulab Jal. 
It gives an instant cooling effect when sprayed on the skin. Also cures Acidity when consumed with chilled water. </p>
    
</div> 
<div class="preview" data-target="p-17">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px"  src="image/coffe-6.jpg" alt="">
    <h3>MORINGA HAIR BUTTER  </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p> Moringa Hair Butter For Soft And Shiny Hairs 
A combination of African shea butter, cocoa butter moringa leaves, and cold-pressed oils, processes together to form butter. It controls fizzy hair and gives your hair a smoothening look.</p>
  
</div>
 <div class="preview" data-target="p-18">
    <i class="fa-solid fa-xmark"></i>
    <img  height="300px" src="assets/cream/best-night-cream-for-face.png" alt="">
    <h3>NIGHT CREAM </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p> Wrinkle-reducing and fine-lines-reducing night cream
A blend of sweet almond oil, moti bhasma, and pure cow ghee creates a powerful night cream that helps to rejuvenate the skin and promote new cell growth. In addition to maintaining skin hydration, it improves uneven skin tone. It also gives your skin a glowing appearance.
</p>
</div>
<div class="preview" data-target="p-19">
    <i class="fa-solid fa-xmark"></i>
    <img  height="300px" src="image/coffe-6.jpg" alt="">
    <h3>HANDCRAFTED SKIN BUTTER  </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>Handcrafted Skin Butter Body Moisturizer For Smooth Skin.
This butter is prepared using an ancient ayurvedic technique called Shanta Dhauta Grita, which means washing pure cow ghee 100 times, adding saffron and sandalwood extract, and is considered to be the best moisturizer for your skin.</p>
    
</div>  
<div class="preview" data-target="p-20">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px"  src="assets/cream/best-under-eye-cream.png" alt="">
    <h3>UNDER EYE CREAM </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p> Herbal Under Eye Cream For Drak Circle 
There are ancient treatments for healing the under-eye area that uses potato starch and cold-pressed sweet almond oil. Vitamin E repairs damaged skin and starch brightens dark circles. </p>
   
</div> 
<div class="preview" data-target="p-21">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px"  src="images/Face_oil.webp" alt="">
    <h3>FACIAL OIL </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p> Natural Facial Oil with a glow-boosting effect
It reduces fine lines, pigmentation, and wrinkles by combining cold-pressed almond oil, sesame oil, and castor oil with rose, chamomile, and marigold flowers, as well as herbs such as saffron, turmeric, and cardamom. It moisturizes, hydrates, and gives an inner glow to your skin throughout the body. Face Oil nourishes your skin to boost its brightness. By adding it to your daily skincare routine, you will achieve a healthy glow.</p>
    
   
</div> 
<div class="preview" data-target="p-22">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px" src="images/hair_oil.webp" alt="">
    <h3>Hair Oil  </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p> Anti-Hair Fall Ayurvedic Oil For Weak Hairs
Face Oil nourishes your skin to boost its brightness. By adding it to your daily skincare routine, you will achieve a healthy glow. </p>
   
</div> 
<div class="preview" data-target="p-23">
    <i class="fa-solid fa-xmark"></i>
    <img height="300px"  src="images/oil_pulling_oil.webp" alt="">
    <h3>OIL PULLING OIL</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p>Organic Ayurvedic Oil Pulling Mouth wash 
A mix of virgin coconut oil, clove oil, orange oil, and lemon extracts has an effective impact on the mouth. It cleans your mouth and eliminates the bad bacteria from the mouth.</p>
    
</div> 
<div class="preview" data-target="p-24">
    <i class="fa-solid fa-xmark"></i>
    <img  height="300px" src="assets/oil/best-pain-relief-oil.png" alt="">
    <h3>PAIN OIL</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        
    </div>
    <p> 100% Natural Pain Relief Massage Oil For Body
An ayurvedic combination of cold-pressed castor oil, Black sesame oil, carrom seeds, fenugreek seeds, turmeric, and cinnamon. The ingredients' heating properties of ingredients relax the muscles and provide effective long-term pain.
</p>
    <div class="price">$2.00</div>
    
</div> 
<script src="script.js"></script>

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
    <?php include 'includes/scripts.php'; ?>
</body>

</html>