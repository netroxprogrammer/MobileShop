<?php $this->load->helper('url');?>
<!doctype html>
<html dir="ltr" lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base  />
<meta name="description" content="mob!le" />
<link href="image/catalog/cart.png" rel="icon" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="apple-touch-icon" href="apple-touch-icon.html">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,600,700%7COpen+Sans:400,600,700' rel='stylesheet' type='text/css'/>
<script src="<?php echo base_url();?>assets/catalog/view/theme/mobile/js/_nico_commonc052.js?t=1477252212"></script>
<script src="<?php echo base_url();?>assets/catalog/view/theme/mobile/js/_nico_homec937.js?t=1439117043">
</script><link href='<?php echo base_url();?>assets/catalog/view/theme/mobile/css/_nico_commonc23e.css?t=1493846938' rel='stylesheet' type='text/css' property='stylesheet'/>
<link href='<?php echo base_url();?>assets/catalog/view/theme/mobile/css/_nico_homecd9c.css?t=1439158735' rel='stylesheet' type='text/css' property='stylesheet'/><style>
/* color - color-red.css */
.header,.header .navbar-collapse, .header .navbar-nav
{
background:#f15922;
background-color:#f15922;
border-bottom: none;
border-top: none;
filter:none;
}
.navbar .nav > li > a, .navbar .nav > li b, .navbar .nav > li.highlight > a
{
color:#fff;
}
.navbar .nav > li:hover
{
color:#333;
background:#fff;
}
.navbar .nav > li:hover, .navbar .nav > li:hover > a:hover
{
color:#333;
}
.navbar .nav > li.dropdown:hover > a,.navbar .nav > li.dropdown.highlight:hover > a
{
color:#333;
background:#fff;
}
.navbar .nav > li {
border-left: 1px solid #fe662f;
border-right: 1px solid #e74f18;
}
.navbar .nav > li.highlight
{
background:#444;
}
.btn:hover
{
background-color:#f15922;
}
.btn.btn-link.dropdown-toggle:hover
{
background-color:transparent;
}
.btn-primary:hover, .btn.btn-primary:hover, .product .btn.btn-primary:hover, #button-confirm:hover, .button:hover
{
background-color:#f15922;
}
.navbar-toggle .icon-bar
{
background:#fff;
}
#logo a {
color: #f15922;
}
.navbar .dropdown-menu > li > a:hover
{
background:#f15922;
}
.navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus
{
border-bottom:2px solid #f15922;
}
.left-menu > div.category_module ul li.active > a
{
border-bottom:1px solid #f15922;
}
.product > div > div.hover > div > a > span
{
background:#f15922;
background:rgba(241, 89, 34,0.9);
}
.product .price p
{
color:#f15922;
}
.product .price .price-old
{
color:#f15922;
}
.product .addcart a
{
background:#f15922;
}
.product-list .product .price p
{
color:#f15922;
}
#twitter_update_list a {
color: #f15922;
}
.show-login a
{
color:#f15922;
}
.your_order .radio:hover
{
color:#f15922;
}
.controls a:hover
{
color:#f15922;
}
.image-additional a:focus
{
outline: 1px dotted #f15922;
}
.product-info li a:hover
{
color:#f15922;
}
.product-info #button-cart
{
background:#f15922;
}
.tabs .nav-tabs > li.active > a
{
background: none repeat scroll 0 0 #f15922;
}
/*
.tab-pane a
{
color:#f15922;
}
*/
.sitemap .subtitle a:hover
{
color:#f15922;
}
.content-blog h3 a:hover
{
color:#f15922;
}
.post-detail a
{
color:#f15922;
}
.text-blog a em:hover
{
color:#f15922;
}
.col-post ul.post-menu li a:hover
{
color:#f15922;
}
.col-post ul.tags a:hover
{
background:#f15922;
}
a.comment-reply-link
{
color:#f15922;
}
.filters li:hover
{
background:#f15922;
}
.filters li.active {
background:#f15922;
}
.blog-item .readmore:hover
{
background:#f15922;
}
#language{display:block;}
#currency{display:block;}
</style> <title>mob!le</title>
</head>
<body id="home">
<div id="top">
<div class="container">
<!--cols:12 -->

