<?php
  include("core/function.php");
  if(isset($_POST['registrar'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $pass=md5($_POST['password']);
    $consulta="SELECT ESTADO_ID FROM USUARIO WHERE EMAIL='".$email."'";
    $exec=db_query($consulta);
    $resultado=db_fetch_array($exec);
    if(is_array($resultado)){
      echo "<script>alert('Error este usuario ya ha sido registrado')</script>";
    }else{
      echo "<script>alert('Este usuario puede ser registrado')</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" class=" js no-touch localstorage">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registrate</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="robots" content="*">
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Playfair+Display:400,400i,700,900|Rubik:300,400,400i,500,500i,700" rel="stylesheet">


</head>
<body class="  customer-account-login rtl">
<div id="page">
<?php
  drawheader(0);
?>                    
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
     <div class="page-title">
     <h2>Crea una cuenta o Inicia Sesion</h2>
  </div>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
    
       
<!-- BEGIN Main Container -->  
          
       <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">     
              
	       <div class="main">                     
                            <div class="account-login container">
  <!--page-title-->

        <form action="register.php" method="POST" id="login-form" autocomplete="off">
        <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
        <fieldset class="col2-set">
            <div class="col-1 new-users"> 
                  <strong>¿Ya tienes una cuenta?</strong>    
                <div class="content">
                   
                    <p>Si ya tienes una cuenta da click en el sigueinte boton para iniciar sesion</p>
                     <div class="buttons-set">
                    <button type="button" title="Create an Account" class="button create-account" onClick=""><span><span><a href="login.php" style="color:white">Inicia Sesion</a></span></span></button>
                </div>
                </div>
            </div>
            <div class="col-2 registered-users">
             <strong>Registrate</strong>             
                <div class="content">
                    
                    <p>Llena la informacion a continuacion para registrarte.</p>
                    <ul class="form-list">
                      <li>
                          <label for="nombre">Nombre<em class="required">*</em></label>
                          <div class="input-box">
                              <input type="text" name="nombre" class="input-text required-entry validate-email" title="nombre" required/>
                          </div>
                      </li>
                      <li>
                          <label for="nombre">Apellido<em class="required">*</em></label>
                          <div class="input-box">
                              <input type="text" name="apellido" class="input-text required-entry validate-email" title="apellido" required/>
                          </div>
                      </li>
                      <li>
                          <label for="nombre">Telefono<em class="required">*</em></label>
                          <div class="input-box">
                              <input type="text" name="telefono" class="input-text required-entry validate-email" title="nombre" required/>
                          </div>
                      </li>
                        <li>
                             <label for="email">Correo Electronico<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="email" name="email" value="" id="email" class="input-text required-entry validate-email" title="correo electronico" required/>
                            </div>
                        </li>
                        <li>
                            <label for="pass">Contraseña<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="password" name="password" class="input-text required-entry validate-password" id="pass" title="password" required/>
                            </div>
                        </li>
                                                                    </ul>
                    <div class="remember-me-popup">
    <div class="remember-me-popup-head" style="display:none">
        <h3 id="text2">What's this?</h3>
        <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
    </div>
    <div class="remember-me-popup-body" style="display:none">
        <p id="text1">Checking "Remember Me" will let you access your shopping cart on this computer when you are logged out</p>
        <div class="remember-me-popup-close-button a-right">
            <a href="#" class="remember-me-popup-close button" title="Close" onClick="
            showDiv()"><span>Close</span></a>
        </div>
    </div>
</div>

<p class="required">* Campos Requeridos</p>



                     <div class="buttons-set">
                  
                    <button type="submit" class="button login" title="Login" name="registrar" id="send2"><span>Registrate</span></button>

                 </div> <!--buttons-set-->
                  </div> <!--content-->                               
            </div> <!--col-2 registered-users-->
                   </fieldset> <!--col2-set-->
    </form>
   
</div> <!--account-login-->
         
	       </div><!--main-container-->
          
          </div> <!--col1-layout-->
  <!-- For version 1,2,3,4,6 -->
  
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
    <li><span class="expand fa fa-plus"></span><a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a> </li>
        <li> <a href="list.html">List</a> </li>
        <li> <a href="product-detail.html">Product Detail</a> </li>
        <li> <a href="shopping-cart.html">Shopping Cart</a> </li>
        <li><span class="expand fa fa-plus"></span><a href="checkout.html">Checkout</a>
          <ul>
            <li><a href="checkout-method.html">Checkout Method</a> </li>
            <li><a href="checkout-billing-info.html">Checkout Billing Info</a> </li>
          </ul>
        </li>
        <li> <a href="wishlist.html">Wishlist</a> </li>
        <li> <a href="dashboard.html">Dashboard</a> </li>
        <li> <a href="multiple-addresses.html">Multiple Addresses</a> </li>
        <li> <a href="about-us.html">About us</a> </li>
        <li><span class="expand fa fa-plus"></span><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a> </li>
          </ul>
        </li>
        <li><a href="contact-us.html">Contact us</a> </li>
        <li><a href="404error.html">404 Error Page</a> </li>
      </ul>
    </li>
    <li><span class="expand fa fa-plus"></span><a href="#">Women</a>
      <ul>
        <li><span class="expand fa fa-plus"></span> <a href="#" class="">Stylish Bag</a>
          <ul>
            <li> <a href="#" class="">Clutch Handbags</a> </li>
            <li> <a href="#l" class="">Diaper Bags</a> </li>
            <li> <a href="#" class="">Bags</a> </li>
            <li> <a href="#" class="">Hobo handbags</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Material Bag</a>
          <ul>
            <li> <a href="#">Beaded Handbags</a> </li>
            <li> <a href="#">Fabric Handbags</a> </li>
            <li> <a href="#">Handbags</a> </li>
            <li> <a href="#">Leather Handbags</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Shoes</a>
          <ul>
            <li> <a href="#">Flat Shoes</a> </li>
            <li> <a href="#">Flat Sandals</a> </li>
            <li> <a href="#">Boots</a> </li>
            <li> <a href="#">Heels</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Jwellery</a>
          <ul>
            <li> <a href="#">Bracelets</a> </li>
            <li> <a href="#">Necklaces &amp; Pendent</a> </li>
            <li> <a href="#l">Pendants</a> </li>
            <li> <a href="#">Pins &amp; Brooches</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Dresses</a>
          <ul>
            <li> <a href="#">Casual Dresses</a> </li>
            <li> <a href="#">Evening</a> </li>
            <li> <a href="#">Designer</a> </li>
            <li> <a href="#">Party</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Swimwear</a>
          <ul>
            <li> <a href="#">Swimsuits</a> </li>
            <li> <a href="#">Beach Clothing</a> </li>
            <li> <a href="#">Clothing</a> </li>
            <li> <a href="#">Bikinis</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><span class="expand fa fa-plus"></span><a href="#">Men</a>
      <ul>
        <li><span class="expand fa fa-plus"></span> <a href="#" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Sport Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casual Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">canvas shoes</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Casual Dresses</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Evening</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Designer</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Party</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Coats</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Formal Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Blazers</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casio</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Titan</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Tommy-Hilfiger</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Ray Ban</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Police</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Oakley</a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Backpacks</a> </li>

            <li class="level2 nav-6-1-1"><a href="#">Wallets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Laptops Bags</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Belts</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><span class="expand fa fa-plus"></span><a href="#">Electronics</a>
      <ul>
        <li><span class="expand fa fa-plus"></span> <a href="#"><spanMobiles</span></a>
          <ul>
            <li> <a href="#"><span>Samsung</span></a> </li>
            <li> <a href="#"><span>Nokia</span></a> </li>
            <li> <a href="#"><span>IPhone</span></a> </li>
            <li> <a href="#"><span>Sony</span></a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="#"><span>Mobile Memory Cards</span></a> </li>
            <li> <a href="#"><span>Cases &amp; Covers</span></a> </li>
            <li> <a href="#"><span>Mobile Headphones</span></a> </li>
            <li> <a href="#"><span>Bluetooth Headsets</span></a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#"><span>Cameras</span></a>
          <ul>
            <li> <a href="#"><span>Camcorders</span></a> </li>
            <li> <a href="#"><span>Point &amp; Shoot</span></a> </li>
            <li> <a href="#"><span>Digital SLR</span></a> </li>
            <li> <a href="#"><span>Camera Accesories</span></a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="#"><span>MP3 Players</span></a> </li>
            <li> <a href="#"><span>IPods</span></a> </li>
            <li> <a href="#"><span>Speakers</span></a> </li>
            <li> <a href="#"><span>Video Players</span></a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#"><span>Computer</span></a>
          <ul>
            <li> <a href="#"><span>External Hard Disk</span></a> </li>
            <li> <a href="#"><span>Pendrives</span></a> </li>
            <li> <a href="#"><span>Headphones</span></a> </li>
            <li> <a href="#"><span>PC Components</span></a> </li>
          </ul>
        </li>
        <li><span class="expand fa fa-plus"></span> <a href="#"><span>Appliances</span></a>
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
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>


</body></html>