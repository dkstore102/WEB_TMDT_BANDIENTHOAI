
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
							<li>
								<a href="#">Products Compare</a>
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
								$read->readCart("https://dk-store102.tk/php/api/exportCart.php");
							?>
						</div>
					</div>
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?php echo $_SESSION['number_cart']; ?>">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="login.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" data-notify="0">
							<i class="zmdi zmdi-account"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">	
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?php echo $_SESSION['number_cart']; ?>">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
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


	<!-- breadcrumb -->
	<div class="container p-t-100">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<form action="#" method="POST">
						<div class="m-l-25 m-r--38 m-lr-0-xl">
							<div class="wrap-table-shopping-cart">
								<table class="table-shopping-cart table ">
								<thead>
									<tr class="table_head text-center">
										<th class="text-center">IMAGE</th>
										<th class="text-center">Product NAME</th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>				
								<tbody>
									<?php
										$id = $_SESSION["maND"];
										$read->readCartDetail("https://dk-store102.tk/php/api/exportCart.php?id=$id");
									?>
								</tbody>
								</table>
							</div>
							<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
								<div class="flex-w flex-m m-r-20 m-tb-5 bg-secondary">
								</div>
							</div>
						</div>
					</form>
				</div>
				<?php
					if(isset($_REQUEST["button"])){
						switch ($_REQUEST["button"]) {
							case 'update':
								{
									$id_sp = $_REQUEST["ID"];
									$soluong= $_REQUEST['num-product'];
									$id_nd = $_SESSION['maND'];
									$p->Interactive("update giohang set SoLuong=$soluong where ID_ND = $id_nd && ID_CTSP = $id_sp");
									echo'<script>alert ("you are update complete!!!"); window.location.replace("shoping-cart.php"); </script>';
									break;
								}
							case 'delete':{
								$id = $_REQUEST['ID'];
								$id_nd = $_SESSION['maND'];
								$p->Interactive("delete from giohang where ID_ND=$id_nd&&ID_CTSP=$id");
								$_SESSION['number_cart']=$_SESSION['number_cart']-1;
								echo'<script>alert ("you are delete complete!!!"); window.location.replace("shoping-cart.php"); </script>';
								break;
							}
							case 'checkout':{
								if($_SESSION['nums']==0){
									echo'<script>alert ("not found products in Order!!!!!!"); window.location.replace("shoping-cart.php"); </script>';
								}else{
									$add = $_REQUEST["address"];
									$phone = $_REQUEST["phone"];
									$tongtien = $_SESSION['tongtien'] + 350000;
									if($add !='' && $phone!=''){
										$id_nd = $_SESSION['maND'];
										$p->Interactive("INSERT INTO `donhang` (`TrangThai`, `NgayLap`, `TongDon`, `DiaChi`, `SoDienThoai`, `HinhThucThanhToan`, `ID_ND`) VALUES (1,NOW(),$tongtien,'$add',$phone,1,$id_nd)");
										$p->Interactive("INSERT INTO chitietdonhang(ID_DH,ID_CTSP,SoLuong) select dh.ID_DH,gh.ID_ctsp,gh.SoLuong from giohang gh join nguoidung nd on gh.ID_ND=nd.ID_ND join donhang dh on dh.ID_ND=nd.ID_ND where dh.ID_DH = (select max(ID_DH) from donhang)");
										$p->Interactive("UPDATE chitietsanpham ctsp join chitietdonhang ctdh on ctsp.ID_CTSP=ctdh.ID_CTSP join donhang dh on dh.ID_DH=ctdh.ID_DH SET ctsp.SoLuong = (ctsp.SoLuong - ctdh.SoLuong) where dh.ID= (select max(ID_DH) from donhang)");
										$p->Interactive("DELETE from giohang where ID_ND =$id_nd");
										$IDDH = $p->exportNumOrder("select max(ID_DH) as ID_DH from donhang");
										$_SESSION['number_cart']=0;
										echo'<script>alert ("you order complete !!!"); window.location.replace("https://dk-store102.tk/vnpay_php/index.php?ID='.$IDDH.'&tongtien='.$tongtien.'"); </script>';
									}else{
										echo'<script>alert ("you check infomation shipping !!!");</script>';
									}
								}
								break;
							}
						}
					}
				?>
				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									<?php echo $_SESSION['tongtien']; ?>  VNĐ
								</span>
							</div>
						</div>

						<form action="#">
							<div class="flex-w flex-t bor12 p-t-15 p-b-30">
								<div class="w-full-ssm">
									<span class="stext-200 cl2">
										Infomation Shipping:
									</span>
								</div>

								<div class="p-r-18 p-r-0-sm w-full-ssm">
									<p class="stext-111 cl6 p-t-2">
									</p>
									
									<div class="p-t-15">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Họ Tên ..." name="name">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Địa chỉ ... " name="address">
										</div>
										<div class="form-group">
											<input type="phone" class="form-control" placeholder="Phone number ..." name="phone">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email ... " name="email">
										</div>
										<div class="form-group">
											<input type="test" class="form-control" readonly="readonly"  placeholder="phí ship ... " name="ship" value="35000">
										</div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-t p-t-27 p-b-33">
								<div class="size-208">
									<span class="mtext-101 cl2">
										Total:
									</span>
								</div>
								<div class="size-209 p-t-1">
									<?php echo $_SESSION['tongtien'] + 350000; ?>  VNĐ
								</div>
							</div>

							<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04" name="button" value="checkout">
								Proceed to Checkout
							</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</form>
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