<div id="top-links" class="pull-left">
<?php 
if(!empty($authUrl)) { ?>
	<ul class="list-inline">
<li class=""><a href="<?php echo $authUrl ?>" title="My Account" class="" data-toggle=""><i class="fa fa-user"></i> <span >
Login Via Facebook

</li>
<?php

} else{
?>
	
<ul class="list-inline">
<li class=""><a href="" title="My Account" class="" data-toggle=""><i class="fa fa-user"></i> <span class="">
<?php
 $data = $this->session->userdata('userData');
 echo $data['first_name']." ".$data['last_name'];
?>
</li>
<?php 
}
?>
</div>
<!-- div id="welcome" class="pull-right">
</div -->

<div class="pull-right"></div>
</div>
</div>
<div class="container">
<div id="header">
<div class="">
<div class="row">
<div class="col-sm-3 col-xs-12">
<div id="logo">
<a href="index9328.html?route=common/home" id="image-logo">
<img src="<?php echo base_url();?>assets/img/catalog/logo.png" title="mob!le" alt="mob!le" class="img-responsive" />
</a>
<h1 id="text-logo"><a href="index9328.html?route=common/home">
<span>
m</span>ob!le</a></h1>
<span id="text_under_logo">premium opencart theme</span>
</div>
</div>
<div class="col-sm-9 col-xs-12 search-col">
<form action="http://mobile2.nicolette.ro/" class="navbar-form navbar-search" role="search">
<div class="input-group">
<button type="submit" class="btn btn-default icon-search"></button>
<input type="text" name="search" class="search-query col-sm-4" autocomplete="off" placeholder="Search" value="" />
<div class="select">
<select name="category_id">
<option value="0">All categories</option>
<option value="20">Desktops</option>
<option value="26">&ensp;PC</option>
<option value="27">&ensp;Mac</option>
<option value="18">Laptops &amp; Notebooks</option>
<option value="46">&ensp;Macs</option>
<option value="45">&ensp;Windows</option>
<option value="25">Components</option>
<option value="29">&ensp;Mice and Trackballs</option>
<option value="28">&ensp;Monitors</option>
<option value="35">&ensp;&ensp;test 1</option>
<option value="36">&ensp;&ensp;test 2</option>
<option value="30">&ensp;Printers</option>
<option value="31">&ensp;Scanners</option>
<option value="32">&ensp;Web Cameras</option>
<option value="57">Tablets</option>
<option value="17">Software</option>
<option value="24">Phones &amp; PDAs</option>
<option value="33">Cameras</option>
<option value="34">MP3 Players</option>
<option value="43">&ensp;test 11</option>
<option value="44">&ensp;test 12</option>
<option value="47">&ensp;test 15</option>
<option value="48">&ensp;test 16</option>
<option value="49">&ensp;test 17</option>
<option value="50">&ensp;test 18</option>
<option value="51">&ensp;test 19</option>
<option value="52">&ensp;test 20</option>
<option value="58">&ensp;&ensp;test 25</option>
<option value="53">&ensp;test 21</option>
<option value="54">&ensp;test 22</option>
<option value="55">&ensp;test 23</option>
<option value="56">&ensp;test 24</option>
<option value="38">&ensp;test 4</option>
<option value="37">&ensp;test 5</option>
<option value="39">&ensp;test 6</option>
<option value="40">&ensp;test 7</option>
<option value="41">&ensp;test 8</option>
<option value="42">&ensp;test 9</option>
</select>
</div>
</div>
</form>
<div class="nav navbar-right cart pull-right">
<a id="cart" href="index630e.html?route=checkout/cart" class="dropdown-toggle" data-toggle="dropdown" role="button">
<span><b>0</b>
<span> item(s)<br/>$0.00</span>
</span>
</a>
<div class="cart-info dropdown-menu pull-right" role="menu">
<div class="empty">Your shopping cart is empty!</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="header">
<div class="container">
<!--cols:12 -->
<div class="navbar yamm ">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<!-- li><a href=""><span class="home">&#8962;</span></a></li -->
<li class=" "
>
<a href="indexe903.html?route=pavblog/blogs"
onclick="if (!isMobile()) location.href='indexe903.html?route=pavblog/blogs'"
>
Blog
</a>
</li>
<li class=" dropdown "
>
<a href="indexf345.html?route=product/category&amp;path=20_27"
onclick="if (!isMobile()) location.href='indexf345.html?route=product/category&amp;path=20_27'"
data-toggle="dropdown" class="dropdown-toggle">
Custom menu
<b class="fa fa-chevron-down"></b> </a>
<ul class="dropdown-menu ">
<li class=" "
>
<a href="#"
>
Menu item
</a>
</li>
<li class=" "
>
<a href="#"
>
Menu item
</a>
</li>
<li class=" "
>
<a href="#"
>
Menu item
</a>
</li>
<li class=" "
>
<a href="#"
>
Menu item
</a>
</li>
</ul>
</li>
<li class=" "
>
<a href="#"
>
Menu item
</a>
</li>
<li class="mega yamm-fw highlight dropdown "
>
<a href="#"
target="_blank"
data-toggle="dropdown" class="dropdown-toggle">
Categories
<b class="fa fa-chevron-down"></b> </a>
<ul class="dropdown-menu ">
<li>
<!-- Content container to add padding -->
<div class="yamm-content clearfix">
<div class="row">
<ul class="col-sm-4 list-unstyled">
<li>
<p><a href="index98dc.html?route=product/category&amp;path=20"><strong>Desktops</strong></a><img class="cat_thumb" src="image/cache/catalog/demo/compaq_presario-160x200.jpg" alt=""></p>
</li>
<li><a href="indexd9fe.html?route=product/category&amp;path=20_26">PC</a></li>
<li><a href="indexf345.html?route=product/category&amp;path=20_27">Mac</a></li>
</ul>
<ul class="col-sm-4 list-unstyled">
<li>
<p><a href="index7fa3.html?route=product/category&amp;path=18"><strong>Laptops &amp; Notebooks</strong></a><img class="cat_thumb" src="image/cache/catalog/demo/hp_2-160x200.jpg" alt=""></p>
</li>
<li><a href="index9f41.html?route=product/category&amp;path=18_46">Macs</a></li>
<li><a href="index8470.html?route=product/category&amp;path=18_45">Windows</a></li>
</ul>
<ul class="col-sm-4 list-unstyled">
<li>
<p><a href="index1647.html?route=product/category&amp;path=25"><strong>Components</strong></a></p>
</li>
<li><a href="indexc219.html?route=product/category&amp;path=25_29">Mice and Trackballs</a></li>
<li><a href="indexe177.html?route=product/category&amp;path=25_28">Monitors</a></li>
<li><a href="index68a7.html?route=product/category&amp;path=25_30">Printers</a></li>
<li><a href="indexf3db.html?route=product/category&amp;path=25_31">Scanners</a></li>
<li><a href="index955a.html?route=product/category&amp;path=25_32">Web Cameras</a></li>
</ul>
</div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"> <ul class="col-sm-4 list-unstyled">
<li>
<p><a href="index8122.html?route=product/category&amp;path=34"><strong>MP3 Players</strong></a><img class="cat_thumb" src="image/cache/catalog/demo/ipod_touch_4-160x200.jpg" alt=""></p>
</li>
<li><a href="index22d5.html?route=product/category&amp;path=34_43">test 11</a></li>
<li><a href="indexa632.html?route=product/category&amp;path=34_44">test 12</a></li>
<li><a href="index509a.html?route=product/category&amp;path=34_47">test 15</a></li>
<li><a href="index7e21.html?route=product/category&amp;path=34_48">test 16</a></li>
<li><a href="index0e62.html?route=product/category&amp;path=34_49">test 17</a></li>
<li><a href="indexf762.html?route=product/category&amp;path=34_50">test 18</a></li>
</ul><ul class="col-sm-4 list-unstyled"><li><p><strong>&nbsp;</strong></p></li> <li><a href="index6f52.html?route=product/category&amp;path=34_51">test 19</a></li>
<li><a href="indexbe11.html?route=product/category&amp;path=34_52">test 20</a></li>
<li><a href="indexb234.html?route=product/category&amp;path=34_53">test 21</a></li>
<li><a href="indexcd03.html?route=product/category&amp;path=34_54">test 22</a></li>
<li><a href="index000c.html?route=product/category&amp;path=34_55">test 23</a></li>
<li><a href="indexfee0.html?route=product/category&amp;path=34_56">test 24</a></li>
</ul><ul class="col-sm-4 list-unstyled"><li><p><strong>&nbsp;</strong></p></li> <li><a href="indexd86f.html?route=product/category&amp;path=34_38">test 4</a></li>
<li><a href="index9716.html?route=product/category&amp;path=34_37">test 5</a></li>
<li><a href="index2bab.html?route=product/category&amp;path=34_39">test 6</a></li>
<li><a href="index6493.html?route=product/category&amp;path=34_40">test 7</a></li>
<li><a href="http://mbb.zong.com.pk/MBB/MBB.aspx">test 8</a></li>
<li><a href="http://mbb.zong.com.pk/MBB/MBB.aspx">test 9</a></li>
</ul>
</div><div class="row"></div><div class="row"> <ul class="col-sm-4 list-unstyled">
<li>&nbsp;</li>
<li><a href="http://mbb.zong.com.pk/MBB/MBB.aspx"><strong>Tablets</strong></a></li>
<li><a href="http://mbb.zong.com.pk/MBB/MBB.aspx"><strong>Software</strong></a></li>
<li><a href="http://mbb.zong.com.pk/MBB/MBB.aspx"><strong>Phones &amp; PDAs</strong></a></li>
<li><a href="http://mbb.zong.com.pk/MBB/MBB.aspx"><strong>Cameras</strong></a></li>
</ul>
</div>
</div>
</li>
</ul>
</li>
<li class="mega yamm-fw dropdown "
>
<a href="#"
data-toggle="dropdown" class="dropdown-toggle">
Html
</a>
<ul class="dropdown-menu ">
<li>
<!-- Content container to add padding -->
<div class="yamm-content clearfix">
<p class="col-sm-8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis.</p>
<p><img alt="" class="col-sm-4" src="http://mbb.zong.com.pk/MBB/MBB.aspx" /></p>
</div>
</li>
</ul>
</li>
<li class="mega yamm-fw dropdown "
>
<a href="#"
data-toggle="dropdown" class="dropdown-toggle">
Products
</a>
<ul class="dropdown-menu ">
<li>
<!-- Content container to add padding -->
<div class="yamm-content clearfix">
<div class="row">
<div class="col-md-3">
<div class="product" data-product-id="42">
<div class="image">
<span class="product_sale">
-10% </span>
<span class="product_sale popular">
Hot </span>
<a href="http://mbb.zong.com.pk/MBB/MBB.aspx">
<img class="thumb" src="http://mbb.zong.com.pk/MBB/MBB.aspx" alt="Apple Cinema 30&quot;" />
</a>
<div class="hover">
<div>
<a href="http://mbb.zong.com.pk/MBB/MBB.aspx">
<span class="add-to-cart" onclick="return addToCart('42'); return false"><i class="fa fa-shopping-cart"></i></span>
<span class="quickview"><i class="fa fa-search "></i></span>
</a>
</div>
</div>
</div>
<div class="actions clearfix">
<div class="name"><div><a href="http://mbb.zong.com.pk/MBB/MBB.aspx">Apple Cinema 30&quot;</a></div></div>
<div class="rating">
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
</div>
<div class="description">
The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed sp..</div>
<div class="price price_sale">
<span class="price-old">$122.00</span> <span class="price-new">$110.00</span>
</div>
<button class="btn btn-primary btn-sm" onclick="return addToCart('42');">Add to Cart</button>
</div>
</div>
</div>
<div class="col-md-3">
<div class="product" data-product-id="41">
<div class="image">
<a href="http://mbb.zong.com.pk/MBB/MBB.aspx">
<img class="thumb" src="http://mbb.zong.com.pk/MBB/MBB.aspx" alt="iMac" />
</a>
<div class="hover">
<div>
<a href="http://mbb.zong.com.pk/MBB/MBB.aspx">
<span class="add-to-cart" onclick="return addToCart('41'); return false"><i class="fa fa-shopping-cart"></i></span>
<span class="quickview"><i class="fa fa-search "></i></span>
</a>
</div>
</div>
</div>
<div class="actions clearfix">
<div class="name"><div><a href="http://mbb.zong.com.pk/MBB/MBB.aspx">iMac</a></div></div>
<div class="rating">
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
</div>
<div class="description">
Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo..</div>
<div class="price">
<p>$122.00</p>
</div>
<button class="btn btn-primary btn-sm" onclick="return addToCart('41');">Add to Cart</button>
</div>
</div>
</div>
<div class="col-md-3">
<div class="product" data-product-id="46">
<div class="image">
<span class="product_sale popular">
Hot </span>
<a href="http://mbb.zong.com.pk/MBB/MBB.aspx">
<img class="thumb" src="http://mbb.zong.com.pk/MBB/MBB.aspx" alt="Sony VAIO" />
</a>
<div class="hover">
<div>
<a href="http://mbb.zong.com.pk/MBB/MBB.aspx">
<span class="add-to-cart" onclick="return addToCart('46'); return false"><i class="fa fa-shopping-cart"></i></span>
<span class="quickview"><i class="fa fa-search "></i></span>
</a>
</div>
</div>
</div>
<div class="actions clearfix">
<div class="name"><div><a href="http://mbb.zong.com.pk/MBB/MBB.aspx">Sony VAIO</a></div></div>
<div class="rating">
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
</div>
<div class="description">
Unprecedented power. The next generation of processing technology has arrived. Built into the new..</div>
<div class="price">
<p>$1,202.00</p>
</div>
<button class="btn btn-primary btn-sm" onclick="return addToCart('46');">Add to Cart</button>
</div>
</div>
</div>
<div class="col-md-3">
<div class="product" data-product-id="30">
<div class="image">
<span class="product_sale">
-20% </span>
<span class="product_sale popular">
Hot </span>
<a href="http://mbb.zong.com.pk/MBB/MBB.aspx">
<img class="thumb" src="http://mbb.zong.com.pk/MBB/MBB.aspx" alt="Canon EOS 5D" />
</a>
<div class="hover">
<div>
<a href="http://mbb.zong.com.pk/MBB/MBB.aspx">
<span class="add-to-cart" onclick="return addToCart('30'); return false"><i class="fa fa-shopping-cart"></i></span>
<span class="quickview"><i class="fa fa-search "></i></span>
</a>
</div>
</div>
</div>
<div class="actions clearfix">
<div class="name"><div><a href="http://mbb.zong.com.pk/MBB/MBB.aspx">Canon EOS 5D</a></div></div>
<div class="rating">
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
<span class="fa"><i class="fa fa-star-o"></i></span>
</div>
<div class="description">
Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we'r..</div>
<div class="price price_sale">
<span class="price-old">$122.00</span> <span class="price-new">$98.00</span>
</div>
<button class="btn btn-primary btn-sm" onclick="return addToCart('30');">Add to Cart</button>
</div>
</div>
</div>
</div>
</div>
</li>
</ul>
</li>
<li class=" "
>
<a href="index8816.html?route=information/information&amp;information_id=4"
onclick="if (!isMobile()) location.href='index8816.html?route=information/information&amp;information_id=4'"
>
Service price list
</a>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div>
</div>
</div>
<div id="notification"></div>
<div class="page-container">
<div class="row">
<!--cols:12 -->
<div class="sequence-theme ">
<div class="sequence" id="sequence-seq_0">
<ul class="controls container">
<li class="sequence-prev"></li>
<li class="sequence-next"></li>
</ul>
<ul class="sequence-canvas">
<li onclick="window.location = '';" class="align-left" >
<div class="container">
<div class="container-row">
<div class="slide-img in-from-bottom slow delay1">
<img class="img-responsive" src="image/cache/catalog/lumia-cr-600x400.png" alt="Mobile ready" />
</div>
<div class="message-slide">
<h3 class="title in-from-left fast">Mobile ready</h3><br/> <h2 class="title in-from-right fast">NOKIA X2</h2> <div class="in-from-bottom fast delay2"> <p>easy reading and navigation&nbsp; across a wide range of devices (from mobile phones to desktop computer monitors)</p>
</div> <a class="in-from-bottom fast delay2 button" href="#">shop now &gt;</a> </div>
</div>
</div>
<img class="background" alt="Mobile ready" src="image/cache/catalog/slider-cr-1024x450.jpg" /> </li>
<li onclick="window.location = '';" class="align-right" >
<div class="container">
<div class="container-row">
<div class="message-slide">
<h3 class="title in-from-left fast">One page quick</h3><br/> <h2 class="title in-from-right fast">LENOVO TOUCH</h2> <div class="in-from-bottom fast delay2"> <p>Less abandoned carts, happier customers</p>
</div> <a class="in-from-bottom fast delay2 button" href="#">shop now &gt;</a> </div>
<div class="slide-img in-from-right slow delay1">
<img class="img-responsive" src="image/cache/catalog/windowstablet-cr-600x400.png" alt="One page quick" />
</div>
</div>
</div>
</li>
<li onclick="window.location = '';" class="align-center" >
<div class="container">
<div class="container-row">
<div class="message-slide">
<h3 class="title in-from-left fast">Built with</h3><br/> <h2 class="title in-from-right fast">Bootstrap 3</h2> <div class="in-from-bottom fast delay2"> <p>The most popular front-end framework for developing responsive, mobile first projects on the web</p>
</div> <a class="in-from-bottom fast delay2 button" href="#">shop now &gt;</a> </div>
</div>
</div>
<img class="background" alt="Built with" src="image/cache/catalog/slider-cr-1024x450.jpg" /> </li>
<li onclick="window.location = '';" class="align-center" >
<div class="container">
<div class="container-row">
<div class="message-slide">
<h3 class="title in-from-left fast">vimeo &amp; youtube</h3><br/> <h2 class="title in-from-right fast">Video slider</h2> <div class="in-from-bottom fast delay2"> </div> <a class="in-from-bottom fast delay2 button" href="#">shop now &gt;</a> </div>
</div>
</div>
<iframe class="background vimeo" src="http://player.vimeo.com/video/24253126?title=0&amp;byline=0&amp;portrait=0" allowfullscreen></iframe> </li>
</ul>
<!-- ul class="sequence-pagination">
<li><img src="images/tn-model1.png" alt="Model 1" /></li>
<li><img src="images/tn-model2.png" alt="Model 2" /></li>
<li><img src="images/tn-model3.png" alt="Model 3" /></li>
</ul -->
</div>
</div>
</div>
