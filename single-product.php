<?php include 'includes/session.php'; ?>
<?php
	$conn = $pdo->open();

	$slug = $_GET['product'];

	try{
		 		
	    $stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, products.id AS prodid FROM products LEFT JOIN category ON category.id=products.category_id WHERE slug = :slug");
	    $stmt->execute(['slug' => $slug]);
	    $product = $stmt->fetch();
		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//page view
	$now = date('Y-m-d');
	if($product['date_view'] == $now){
		$stmt = $conn->prepare("UPDATE products SET counter=counter+1 WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid']]);
	}
	else{
		$stmt = $conn->prepare("UPDATE products SET counter=1, date_view=:now WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid'], 'now'=>$now]);
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1 " />

    <title>Argima - Cosmetics & Beauty eCommerce Bootstrap 5 Template</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.3.2/css/simple-line-icons.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">   
    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

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
    @media (min-width: 992px){ 
      body{ 
        overflow-x: hidden; 
        
      }
    img{ 
        max-width: 100%;
      } 
    }
    @media only screen and (max-width: 480px) {
  row {
    max-width: 50% !important ; 
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
                EUR €
                <i class="ion-ios-arrow-down"></i> 
              </a>
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="#/">EUR €</a>
                                    </li>
                                    <li>
                                        <a href="#/">USD $</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="theme-language">
                                <a class="dropdown-btn" href="#" role="button">
                <img src="assets/img/photos/language-01.jpg" alt="Has-Image">English
                <i class="ion-ios-arrow-down"></i> 
              </a>
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="#/"><img src="assets/img/photos/language-01.jpg" alt="Has-Image">English</a>
                                    </li>
                                    <li>
                                        <a href="#/"><img src="assets/img/photos/language-02.jpg" alt="Has-Image">Italiano</a>
                                    </li>
                                </ul>
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
                                    <button class="btn-search">
                  <span class="icon icon-search icon-magnifier"></span>
                </button>
                                    <div class="btn-search-content">
                                        <form action="#" method="post">
                                            <div class="form-input-item">
                                                <input type="text" placeholder="Enter your search key ...">
                                                <button type="submit" class="btn-src">
                        <i class="icon-magnifier"></i>
                      </button>
                                                <div class="search-categorie">
                                                    <select class="form-select" name="poscats">
                          <option selected>All categories</option>
                          <option value="1">Beauty &amp; Health</option>
                          <option value="2">- - Makeup</option>
                          <option value="3">- - - - Eyes</option>
                          <option value="4">- - - - Lips</option>
                          <option value="5">- - - - Face</option>
                          <option value="6">- - - - Makeup Tools</option>
                          <option value="7"> - - Skin Care</option>
                          <option value="8">- - - - Face</option>
                          <option value="9">- - - - Eyes</option>
                          <option value="10">- - - - Body</option>
                          <option value="11">- - - - Skin Care Tools</option>
                          <option value="12">- - Health Care</option>
                          <option value="13">- - - - Massage &amp; Relaxation</option>
                          <option value="14">- - - - Household Health Monitors</option>
                          <option value="15">- - - - Chinese Medicine</option>
                          <option value="16">- - - - Personal Health Care Items</option>
                          <option value="17">- - Nail Art &amp; Tools</option>
                          <option value="18">- - - - Gel Nail Polish</option>
                          <option value="19">- - - - Nail Drills</option>
                          <option value="20">- - - - Nail Dryers</option>
                          <option value="21">- - - - Nail Glitter</option>
                        </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="shop-button-group">
                                    
                                    
                                    <div class="shop-button-item">
                                    <?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo '
               
                 <a class="dropdown-btn" href="#" role="button">
                    <img src="'.$image.'" class="user-image" alt="User Image" style="border-radius:90%; width: 35px;">
                    <span class="hidden-xs">'.$user['firstname'].' '.$user['lastname'].'</span>
                  </a>
                 
                    <ul class="submenu-nav"><!-- User image -->
                 
                      

                      <p>
                        '.$user['firstname'].' '.$user['lastname'].'
                        <small>Member since '.date('M. Y', strtotime($user['created_on'])).'</small>
                      </p>
                    </li>
                    <li >
                      <div class="pull-left">
                        <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                      </div>
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
              <li class="footer"><a href="cart_view.php">Go to Cart</a></li>
            </ul>
                                                       </li>
                                            </ul>
                                            
                                            <div class="checkout">
                                                <a href="checkout.html" class="btn-Checkout">Checkout</a>
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
                                        <li><a href="about-us.html">About Us</a></li>
                                        
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
             <!--== End Header Bottom ==-->
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
            <!--== Start Page Header Area Wrapper ==-->
            <div class="page-header-area bg-img" data-bg-img="assets/photo/bg-02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="page-header-content">
                                <nav class="breadcrumb-area">
                                    <ul class="breadcrumb">
                                        <li><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
                                        <li>Shop</li>
                                        <li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
                                        <li>Product Single</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start Product Single Area Wrapper ==-->
            <section class="product-area product-single-area">
                <div class="container pt-60 pb-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-single-item" data-margin-bottom="62">
                                <div class="row">
                              
                                    <div class="col-md-6">
                                        <!--== Start Product Thumbnail Area ==-->
                                        <div class="product-thumb">
                                            <div class="swiper-container single-product-thumb-content single-product-thumb-slider2">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide zoom zoom-hover">
                                                        <a class="lightbox-image" data-fancybox="gallery" href="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>">
                                                        <img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" width="100%"  >
                            <span class="product-flag-new">New</span>
                          </a>
                                                    </div>
                                                    <div class="swiper-slide zoom zoom-hover">
                                                        <a class="lightbox-image" data-fancybox="gallery" href="<?php echo (!empty($product['photo1'])) ? 'images/'.$product['photo1'] : 'images/noimage.jpg'; ?>">
                            <img src="<?php echo (!empty($product['photo1'])) ? 'images/'.$product['photo1'] : 'images/noimage.jpg'; ?>" alt="Image-HasTech">
                            <span class="product-flag-new">New</span>
                          </a>
                                                    </div>
                                                    <div class="swiper-slide zoom zoom-hover">
                                                        <a class="lightbox-image" data-fancybox="gallery" href="<?php echo (!empty($product['photo2'])) ? 'images/'.$product['photo2'] : 'images/noimage.jpg'; ?>">
                            <img src="<?php echo (!empty($product['photo2'])) ? 'images/'.$product['photo2'] : 'images/noimage.jpg'; ?>" alt="Image-HasTech">
                            <span class="product-flag-new">New</span>
                          </a>
                                                    </div>
                                                    <div class="swiper-slide zoom zoom-hover">
                                                        <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/08.jpg">
                            <img src="assets/img/shop/product-single/08.jpg" alt="Image-HasTech">
                            <span class="product-flag-new">New</span>
                          </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-container single-product-nav-content single-product-nav-slider2">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" alt="Image-HasTech">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?php echo (!empty($product['photo1'])) ? 'images/'.$product['photo1'] : 'images/noimage.jpg'; ?>" alt="Image-HasTech">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?php echo (!empty($product['photo2'])) ? 'images/'.$product['photo2'] : 'images/noimage.jpg'; ?>" alt="Image-HasTech">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" alt="Image-HasTech">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Product Thumbnail Area ==-->
                                    </div>
                                    <div class="col-md-6">
                                        <!--== Start Product Info Area ==-->
                                        <div class="product-single-info mt-sm-70">
                                            <h1 class="title"><?php echo $product['prodname']; ?></h1>
                                            <div class="product-info">
                                                <div class="star-content">
                                                  
                                                </div>
                                                <ul class="comments-advices">
                                                    <li><a href="#/" class="reviews"><i class="fa fa-commenting-o"></i>Read reviews (1)</a></li>
                                                    <li><a href="#/" class="comment"><i class="fa fa-pencil-square-o"></i>Write a review</a></li>
                                                </ul>
                                            </div>
                                            <div class="prices">
                                                <span class="price"><b>&#8377; <?php echo number_format($product['price'], 2); ?></b></span>
                                                <div class="tax-label">Tax included</div>
                                            </div>
                                            <div class="product-description" style="line-height: 1.3;text-align: left; width: 100px;
    text-overflow: ellipsis; display: inline-block;white-space:pre; font-size: 25px;">
                                               
                                                <h3><b>Description:</b></h3>
							<?php echo $product['description']; ?>
                                                
                                            </div>
                                            <div class="product-quick-action">
                                                <div class="product-quick-qty">
                                                    <div class="">
                                                    <form class="form-inline" id="productForm">
                                                    <input type="number" name="quantity" id="quantity" class="form-control input-lg" value="1">
                                                  
							                
                                                        <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
                                                    </div>
                                                </div>
                                                <button  type="submit"class="btn-product-add" >Add to cart</button></form>
                                            </div>
                                            <div>
	        			
	        			<span class="message"></span>
	        		</div>
                                            <div class="product-wishlist-compare">
                                                <a href="wishlist.html" class="btn-wishlist"><i class="icon-heart"></i>Add to wishlist</a>
                                                <a href="compare.html" class="btn-compare"><i class="icon-shuffle"></i>Add to compare</a>
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
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-review-tabs-content">
                                <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                                    <li role="presentation">
                                        <a class="active" id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="true">Product Details</a>
                                    </li>
                                    <li role="presentation">
                                        <a id="product-details-tab" data-bs-toggle="pill" href="#product-details" role="tab" aria-controls="product-details" aria-selected="false">How to use</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content product-tab-content" id="ReviewTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        <div class="product-description" >
                                           

                                        <?php echo $product['detail']; ?> 
                                               
                                          
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product-details" role="tabpanel" aria-labelledby="product-details-tab">
                                        <div class="product-details">
                                        <p><?php echo $product['howtouse']; ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
    	
    	<div class="card">
    		
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-6 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fa fa-star star-light mr-1 main_star"></i>
                            <i class="fa fa-star star-light mr-1 main_star"></i>
                            <i class="fa fa-star star-light mr-1 main_star"></i>
                            <i class="fa fa-star star-light mr-1 main_star"></i>
                            <i class="fa fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fa fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fa fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fa fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fa fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fa fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
                    
                </div>
            </section>
            <!--== End Product Single Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
          
            <!--== End Product Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area">
                <div class="container pt-0">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="section-title text-center">
                                <h2 class="title">Other Products</h2>
                                <div class="desc">
                                    <p>12 other products in the same category:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-slider owl-carousel owl-theme">
                            <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="single-product.html">
                                  <img src="assets/face-pack/best-face-pack.png" alt="Image-HasTech">
                                  <img class="second-image" src="assets/face-pack/best-face-pack.png" alt="Image-HasTech">
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
                                                                            <span class="price-old">&#8377; 450</span>
                                                                            <span class="price">&#8377; 500</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                      
                                                                   
                                                                    
                                                                    
        
        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-1"> 
                                                                    
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
                                                                            <span class="price-old visually-hidden">&#8377; 300</span>
                                                                            <span class="price text-black">&#8377; 300</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-5"> 
                                                                    
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
                                  <img src="assets/img/shop/02.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="assets/img/shop/02-h1.jpg" alt="Image-HasTech">
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
                                                                            <span class="price-old visually-hidden">&#8377; 450</span>
                                                                            <span class="price text-black">&#8377; 550</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-8"> 
                                                                    
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
                                  <img src="assets/img/shop/04.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="assets/img/shop/04-h1.jpg" alt="Image-HasTech">
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
                                                                            <span class="price-old visually-hidden">&#8377; 300</span>
                                                                            <span class="price text-black">&#8377; 300</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 

            <div class="menu" data-name="p-10"> 
                                                                    
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
                                                                            <span class="price-old">&#8377; 450</span>
                                                                            <span class="price">&#8377; 500</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                       
                                                                        <div class="menu-container">      <!--products-container--> 
                                                                        <div class="menu" data-name="p-12"> 
                                                                    
            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                    
                                             
                                                        <!--== End Shop Item ==-->
                                      
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

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
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="col-border col-12 col-md-4 col-sm-6 mt-xs-35">
                                        <div class="info-item">
                                            <div class="icon-box">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <p>demo@example.com</p>
                                        </div>
                                    </div>
                                    <div class="col-border col-12 col-md-4 col-sm-12 mt-sm-35">
                                        <div class="info-item">
                                            <div class="icon-box">
                                                <i class="fa fa-whatsapp"></i>
                                            </div>
                                            <p>Whatsapp 24/7</p>
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
                                                    <a href="index.html">
                          <img class="logo-light" src="assets/img/logo-light.png" alt="Logo" />
                        </a>
                                                </div>
                                                <p>Location: 4710-4890 Breckỉnidge St, Fayettevill USA</p>
                                            </div>
                                            <div class="widget-desc">
                                                <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="widget-item">
                                        <div class="widget-menu-wrap">
                                            <ul class="nav-menu">
                                                <li><a href="#/">Delivery</a></li>
                                                <li><a href="#/">Legal Notice</a></li>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="#/">Secure payment</a></li>
                                                <li><a href="contact.html">Contact us</a></li>
                                                <li><a href="#/">Sitemap</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="my-account.html">My account</a></li>
                                                <li><a href="shop.html">Stores</a></li>
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
                            <p class="copyright">Copyright © 2022 All Rights Reserved | Made with <i class="fa fa-heart-o"></i> by <a target="_blank" href="https://rechnor.in/">Rechnor India.</a></p>
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
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star icon-color-gray"></i>
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
                                        <input type="text" id="quantity2" title="Quantity" value="1">
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
                                    <a href="#/"><i class="fa fa-facebook"></i></a>
                                    <a href="#/"><i class="fa fa-twitter"></i></a>
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
<?php include('includes/scripts.php');?>
</body>

</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fa fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fa fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fa fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fa fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fa fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
				<input type="hidden" value="<?php echo $product['prodid']; ?>" class="form-control" id="product_id" name="product_id">
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){
	
	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();
 var product_id =  $('#product_id').val();
        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review,product_id:product_id},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        var id = "<?php echo $product['prodid']; ?>"
        console.log("id",id);
       
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data',id:id},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                                     html += '<div class="col-sm-11">';

                        html += '<div class="">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fa fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;
                        html += '<div class=" text-right">On '+data.review_data[count].datetime+'</div>';


                        html += '<hr></div>';

                       
                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>