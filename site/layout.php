<!doctype html>
<html class="no-js" lang="en">

<head>
<base href="http://localhost/PHP2/Lab7/site/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Subash</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="view/img/icon/favicon.png">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="view/lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="view/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="view/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="view/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="view/css/responsive.css">
    <!-- Template color css -->
    <link href="view/css/color/color-core.css" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="view/css/custom.css">

    <!-- Modernizr JS -->
    <script src="view/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- START HEADER AREA -->
        <header class="header-area header-wrapper">
            <!-- header-top-bar -->
            <div class="header-top-bar plr-185">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <div class="call-us">
                                <p class="mb-0 roboto">(+84) 377735506</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="top-link clearfix">
                                <ul class="link f-right">
                                <?php if(isset($_SESSION["user"])){ ?>
                                    <li>
                                        <a href="my-account.html">
                                            <i class="zmdi zmdi-account"></i>
                                            <?= $_SESSION["user"]?>
                                        </a>
                                    </li>
                                    <?php } else{ ?>
                                        <li>
                                        <a href="my-account.html">
                                        <i class="zmdi zmdi-account"></i>
                                            My account
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <li>
                                        <a href="wishlist.html">
                                            <i class="zmdi zmdi-favorite"></i>
                                            Wish List (0)
                                        </a>
                                    </li>
                                    
                                    <?php if(isset($_SESSION["user"])){ ?>
                                    <li>
                                        <a href="dang-xuat">
                                            <i class="zmdi zmdi-lock"></i>
                                            Logout
                                        </a>
                                    </li>
                                    <?php } else{ ?>
                                        <li>
                                        <a href="dang-nhap">
                                            <i class="zmdi zmdi-lock"></i>
                                            Login
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-middle-area -->
            <div class="header-middle-area plr-185">
                <div class="container-fluid">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <!-- logo -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="logo">
                                    <a href="trang-chu">
                                        <img src="view/img/logo/logo.png" alt="main logo">
                                    </a>
                                </div>
                            </div>
                            <!-- primary-menu -->
                            <div class="col-md-8 hidden-sm hidden-xs">
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li><a href="trang-chu">Trang chủ</a>
                                            <ul class="dropdwn">
                                                
                                                <li>
                                                    <a href="index.php?act=list&id=18">Nhà sản xuất</a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">Home Version 2</a>
                                                </li>
                                                <li>
                                                    <a href="index-3.html">Home Version 3</a>
                                                </li>
                                                <li>
                                                    <a href="index-4.html">Home 4 Animated Text</a>
                                                </li>
                                                <li>
                                                    <a href="index-5.html">Home 5 Animated Text Ovlerlay</a>
                                                </li>
                                                <li>
                                                    <a href="index-6.html">Home 6 Background Video</a>
                                                </li>
                                                <li>
                                                    <a href="index-7.html">Home 7 BG-Video Ovlerlay</a>
                                                </li>
                                                <li>
                                                    <a href="index-8.html">Home 8 Boxed</a>
                                                </li>
                                                <li>
                                                    <a href="index-9.html">Home 9 Gradient</a>
                                                </li>
                                                <li>
                                                    <a href="index-10.html">Home 10 Boxed-2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-parent"><a href="#">thuộc tính</a>
                                            <div class="mega-menu-area clearfix">
                                                <div class="mega-menu-link mega-menu-link-4  f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 1</li>
                                                        <li>
                                                            <a href="elements-header-1-sticky.html">header-1-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-header-1-no-sticky.html">header-1-no-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-header-2-sticky.html">header-2-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-header-2-no-sticky.html">header-2-no-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-footer-1.html">footer-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-footer-2.html">footer-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-footer-3.html">footer-3</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-contact-form.html">Dynamic Contact Form</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-map.html">Google Map</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 2</li>
                                                        <li>
                                                            <a href="elements-featured-product-1.html">featured-product-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-featured-product-2.html">featured-product-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-product-tab-1.html">product-tab-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-product-tab-2.html">product-tab-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-up-comming-product-1.html">up-comming-product-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-up-comming-product-2.html">up-comming-product-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-single-product.html">single-product</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-sidebar-left.html">sidebar-left</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-sidebar-right.html">sidebar-right</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 3</li>
                                                        <li>
                                                            <a href="elements-section-title.html">section-title</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-pagination.html">pagination</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-banner.html">Banner</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-brands.html">Brands</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-breadcrumbs.html">Breadcrumbs</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-newsletter.html">Newsletter</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-team.html">team</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-audio.html">Audio</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-video.html">Video</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 4</li>
                                                        <li>
                                                            <a href="elements-typography.html">typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-buttons.html">Buttons</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-call-to-action.html">Call to Action</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-accordion.html">Accordion</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-alerts.html">Alerts</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-progress-bars.html">progress-bars</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-tab.html">tab</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-toggles.html">toggles</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-toggles.html">toggles</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="shop.html">sản phẩm</a>
                                            <div class="mega-menu-area clearfix">
                                                <div class="mega-menu-link f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Smart Phone</li>
                                                        <li>
                                                            <a href="#">All Mobile Phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Smart phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Android Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Windows Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Refurbished Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">All Mobile Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Note Book</li>
                                                        <li>
                                                            <a href="">All Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Smart notebooks</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Android Note Book</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Windows Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Refurbished Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Note Books Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Tablets</li>
                                                        <li>
                                                            <a href="">All Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Smart tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Android Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Windows Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Refurbished Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Tablets Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mega-menu-photo f-left">
                                                    <a href="#">
                                                        <img src="view/img/mega-menu/0.jpg" alt="mega menu image">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="#">Trang</a>
                                            <div class="mega-menu-area mega-menu-area-2 clearfix">
                                                <div class="mega-menu-link mega-menu-link-2  f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">page list</li>
                                                        <li>
                                                            <a href="shop.html">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">Shop List</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product.html">Single Product</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-left-sidebar.html">Single Product Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-no-sidebar.html">Single Product No Sidebar</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">page list</li>
                                                        <li>
                                                            <a href="cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html">Checkout</a>
                                                        </li>
                                                        <li>
                                                            <a href="order.html">Order</a>
                                                        </li>
                                                        <li>
                                                            <a href="login.html">Login</a>
                                                        </li>
                                                        <li>
                                                            <a href="My-account.html">My Account</a>
                                                        </li>
                                                        <li>
                                                            <a href="about.html">About us</a>
                                                        </li>
                                                        <li>
                                                            <a href="404.html">404</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="dropdwn">
                                                <li><a href="blog-left-sidebar.html">Dropdown Repeat</a>
                                                    <ul class="dropdwn-repeat">
                                                        <li>
                                                            <a href="blog.html">Blog</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-2.html">Blog style 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-blog.html">Blog Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="blog.html">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-2.html">Blog style 2</a>
                                                </li>
                                                <li>
                                                    <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about.html">Về chúng tôi</a>
                                        </li>
                                        <li>
                                            <a href="tel::0377735506">Liên hệ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- header-search & total-cart -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="search-top-cart  f-right">
                                    <!-- header-search -->
                                    <div class="header-search f-left">
                                        <div class="header-search-inner">
                                           <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                           </button>
                                            <form action="index.php?act=search" method="post">
                                                <div class="top-search-box">
                                                    <input type="text" name="info" placeholder="Search here your product...">
                                                    <button type="submit" name="search" value="search">
                                                        <i class="zmdi zmdi-search"></i>
                                                    </button>
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                    <!-- total-cart -->
                                    <div class="total-cart f-left">
                                        <div class="total-cart-in">
                                            <div class="cart-toggler">
                                                <a href="#">
                                                    <span class="cart-quantity">02</span><br>
                                                    <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                                </a>                            
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="top-cart-inner your-cart">
                                                        <h5 class="text-capitalize">Your Cart</h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner view-cart">
                                                        <h4 class="text-uppercase">
                                                            <a href="gio-hang">View cart</a>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner check-out">
                                                        <h4 class="text-uppercase">
                                                            <a href="#">Check out</a>
                                                        </h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER AREA -->

        <!-- START MOBILE MENU AREA -->
        <div class="mobile-menu-area hidden-lg hidden-md">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul>
                                            <li>
                                                <a href="index.html">Home Version 1</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home Version 2</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home Version 3</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">Home 4 Animated Text</a>
                                            </li>
                                            <li>
                                                <a href="index-5.html">Home 5 Animated Text Ovlerlay</a>
                                            </li>
                                            <li>
                                                <a href="index-6.html">Home 6 Background Video</a>
                                            </li>
                                            <li>
                                                <a href="index-7.html">Home 7 BG-Video Ovlerlay</a>
                                            </li>
                                            <li>
                                                <a href="index-8.html">Home 8 Boxed-1</a>
                                            </li>
                                            <li>
                                                <a href="index-9.html">Home 9 Gradient</a>
                                            </li>
                                            <li>
                                                <a href="index-10.html">Home 10 Boxed-2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop.html">Products</a>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li>
                                                <a href="shop.html">Shop</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-list.html">Shop List</a>
                                            </li>
                                            <li>
                                                <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-product.html">Single Product</a>
                                            </li>
                                            <li>
                                                <a href="single-product-left-sidebar.html">Single Product Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-product-no-sidebar.html">Single Product No Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">Checkout</a>
                                            </li>
                                            <li>
                                                <a href="order.html">Order</a>
                                            </li>
                                            <li>
                                                <a href="login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="My-account.html">My Account</a>
                                            </li>
                                            <li>
                                                <a href="about.html">About us</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-2.html">Blog style 2</a>
                                            </li>
                                            <li>
                                                <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-blog.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MOBILE MENU AREA -->

        <?php if (file_exists($page_file) == true) {
            require_once $page_file;
            }?>

        <!-- START FOOTER AREA -->
        <footer id="footer" class="footer-area">
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="plr-185">
                        <div class="footer-top-inner theme-bg">
                            <div class="row">
                                <div class="col-lg-4 col-md-5 col-sm-4">
                                    <div class="single-footer footer-about">
                                        <div class="footer-logo">
                                            <img src="view/img/logo/logo.png" alt="">
                                        </div>
                                        <div class="footer-brief">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the subas industry's standard dummy text ever since the 1500s,</p>
                                            <p>When an unknown printer took a galley of type and If you are going to use a passage of Lorem Ipsum scrambled it to make.</p>
                                        </div>
                                        <ul class="footer-social">
                                            <li>
                                                <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="rss" href="" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 hidden-md hidden-sm">
                                    <div class="single-footer">
                                        <h4 class="footer-title border-left">Shipping</h4>
                                        <ul class="footer-menu">
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>New Products</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Discount Products</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Best Sell Products</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Popular Products</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Manufactirers</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Suppliers</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Special Products</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4">
                                    <div class="single-footer">
                                        <h4 class="footer-title border-left">my account</h4>
                                        <ul class="footer-menu">
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>My Account</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>My Wishlist</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>My Cart</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Sign In</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Registration</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Check out</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Oder Complete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="single-footer">
                                        <h4 class="footer-title border-left">Get in touch</h4>
                                        <div class="footer-message">
                                            <form action="#">
                                                <input type="text" name="name" placeholder="Your name here...">
                                                <input type="text" name="email" placeholder="Your email here...">
                                                <textarea class="height-80" name="message" placeholder="Your messege here..."></textarea>
                                                <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">submit message</button> 
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom black-bg">
                <div class="container-fluid">
                    <div class="plr-185">
                        <div class="copyright">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="copyright-text">
                                        <p>&copy; <a href="https://themeforest.net/user/codecarnival/portfolio" target="_blank">CodeCarnival</a> 2016. All Rights Reserved.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <ul class="footer-payment text-right">
                                        <li>
                                            <a href="#"><img src="view/img/payment/1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="view/img/payment/2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="view/img/payment/3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="view/img/payment/4.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER AREA -->

        <!-- START QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product clearfix">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="view/img/product/quickview.jpg">
                                    </div>
                                </div><!-- .product-images -->
                                
                                <div class="product-info">
                                    <h1>Aenean eu tristique</h1>
                                    <div class="price-box-3">
                                        <div class="s-price-box">
                                            <span class="new-price">£160.00</span>
                                            <span class="old-price">£190.00</span>
                                        </div>
                                    </div>
                                    <a href="single-product-left-sidebar.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons clearfix">
                                                <li>
                                                    <a class="facebook" href="#" target="_blank" title="Facebook">
                                                        <i class="zmdi zmdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="google-plus" href="#" target="_blank" title="Google +">
                                                        <i class="zmdi zmdi-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="twitter" href="#" target="_blank" title="Twitter">
                                                        <i class="zmdi zmdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="pinterest" href="#" target="_blank" title="Pinterest">
                                                        <i class="zmdi zmdi-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="rss" href="#" target="_blank" title="RSS">
                                                        <i class="zmdi zmdi-rss"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->   
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="view/js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="view/js/bootstrap.min.js"></script>
    <!-- jquery.nivo.slider js -->
    <script src="view/lib/js/jquery.nivo.slider.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="view/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="view/js/main.js"></script>

</body>

</html>