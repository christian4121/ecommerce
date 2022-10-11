<?php
include_once("core/function.php");
$user=0;
if($_GET['variable']){
  $user=$_GET['variable'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ecommerce</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="robots" content="*">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Playfair+Display:400,400i,700,900|Rubik:300,400,400i,500,500i,700" rel="stylesheet">
<meta name="viewport" content="initial-scale=1.0, width=device-width">

</head>
<body>
<!--Dibujar el header-->
<?php
  drawheader($user);
?>
<div id="page">
  <!--container-->
  <div class="content">
  <div id="tmg-slideshow" class="tmg-slideshow">
    <div class="container">
      <div id='thm_slider_wrapper' class='thm_slider_wrapper fullwidthbanner-container' >
        <div id='thm-rev-slider' class='rev_slider fullwidthabanner'>
          <ul>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide_img1.jpg'><img src='images/slide_img2.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image1" />
              <div class="info">
                   <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Nuevos estilos!</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='430'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Compra!</a></div>
              </div>
            </li>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide_img2.jpg'><img src='images/slide_img1.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image2"  />
              <div class="info">
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Zapatos para ella</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='430'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Compra!</a></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  
  <!--top products-->  
<section class=" wow bounceInUp animated">
    <div class="top-banner slider-items-products">
    <div class="container">
      <div class="row">
      
      <div id="top-deals" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">
          <div class="item">
          <div class="item-inner">
        &nbsp;
          <div class="homeslider-description">
          <div class="wrap-desc">
<h2>Sale up to 70%</h2>
<p>Pellentesque habitant morbi tristique doler senectus et netus et malesuada</p>
<div class="box-timer">
                      <div class="countbox_1 timer-grid"></div>
                    </div>
<div><a href="#" class="learnmore">Learn More</a></div>
</div></div>
          
          </div>
          </div>
           <div class="item">
         <div class="item-inner">
         &nbsp;
          <div class="homeslider-description">
          <div class="wrap-desc">
<h2>Birthday Flower</h2>
<p>Pellentesque habitant morbi tristique doler senectus et netus et malesuada</p>
<div><a href="#" class="learnmore">Learn More</a></div>
</div></div>
          
          </div>
          </div>
           
          </div>
          </div>
          </div>
          </div>
          </div>
          </section>
    <!--top products end-->         
          
  
  <br>
     <!-- best Pro Slider -->
  
 <div class="our-features-box wow bounceInUp animated animated">
    <div class="container">
      <ul>
        <li>
          <div class="feature-box free-shipping">
            <div class="icon-truck"></div>
            <div class="content">Cambios y devoluciones sin costo
  
            </div>
          </div>
        </li>
        <li>
          <div class="feature-box need-help">
            <div class="icon-support"></div>
            <div class="content">Necesita ayuda +(502)4984-2132

            </div>
          </div>
        </li>
       
        <li class="last">
          <div class="feature-box return-policy">
            <div class="icon-return"></div>
            <div class="content">Servicio de devolución en 30 días
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div> 
   
 
 
  
   <!-- Logo Brand Block -->

        

    </div>
  </div>
  </div>

  
  <!-- For version 1,2,3,4,6 -->
  <div class="footer-banner">
 
  <div class="banner-block1">
   <div class="thumbnail_block">
  <img src="images/box-img1.jpg" alt="">
  <div class="caption hovered">
                                    <div class="caption-wrapper">
                                        <div class="caption-inner">
                                            <h3>Top Collection</h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <p><a href="#">View All</a></p>
                                        </div>
                                    </div>
                                </div>
  </div>
  </div>
<div class="banner-block2">
  <div class="block1">
  <strong>New Arrivals</strong>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  <a href="#">Learn More</a>
  </div>
  </div>
  
<div class="banner-block3">
   <div class="thumbnail_block">
  <img src="images/box-img2.jpg" alt="">
  <div class="caption hovered">
                                    <div class="caption-wrapper">
                                        <div class="caption-inner">
                                            <h3>Nexus App</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <p><a href="#">Download</a></p>
                                        </div>
                                    </div>
                                </div>
  </div>
  </div>
<div class="banner-block2">
  <div class="block1">
  <strong>Hot Deal</strong>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  <a href="#">Learn More</a>
  </div>
  </div>
  </div>

  <!--Dibujar footer-->
<?php
  drawfooter();
?>  
  <!-- End For version 1,2,3,4,6 -->
  
</div>
<!--page-->
<!-- Mobile Menu-->
<div id="mobile-menu">
  <ul class="mobile-menu">
   
    <li>
      <div class="home"><a href="#"><i class="icon-home"></i>Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a> </li>
        <li> <a href="list.html">List</a> </li>
        <li> <a href="product-detail.html">Product Detail</a> </li>
        <li> <a href="shopping-cart.html">Shopping Cart</a> </li>
        <li><a href="checkout.html">Checkout</a>
          <ul>
            <li><a href="checkout-method.html">Checkout Method</a> </li>
            <li><a href="checkout-billing-info.html">Checkout Billing Info</a> </li>
          </ul>
        </li>
        <li> <a href="wishlist.html">Wishlist</a> </li>
        <li> <a href="dashboard.html">Dashboard</a> </li>
        <li> <a href="multiple-addresses.html">Multiple Addresses</a> </li>
        <li> <a href="about-us.html">About us</a> </li>
        <li><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a> </li>
          </ul>
        </li>
        <li><a href="contact-us.html">Contact us</a> </li>
        <li><a href="404error.html">404 Error Page</a> </li>
      </ul>
    </li>
    <li><a href="#">Women</a>
      <ul>
        <li> <a href="#" class="">Stylish Bag</a>
          <ul>
            <li> <a href="#" class="">Clutch Handbags</a> </li>
            <li> <a href="#l" class="">Diaper Bags</a> </li>
            <li> <a href="#" class="">Bags</a> </li>
            <li> <a href="#" class="">Hobo handbags</a> </li>
          </ul>
        </li>
        <li> <a href="#">Material Bag</a>
          <ul>
            <li> <a href="#">Beaded Handbags</a> </li>
            <li> <a href="#">Fabric Handbags</a> </li>
            <li> <a href="#">Handbags</a> </li>
            <li> <a href="#">Leather Handbags</a> </li>
          </ul>
        </li>
        <li> <a href="#">Shoes</a>
          <ul>
            <li> <a href="#">Flat Shoes</a> </li>
            <li> <a href="#">Flat Sandals</a> </li>
            <li> <a href="#">Boots</a> </li>
            <li> <a href="#">Heels</a> </li>
          </ul>
        </li>
        <li> <a href="#">Jwellery</a>
          <ul>
            <li> <a href="#">Bracelets</a> </li>
            <li> <a href="#">Necklaces &amp; Pendent</a> </li>
            <li> <a href="#l">Pendants</a> </li>
            <li> <a href="#">Pins &amp; Brooches</a> </li>
          </ul>
        </li>
        <li> <a href="#">Dresses</a>
          <ul>
            <li> <a href="#">Casual Dresses</a> </li>
            <li> <a href="#">Evening</a> </li>
            <li> <a href="#">Designer</a> </li>
            <li> <a href="#">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#">Swimwear</a>
          <ul>
            <li> <a href="#">Swimsuits</a> </li>
            <li> <a href="#">Beach Clothing</a> </li>
            <li> <a href="#">Clothing</a> </li>
            <li> <a href="#">Bikinis</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Men</a>
      <ul>
        <li><a href="#" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Sport Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casual Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">canvas shoes</a> </li>
          </ul>
        </li>
        <li><a href="#">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Casual Dresses</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Evening</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Designer</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Party</a> </li>
          </ul>
        </li>
        <li><a href="#">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Coats</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Formal Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Blazers</a> </li>
          </ul>
        </li>
        <li><a href="#">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casio</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Titan</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Tommy-Hilfiger</a> </li>
          </ul>
        </li>
        <li><a href="#">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Ray Ban</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Police</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Oakley</a> </li>
          </ul>
        </li>
        <li><a href="#">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Backpacks</a> </li>

            <li class="level2 nav-6-1-1"><a href="#">Wallets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Laptops Bags</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Belts</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Electronics</a>
      <ul>
        <li><a href="#"><spanMobiles</span></a>
          <ul>
            <li> <a href="#"><span>Samsung</span></a> </li>
            <li> <a href="#"><span>Nokia</span></a> </li>
            <li> <a href="#"><span>IPhone</span></a> </li>
            <li> <a href="#"><span>Sony</span></a> </li>
          </ul>
        </li>
        <li><a href="#" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="#"><span>Mobile Memory Cards</span></a> </li>
            <li> <a href="#"><span>Cases &amp; Covers</span></a> </li>
            <li> <a href="#"><span>Mobile Headphones</span></a> </li>
            <li> <a href="#"><span>Bluetooth Headsets</span></a> </li>
          </ul>
        </li>
        <li><a href="#"><span>Cameras</span></a>
          <ul>
            <li> <a href="#"><span>Camcorders</span></a> </li>
            <li> <a href="#"><span>Point &amp; Shoot</span></a> </li>
            <li> <a href="#"><span>Digital SLR</span></a> </li>
            <li> <a href="#"><span>Camera Accesories</span></a> </li>
          </ul>
        </li>
        <li><a href="#"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="#"><span>MP3 Players</span></a> </li>
            <li> <a href="#"><span>IPods</span></a> </li>
            <li> <a href="#"><span>Speakers</span></a> </li>
            <li> <a href="#"><span>Video Players</span></a> </li>
          </ul>
        </li>
        <li><a href="#"><span>Computer</span></a>
          <ul>
            <li> <a href="#"><span>External Hard Disk</span></a> </li>
            <li> <a href="#"><span>Pendrives</span></a> </li>
            <li> <a href="#"><span>Headphones</span></a> </li>
            <li> <a href="#"><span>PC Components</span></a> </li>
          </ul>
        </li>
        <li><a href="#"><span>Appliances</span></a>
          <ul>
            <li> <a href="#"><span>Vaccum Cleaners</span></a> </li>
            <li> <a href="#"><span>Indoor Lighting</span></a> </li>
            <li> <a href="#"><span>Kitchen Tools</span></a> </li>
            <li> <a href="#"><span>Water Purifier</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Furniture</a> </li>
    <li><a href="#">Kids</a> </li>
    <li><a href="contact-us.html">Contact Us</a> </li>
  </ul>
</div>
<div class="popup1">
 
<div class="newsletter-sign-box">

<div class="newsletter">
<img src="images/close-icon.png" alt="close" class="x1" onClick="HideMe();">
    <form method="post" id="popup-newsletter" name="popup-newsletter" class="email-form">
        <h3>Newsletter Sign up</h3>
        
        <h4>Qualis flowers store is updated regularly with offers.</h4>
     <div class="newsletter-form">
        <div class="input-box">
           <input type="text" name="email" id="newsletter2" title="Sign up for our newsletter" placeholder="Enter your email address" class="input-text required-entry validate-email">        
           <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
         
        </div> <!--input-box-->
     </div> <!--newsletter-form-->
        <label class="subscribe-bottom"><input type="checkbox" name="notshowpopup" id="notshowpopup">Don’t show this popup again</label>
    </form>



</div> <!--newsletter-->

  </div> <!--newsletter-sign-box-->
</div>
<div id="fade"></div>         

<!-- JavaScript -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/revslider.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/countdown.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
<script type="text/javascript">
var dthen1 = new Date("12/25/17 11:59:00 PM");
	start = "05/03/15 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_1";
	CountBack_slider(gsecs1, "countbox_1", 1);
	
	var dthen1 = new Date("12/12/17 11:59:00 PM");
	start = "01/20/16 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_2";
	CountBack_slider(gsecs1, "countbox_2", 1);
</script>
<script type="text/javascript">
       
        jQuery(document).ready(function(){
          HideMe();
            jQuery('#thm-rev-slider').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 0,
                startheight:750,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'on',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'on',
                forceFullWidth: 'off',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        
        </script>
<script type="text/javascript">
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }
</script> 
</body>
</html>
