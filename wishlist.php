﻿<?php
  include_once("core/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Wishlist Page</title>
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
<body>
<div id="page">
<?php
  drawheader();
?>
    <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h2>My Wishlist</h2>
</div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- BEGIN Main Container col2-right -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
          <div class="my-account">
            
            <div class="my-wishlist">
              <form id="wishlist-view-form" action="#" method="post">
                <fieldset>
                  <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
				  <div class="table-responsive">
                  <table class="clean-table linearize-table data-table table-striped" id="wishlist-table">
                    <thead>
                      <tr class="first last">
                        <th class="customer-wishlist-item-image"></th>
                        <th class="customer-wishlist-item-info"></th>
                        <th class="customer-wishlist-item-quantity">Quantity</th>
                        <th class="customer-wishlist-item-price">Price</th>
                        <th class="customer-wishlist-item-cart"></th>
                        <th class="customer-wishlist-item-remove"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr id="item_32" class="first odd">
                        <td class="wishlist-cell0 customer-wishlist-item-image"><a class="product-image" href="product-detail.html" title="Slim Fit Casual Shirt"> <img src="products-images/p9.jpg" width="80" height="80" alt="Slim Fit Casual Shirt"> </a></td>
                        <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a href="product-detail.html" title="Slim Fit Casual Shirt">Retis lapen casen</a></h3>
                          <div class="description std">
                            <div class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </div>
                          </div>
                          <textarea style="height: 80px; width: 96%;" name="description[32]" rows="3" cols="5" onFocus="focusComment(this)" onBlur="focusComment(this)" title="Comment"></textarea></td>
                        <td class="wishlist-cell2 customer-wishlist-item-quantity" data-rwd-label="Quantity"><div class="cart-cell">
                            <div class="add-to-cart-alt">
                              <input type="text" pattern="\d*" class="input-text qty validate-not-negative-number" name="qty[32]" value="1">
                            </div>
                          </div></td>
                        <td class="wishlist-cell3 customer-wishlist-item-price" data-rwd-label="Price"><div class="cart-cell">
                            <div class="price-box"> <span class="regular-price" id="product-price-2"> <span class="price">$55.00</span> </span> </div>
                          </div></td>
                        <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                            <button type="button" title="Add to Cart" onClick="addWItemToCart(32);" class="button btn-cart"><span><span>Add to Cart</span></span></button>
                          </div>
                          <div class="edit-wishlist"> <a href="#" title="Edit item" class="btn-edit"><i class="icon-pencil"></i><span class="hidden">Edit</span></a> </div></td>
                        <td class="wishlist-cell5 customer-wishlist-item-remove last"><a href="#" onClick="return confirmRemoveWishlistItem();" title="Clear Cart" class="remove-item"><span><span></span></span></a></td>
                      </tr>
                      <tr id="item_34" class="even">
                        <td class="wishlist-cell0 customer-wishlist-item-image"><a class="product-image" href="product-detail.html" title="Vivante Gorgeous Cotton"> <img src="products-images/p4.jpg" width="80" height="80" alt="Vivante Gorgeous Cotton"> </a></td>
                        <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a href="product-detail.html" title="Vivante Gorgeous Cotton">Retis lapen casen</a></h3>
                          <div class="description std">
                            <div class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </div>
                          </div>
                          <textarea style="height: 80px; width: 96%;" name="description[34]" rows="3" cols="5" onFocus="focusComment(this)" onBlur="focusComment(this)" title="Comment"></textarea></td>
                        <td class="wishlist-cell2 customer-wishlist-item-quantity" data-rwd-label="Quantity"><div class="cart-cell">
                            <div class="add-to-cart-alt">
                              <input type="text" pattern="\d*" class="input-text qty validate-not-negative-number" name="qty[34]" value="1">
                            </div>
                          </div></td>
                        <td class="wishlist-cell3 customer-wishlist-item-price" data-rwd-label="Price"><div class="cart-cell">
                            <div class="price-box"> <span class="regular-price" id="product-price-24"> <span class="price">$99.00</span> </span> </div>
                          </div></td>
                        <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                            <button type="button" title="Add to Cart" onClick="addWItemToCart(34);" class="button btn-cart"><span><span>Add to Cart</span></span></button>
                          </div>
                          <div class="edit-wishlist"> <a href="#" title="Edit item" class="btn-edit"><i class="icon-pencil"></i><span class="hidden">Edit</span></a> </div></td>
                        <td class="wishlist-cell5 customer-wishlist-item-remove last"><a href="#" onClick="return confirmRemoveWishlistItem();" title="Clear Cart" class="remove-item"><span><span></span></span></a></td>
                      </tr>
                      <tr id="item_65" class="odd">
                        <td class="wishlist-cell0 customer-wishlist-item-image"><a class="product-image" href="product-detail.html" title="Kalia Bumblebee Black"> <img src="products-images/p3.jpg" width="80" height="80" alt="Kalia Bumblebee Black"> </a></td>
                        <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a href="product-detail.html" title="Kalia Bumblebee Black">Retis lapen casen</a></h3>
                          <div class="description std">
                            <div class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </div>
                          </div>
                          <textarea style="height: 80px; width: 96%;" name="description[65]" rows="3" cols="5" onFocus="focusComment(this)" onBlur="focusComment(this)" title="Comment"></textarea></td>
                        <td class="wishlist-cell2 customer-wishlist-item-quantity" data-rwd-label="Quantity"><div class="cart-cell">
                            <div class="add-to-cart-alt">
                              <input type="text" pattern="\d*" class="input-text qty validate-not-negative-number" name="qty[65]" value="2">
                            </div>
                          </div></td>
                        <td class="wishlist-cell3 customer-wishlist-item-price" data-rwd-label="Price"><div class="cart-cell">
                            <div class="price-box"> <span class="regular-price" id="product-price-30"> <span class="price">$99.00</span> </span> </div>
                          </div></td>
                        <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                            <button type="button" title="Add to Cart" onClick="addWItemToCart(65);" class="button btn-cart"><span><span>Add to Cart</span></span></button>
                          </div>
                          <div class="edit-wishlist"> <a href="#" title="Edit item" class="btn-edit"><i class="icon-pencil"></i><span class="hidden">Edit</span></a> </div></td>
                        <td class="wishlist-cell5 customer-wishlist-item-remove last"><a href="#" onClick="return confirmRemoveWishlistItem();" title="Clear Cart" class="remove-item"><span><span></span></span></a></td>
                      </tr>
                      <tr id="item_66" class="even">
                        <td class="wishlist-cell0 customer-wishlist-item-image"><a class="product-image" href="product-detail.html" title="Micromax X101i"> <img src="products-images/p8.jpg" width="80" height="80" alt="Micromax X101i"> </a></td>
                        <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a href="product-detail.html" title="Micromax X101i">Retis lapen casen</a></h3>
                          <div class="description std">
                            <div class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </div>
                          </div>
                          <textarea style="height: 80px; width: 96%;" name="description[66]" rows="3" cols="5" onFocus="focusComment(this)" onBlur="focusComment(this)" title="Comment"></textarea></td>
                        <td class="wishlist-cell2 customer-wishlist-item-quantity" data-rwd-label="Quantity"><div class="cart-cell">
                            <div class="add-to-cart-alt">
                              <input type="text" pattern="\d*" class="input-text qty validate-not-negative-number" name="qty[66]" value="1">
                            </div>
                          </div></td>
                        <td class="wishlist-cell3 customer-wishlist-item-price" data-rwd-label="Price"><div class="cart-cell">
                            <div class="price-box"> <span class="regular-price" id="product-price-15"> <span class="price">$79.00</span> </span> </div>
                          </div></td>
                        <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                            <button type="button" title="Add to Cart" onClick="addWItemToCart(66);" class="button btn-cart"><span><span>Add to Cart</span></span></button>
                          </div>
                          <div class="edit-wishlist"> <a href="#" title="Edit item" class="btn-edit"><i class="icon-pencil"></i><span class="hidden">Edit</span></a> </div></td>
                        <td class="wishlist-cell5 customer-wishlist-item-remove last"><a href="#" onClick="return confirmRemoveWishlistItem();" title="Clear Cart" class="remove-item"><span><span></span></span></a></td>
                      </tr>
                      <tr id="item_69" class="odd">
                        <td class="wishlist-cell0 customer-wishlist-item-image"><a class="product-image" href="product-detail.html" title="Softwear Women&#39;s Designer"> <img src="products-images/p5.jpg" width="80" height="80" alt="Softwear Women&#39;s Designer"> </a></td>
                        <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a href="product-detail.html" title="Softwear Women&#39;s Designer">Retis lapen casen</a></h3>
                          <div class="description std">
                            <div class="inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </div>
                          </div>
                          <textarea style="height: 80px; width: 96%;" name="description[69]" rows="3" cols="5" onFocus="focusComment(this)" onBlur="focusComment(this)" title="Comment"></textarea></td>
                        <td class="wishlist-cell2 customer-wishlist-item-quantity" data-rwd-label="Quantity"><div class="cart-cell">
                            <div class="add-to-cart-alt">
                              <input type="text" pattern="\d*" class="input-text qty validate-not-negative-number" name="qty[69]" value="1">
                            </div>
                          </div>
						  </td>
                        <td class="wishlist-cell3 customer-wishlist-item-price" data-rwd-label="Price"><div class="cart-cell">
                            <div class="price-box"> <span class="regular-price" id="product-price-39"> <span class="price">$99.00</span> </span> </div>
                          </div></td>
                        <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                            <button type="button" title="Add to Cart" onClick="addWItemToCart(69);" class="button btn-cart"><span><span>Add to Cart</span></span></button>
                          </div>
                          <div class="edit-wishlist"> <a href="#" title="Edit item" class="btn-edit"><i class="icon-pencil"></i><span class="hidden">Edit</span></a> </div></td>
                        <td class="wishlist-cell5 customer-wishlist-item-remove last"><a href="#" class="remove-item"><span><span></span></span></a></td>
                      </tr>
                      <tr id="item_88" class="even">
                        <td class="wishlist-cell0 customer-wishlist-item-image"><a class="product-image" href="product-detail.html" title="Softwear Women&#39;s Designer"> <img src="products-images/p3.jpg" width="80" height="80" alt="Softwear Women&#39;s Designer"> </a></td>
                        <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a href="product-detail.html" title="Softwear Women&#39;s Designer">Softwear Women's Designer</a></h3>
                          <div class="description std">
                            <div class="inner">Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.</div>
                          </div>
                          <textarea style="height: 80px; width: 96%;" name="description[88]" rows="3" cols="5" onFocus="focusComment(this)" onBlur="focusComment(this)" title="Comment"></textarea></td>
                        <td class="wishlist-cell2 customer-wishlist-item-quantity" data-rwd-label="Quantity"><div class="cart-cell">
                            <div class="add-to-cart-alt">
                              <input type="text" pattern="\d*" class="input-text qty validate-not-negative-number" name="qty[88]" value="1">
                            </div>
                          </div></td>
                        <td class="wishlist-cell3 customer-wishlist-item-price" data-rwd-label="Price"><div class="cart-cell">
                            <div class="price-box"> <span class="regular-price" id="product-price-109"> <span class="price">$99.00</span> </span> </div>
                          </div></td>
                        <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                            <button type="button" title="Add to Cart" onClick="addWItemToCart(88);" class="button btn-cart"><span><span>Add to Cart</span></span></button>
                          </div>
                          <div class="edit-wishlist"> <a href="#" title="Edit item" class="btn-edit"><i class="icon-pencil"></i><span class="hidden">Edit</span></a> </div></td>
                        <td class="wishlist-cell5 customer-wishlist-item-remove last"><a href="#" onClick="return confirmRemoveWishlistItem();" title="Clear Cart" class="remove-item"><span><span></span></span></a></td>
                      </tr>
                      <tr id="item_89" class="last odd">
                        <td class="wishlist-cell0 customer-wishlist-item-image"><a class="product-image" href="product-detail.html" title="Slim Fit Casual Shirt"> <img src="products-images/p2.jpg" width="80" height="80" alt="Slim Fit Casual Shirt"> </a></td>
                        <td class="wishlist-cell1 customer-wishlist-item-info"><h3 class="product-name"><a href="product-detail.html" title="Slim Fit Casual Shirt">Slim Fit Casual Shirt</a></h3>
                          <div class="description std">
                            <div class="inner">Blue colour self design casual shirt, made with 100% cotton, slim fit, mandarin collar with a full buttoned chest placket, single chest patch pocket, full sleeve with buttoned cuffs, brand embroidery at the left side of the chest.</div>
                          </div>
                          <textarea style="height: 80px; width: 96%;" name="description[89]" rows="3" cols="5" onFocus="focusComment(this)" onBlur="focusComment(this)" title="Comment"></textarea></td>
                        <td class="wishlist-cell2 customer-wishlist-item-quantity" data-rwd-label="Quantity"><div class="cart-cell">
                            <div class="add-to-cart-alt">
                              <input type="text" pattern="\d*" class="input-text qty validate-not-negative-number" name="qty[89]" value="1">
                            </div>
                          </div></td>
                        <td class="wishlist-cell3 customer-wishlist-item-price" data-rwd-label="Price"><div class="cart-cell">
                            <div class="price-box"> <span class="regular-price" id="product-price-108"> <span class="price">$55.00</span> </span> </div>
                          </div></td>
                        <td class="wishlist-cell4 customer-wishlist-item-cart"><div class="cart-cell">
                            <button type="button" title="Add to Cart" onClick="addWItemToCart(89);" class="button btn-cart"><span><span>Add to Cart</span></span></button>
                          </div>
                          <div class="edit-wishlist"> <a href="#" title="Edit item" class="btn-edit"><i class="icon-pencil"></i><span class="hidden">Edit</span></a> </div></td>
                        <td class="wishlist-cell5 customer-wishlist-item-remove last"><a href="#" onClick="return confirmRemoveWishlistItem();" title="Clear Cart" class="remove-item"><span><span></span></span></a></td>
                      </tr>
                    </tbody>
                  </table>
				  </div>
                 
                  <div class="buttons-set buttons-set2">
                    <button type="submit" name="save_and_share" title="Share Wishlist" class="button btn-share"><span>Share Wishlist</span></button>
                    <button type="button" title="Add All to Cart" onClick="addAllWItemsToCart()" class="button btn-add"><span>Add All to Cart</span></button>
                    <button type="submit" name="do" title="Update Wishlist" class="button btn-update"><span>Update Wishlist</span></button>
                  </div>
                </fieldset>
              </form>
              <form id="wishlist-allcart-form" action="#" method="post">
                <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                <div class="no-display">
                  <input type="hidden" name="wishlist_id" id="wishlist_id" value="1">
                  <input type="hidden" name="qty" id="qty" value="">
                </div>
              </form>
             
            </div>
           
          </div>
        </section>
        <!--col-main col-sm-9 wow bounceInUp animated-->
        <aside class="col-right sidebar col-sm-3 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
          <div class="block block-account">
            <div class="block-title"> My Account </div>
            <div class="block-content">
              <ul>
                <li><a href="#"><span> Account Dashboard</span></a></li>
                <li><a href="#"><span> Account Information</span></a></li>
                <li><a href="#"><span> Address Book</span></a></li>
                <li><a href="#"><span> My Orders</span></a></li>
                <li><a href="#"><span> Billing Agreements</span></a></li>
                <li><a href="#"><span> Recurring Profiles</span></a></li>
                <li><a href="#"><span> My Product Reviews</span></a></li>
                <li class="current"><a>My Wishlist</a></li>
                <li><a href="#"><span> My Applications</span></a></li>
                <li><a href="#"><span> Newsletter Subscriptions</span></a></li>
                <li class="last"><a href="#"><span> My Downloadable Products</span></a></li>
              </ul>
            </div>
            <!--block-content--> 
          </div>
          <!--block block-account-->
          
          
        </aside>
        <!--col-right sidebar col-sm-3 wow bounceInUp animated--> 
      </div>
      <!--row--> 
    </div>
    <!--main container--> 
  </section>
  <!--main-container col2-left-layout-->
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


</body>
</html>