<?php
	session_start();
	include_once './php/readAPI/conectAPI.php';
	include_once './php/style/style.php';
	$p = new app();
	$read = new api1();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--================================================================================on-font.===============-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icmin.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" media="screen" href="./login/demo/css/style.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="index.php" class="logo">
						<img src="images/logo_new.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Products</a>
								<ul class="sub-menu">
									<li><a href="product_apple.php">APPLE</a></li>
									<li><a href="#">XIAOMI</a></li>
									<li><a href="product_samsung.php">SAMSUNG</a></li>
									<li><a href="#">REALME</a></li>
									<li><a href="product_oppo.php">OPPO</a></li>
									<li><a href="#">MORE</a></li>
								</ul>
							</li>
							<li>
								<a href="product.php">Accessories</a>
								<ul class="sub-menu">
									<li><a href="#">PhoneCase</a></li>
									<li><a href="#">HeadPhones</a></li>
									<li><a href="#">Battery Charger Cases</a></li>
								</ul>
							</li>
							<li>
								<a href="blog.php">Blog</a>
							</li>

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>	
					<!-- Cart -->
					<div class="wrap-header-cart js-panel-cart">
						<div class="s-full js-hide-cart"></div>

						<div class="header-cart flex-col-l p-l-65 p-r-25">
							<div class="header-cart-title flex-w flex-sb-m p-b-8">
								<span class="mtext-103 cl2">
									Your Cart
								</span>
								<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
									<i class="zmdi zmdi-close"></i>
								</div>
							</div>
							
							<div class="header-cart-content flex-w js-pscroll">
								<ul class="header-cart-wrapitem w-full">
							<?php
								$id = $_SESSION["maND"];
								$read->readCart("https://dk-store102.tk/php/api/exportCart.php?id=$id");
							?>
						</div>
					</div>
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m m-l-100">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?php echo $_SESSION['number_cart']; ?>">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
						<?php
							if(isset($_SESSION['current_user'])){
								echo '<ul class="nav nav-pills">
								<li class="nav-item dropdown">
								<a href="login.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 dropdown-toggle" data-toggle="dropdown" data-notify="0"><span>'.$_SESSION['name'].'</span></a>
									<div class="dropdown-menu ml-3">
									<a class="dropdown-item" href="?ping=1">Xuất mã đăng nhập</a>
									<a class="dropdown-item" href="?ping=2">Quản lý tài khoản</a>
									<a class="dropdown-item" href="order_management">Quản lý Đơn hàng</a>
									<a class="dropdown-item" href="https://dk-store102.tk/login_gg/logout.php">Logout</a></div>
								</li>
								</ul>';
							}else{
								echo '<a href="login.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" data-notify="0"><i class="zmdi zmdi-account"></i></a>';
							}
						?>
						
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="images/logo_new.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
			<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?php echo $_SESSION['number_cart']; ?>">
							<a href="shoping-cart.php"><i class="zmdi zmdi-shopping-cart"></i></a>
						</div>
						<?php
							if(isset($_SESSION['current_user'])){
								echo '<ul class="nav nav-pills">
								<li class="nav-item dropdown">
								<a href="login.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 dropdown-toggle" data-toggle="dropdown" data-notify="0"><span>'.$_SESSION['name'].'</span></a>
									<div class="dropdown-menu ml-3">
									<a class="dropdown-item" href="?ping=1">Xuất mã đăng nhập</a>
									<a class="dropdown-item" href="?ping=2">Quản lý tài khoản</a>
									<a class="dropdown-item" href="order_management">Quản lý Đơn hàng</a>
									<a class="dropdown-item" href="https://dk-store102.tk/login_gg/logout.php">Logout</a></div>
								</li>
								</ul>';
							}else{
								echo '<a href="login.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" data-notify="0"><i class="zmdi zmdi-account"></i></a>';
							}
						?>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>
		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
				</li>

				<li>
					<a href="product.php">Shop</a>
					<ul class="sub-menu-m">
						<li><a href="#">APPLE</a></li>
						<li><a href="#">XIAOMI</a></li>
						<li><a href="#">SAMSUNG</a></li>
						<li><a href="#">REALME</a></li>
						<li><a href="#">OPPO</a></li>
						<li><a href="#">MORE</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.php">Accessories</a>
					<ul class="sub-menu-m">
						<li><a href="#">PhoneCase</a></li>
						<li><a href="#">HeadPhones</a></li>
						<li><a href="#">Battery Charger Cases</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>	
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>

				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="#">Products Compare</a>
				</li>
			</ul>
		</div>
		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/cara_03.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									IPHONE 13 PROMAX
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									XIAOMI
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									SAMSUNG
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/cara_01.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									IPHONE 13 PROMAX
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									IPHONE 13 PROMAX
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									IPHONE 13 PROMAX
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/cara_02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men Collection 2018
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									New arrivals
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/banner_01.jpg" alt="IMG-BANNER">

						<a href="product.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									IPHONE 
								</span>

								<span class="block1-info stext-102 trans-04">
									13 PROMAX
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									APPLE
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/banner_02.jpg" alt="IMG-BANNER">

						<a href="product.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									XIAOMI
								</span>

								<span class="block1-info stext-102 trans-04">
									NOTE 10
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									XIAOMI
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/banner_03.jpg" alt="IMG-BANNER">

						<a href="product.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									SAMSUNG
								</span>
								<span class="block1-info stext-102 trans-04">
									S50
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									SAMSUNG
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Shop
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".APPLE">
						Iphone
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".SAMSUNG">
						Samsung
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".OPPO">
						Oppo
					</button>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<form>
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>
							<div class="size-204 respon6-next">
								<div class="rs1-select2 bor8 bg0">
									<select class="js-select2" name="sort">
										<option value = "1">Default</option>
										<option value = "2">Popularity</option>
										<option value = "3">Average rating</option>
										<option value = "4">Newness</option>
									</select>
									<div class="dropDownSelect2"></div>
								</div>		
							</div>
						</div>
						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>
							<div class="size-204 respon6-next">
								<div class="rs1-select2 bor8 bg0">
									<select class="js-select2" name="price">
										<option value = "1">All</option>
										<option value = "2">High to Low</option>
										<option value = "3">Low to High</option>
									</select>
									<div class="dropDownSelect2"></div>
								</div>		
							</div>
						</div>
						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>
							<div class="size-204 respon6-next">
								<div class="rs1-select2 bor8 bg0">
									<select class="js-select2" name="color">
										<option value = "1">All</option>
										<option value = "2">Red</option>
										<option value = "3">Black</option>
										<option value = "4">Blue</option>
										<option value = "5">White</option>
										<option value = "6">Grey</option>
										<option value = "7">Green</option>
									</select>
									<div class="dropDownSelect2"></div>
								</div>		
							</div>
						</div>
						<button name = "button" value = "filter" class="flex-c-m stext-101 cl0 size-101 bg1 m-t-40 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
							Lọc
						</button>
						
					</div>
					</form>
				</div>
			</div>
			<div class="row isotope-grid">
				<?php
					if(isset($_REQUEST["search"]))
					{
						$search = $_REQUEST["search"];
						$read->readProduct("https://dk-store102.tk/php/api/exportProducts.php?TenSanPham=$search");
					}
					else if(isset($_REQUEST["sort"]) && isset($_REQUEST["price"]) && isset($_REQUEST["color"]))
					{
						if($_REQUEST["price"] != 1 && $_REQUEST["color"] ==1 && $_REQUEST["sort"] == 1)
						{
							$price = $_REQUEST["price"];
							$read->readProduct("https://dk-store102.tk/php/api/export_AIP.php?filter=1&price=$price");
						}else if($_REQUEST["color"] != 1)
						{
							$read->readProduct("https://dk-store102.tk/php/api/export_AIP.php?filter=2");
						}else if($_REQUEST["sort"] != 1)
						{
							$read->readProduct("https://dk-store102.tk/php/api/export_AIP.php?filter=3");
						}
					}
					else if(isset($_REQUEST["button"]) ){
						if(isset($_SESSION['current_user'])){
							switch ($_REQUEST["button"]) {
								case 'add':
									{
										$id_sp = $_REQUEST['IP'];
										$id_nd = $_SESSION['maND'];
										$p->Interactive("INSERT INTO `giohang` (`ID_ND`, `ID_CTSP`, `SoLuong`) VALUES ('$id_nd', '$id_sp', '1');");
										$read->readProduct("https://dk-store102.tk/php/api/exportProducts.php");
										$_SESSION['number_cart']=$_SESSION['number_cart']+1;
										echo'<script>alert ("you add to cart complete!!!"); window.location.replace("index.php"); </script>';
										break;
									}
								case 'delete':{
									$id = $_REQUEST['ID'];
									$id_nd = $_SESSION['maND'];
									$p->Interactive("delete from giohang where ID_ND = $id_nd &&ID_CTSP=$id");
									echo'<script>alert ("you are delete complete!!!"); window.location.replace("index.php"); </script>';
									$_SESSION['number_cart']=$_SESSION['number_cart']-1;
									break;
								}
							}
						}else{
							echo'<script>alert ("You need to login to order!!!"); window.location.replace("login.php"); </script>';
						}
						
					}
					else{
						if(isset($_REQUEST['load'])){
							switch ($_REQUEST['load']) {
								case 'loadmore':{
									$read->readProduct("https://dk-store102.tk/php/api/exportProducts.php?load=1");
									break;
								}
									
							}
						}else{
							$read->readProduct("https://dk-store102.tk/php/api/exportProducts.php");
						}
					}
                ?>
			</div>
			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="?load=loadmore" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Support
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								tư vấn mua hàng
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								đóng góp ý kiến - khiếu nại
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Chính sách
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								chính sách đổi - trả
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Chính sách bảo mật
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Chính sách bảo hành
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Tổng đài hỗ trợ
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								1800 77 1243
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								0967 122 784
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								0123 456 789
							</a>
						</li>
					</ul>

					
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						liên kết
					</h4>
					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>
			</div>

			
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>