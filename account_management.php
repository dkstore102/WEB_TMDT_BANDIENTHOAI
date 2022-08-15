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
	<title>Shoping Cart</title>
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
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
    .in1{
        border-style: groove;
    }
</style>
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
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
									<li><a href="#">APPLE</a></li>
									<li><a href="#">XIAOMI</a></li>
									<li><a href="#">SAMSUNG</a></li>
									<li><a href="#">REALME</a></li>
									<li><a href="#">OPPO</a></li>
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
								$read->readCart("https://dk-store102.tk/php/api/exportCart.php");
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
									<a class="dropdown-item" href="account_management.php?ping=1">Xuất mã đăng nhập</a>
									<a class="dropdown-item" href="account_management.php?ping=2">Quản lý tài khoản</a>
									<a class="dropdown-item" href="order_management.php">Quản lý Đơn hàng</a>
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
					<a href=""><i class="zmdi zmdi-shopping-cart"></i></a>
				</div>
				<?php
					if(isset($_SESSION['current_user'])){
						echo '<ul class="nav nav-pills">
						<li class="nav-item dropdown">
						<a href="login.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 dropdown-toggle" data-toggle="dropdown" data-notify="0"><span>'.$_SESSION['name'].'</span></a>
							<div class="dropdown-menu ml-3">
							<a class="dropdown-item" href="account_management.php?ping=1">Xuất mã đăng nhập</a>
							<a class="dropdown-item" href="account_management.php?ping=2">Quản lý tài khoản</a>
							<a class="dropdown-item" href="order_management.php">Quản lý Đơn hàng</a>
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

	
	<!-- breadcrumb -->
	<div class="container p-t-100 p-b-50">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<span class="stext-109 cl4">
				Account Management
			</span>
		</div>
	</div>
	<!-- Shoping Cart -->
	<section class="sec-product-detail bg0 p-t-20 p-b-20">
		<div class="container">
		<form class="bg0 p-t-15 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-lg-7 col-xl-3 m-lr-auto m-b-50 mt-2 bor14">
					<div class="bor10 m-r-40 m-lr-0-xl bor14">
						<div class="list-group">
							<a href="?ping=1" class="list-group-item bg6 list-group-item-action">Xuất mã đăng nhập</a>
							<a href="?ping=2" class="list-group-item bg6 list-group-item-action">Quản lý thông tin</a>
							<a href="?ping=3" class="list-group-item bg6 list-group-item-action">Thay đổi mật khẩu</a>
						</div>
					</div>
				</div>
				<div class="col-lg-11 col-xl-9 m-lr-auto m-b-50 bg6 bor14 pt-3 pb-3 pl-5 pr-5">
				<?php
						$user =$_SESSION['username'];
						if(!isset($_REQUEST['ping'])||$_REQUEST['ping']==2){
							if(isset($_REQUEST['button']))
							{
								switch($_REQUEST['button'])
								{
									case 'update':
										{
											$username = $_SESSION['username'];
											$HoDem = $_REQUEST['fname'];
											$Ten = $_REQUEST['lname'];
											$DiaChi = $_REQUEST['address'];
											$Phone = $_REQUEST['phone'];
											$Email = $_REQUEST['email'];
											if($HoDem!=''&&$Ten!=''&&$DiaChi!=''&&$Phone!=''&&$Email!=''){
												$p->Interactive("update nguoidung SET HoDem = '$HoDem', Ten = '$Ten', DiaChi = '$DiaChi', SoDienThoai = '$Phone', Email = '$Email' where User = '$username'");
												$read->readCustomer("https://dk-store102.tk/php/api/exportCustomer.php?username=$user");
											}else{
												echo'<script>alert ("Incomplete information!!!"); window.location.replace("account_management.php"); </script>';
											}
											break;
										}
								}
							}
							else{
								$read->readCustomer("https://dk-store102.tk/php/api/exportCustomer.php?username=$user");
							}
							
						}else if($_REQUEST["ping"]==1){
							echo '<div class="row"> <div class="col-2"></div><div class="col-8 text-center"><a class="text-center" href="./gbrqrcode/'.$_SESSION['username'].'.png" download><img style="width:100%" src="./gbrqrcode/'.$_SESSION['username'].'.png" alt=""></a></div></div>';
							echo '<div class="row"> <div class="col-2"></div><button class="btn bg7 col-8 "><a class="text-center" href="./gbrqrcode/'.$_SESSION['username'].'.png" download>Download</a></button></div>';
						}else if($_REQUEST["ping"]==3){
							echo '<h4 class="mtext-109 cl2 p-b-30 text-center ">
									Infomation Customer
								</h4>

								<div class="flex-w flex-t bor12 p-b-13">
								</div>

								<form action="#" class="col-12 ">
									<div class="flex-w flex-t bor12 p-t-15 p-b-30 ">
										<div class="p-r-18 p-r-0-sm w-full-ssm w-full w-full-lg">
											<div class="p-t-15">
											<div class="form-group row">
											<label class="col-2" for="email">Old Pass:</label>
											<div class="col-2"></div>
											<input type="password" class="form-control col-8"  placeholder="Old Password ... " name="oldpass" value="">
										</div>
										<div class="form-group row">
											<label class="col-2" for="email">New Pass:</label>
											<div class="col-2"></div>
											<input type="password" class="form-control col-8"  placeholder=" New Password ... " name="newpass" value="">
										</div>
										<div class="form-group row">
											<label class="col-2" for="email">Re-New Pass:</label>
											<div class="col-2"></div>
											<input type="password" class="form-control col-8"  placeholder="Re-New Password ... " name="repass" value="">
										</div>
									</div>

								<div class="flex-w flex-t p-t-27 p-b-33">
									
								</div>

								<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04" name="button" value="RePass">
									Repass
								</button>
							</form>';
						}
						switch ($_REQUEST['button']) {
							case 'RePass':{
								$pass=$_REQUEST['oldpass'];
								$check = $read->CheckPass("https://dk-store102.tk/php/api/exportCustomer.php?username=$user&pass=$pass",$pass);	
								if($check == 1){
									$newpass = $_REQUEST['newpass'];
									$repass = $_REQUEST['repass'];
									if($newpass == $repass && $newpass!='')
									{
										$p->Interactive("update nguoidung SET Pass = '$newpass' where User = '$user'");
										echo'<script>alert ("Re Pass Seccess!!!"); window.location.replace("account_management.php?ping=3"); </script>';
									}else{
										echo'<script>alert ("trống pass!!!"); window.location.replace("account_management.php?ping=3"); </script>';
									} 
								}else{
									echo'<script>alert ("Sai Pass!!!"); window.location.replace("account_management.php?ping=3"); </script>';
								}
								break;
							}
						}
					?>
				</div>
				</div>
			</div>
		</div>
	</form>
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
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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