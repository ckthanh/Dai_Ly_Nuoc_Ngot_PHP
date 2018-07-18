<!-- Header -->
<div class="thongtinlienlac " style="background-color:#105689;">
	<div class="container">
		<div class="row">

			<div class="col-sm-6 col-xs-12 text-xs-center text-sm-left">
				<span style="color:#fff !important;">
					<i class="fa fa-mobile-phone" aria-hidden="true" style="font-size:25px"></i>
					Điện Thoại: (028)39143734
				</span>
			</div>

			<div class="col-sm-6 col-xs-12  text-xs-center text-sm-right">
				<div class="btn-group float-sm-right">
					<button type="button" style="background-color:transparent !important;color:#fff;border:1px solid #fff;" class="btn btn-secondary dropdown-toggle"
					 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Chọn ngôn ngữ
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<button class="dropdown-item" type="button">Tiếng Việt</button>
						<button class="dropdown-item" type="button">Tiếng Anh</button>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Hết Header -->

<!--Head-->
<div class="container">
	<div class="head mt-2">
		<div class="row">
			<div class="col-sm-3">
				<a href="trang-chu/" ><img id="logo" src="public/images/logo/logo.png" style="width:233px;height:105px;object-fit:cover" /></a>
			</div>

			<div class="col-sm-4">
				<!-- Search -->
				<div class="divsearch text-sm-center">
					<!--	<a href="javascript:void(0)" onclick="ThemClassDropDownSearch()">
											<i class="fa fa-search"></i>
										</a>
									-->
					<!--Traditional Search Items-->

					<form action="tim-kiem-san-pham/" method="post" id="frm_tim_kiem_san_pham" onsubmit="return kiemtradulieu(this)">
						<input type="text" id="gtTim" name="gtTim" style="text-align:center;" placeholder="Tìm Kiếm Sản Phẩm" autofocus>
						<input type="submit" name="btnTimSP" value="Tìm" id="btnTimSP">
						<!--<a href="javascript:void(0)" onclick="tim_kiem_san_pham.php?" >Tìm </a>-->
					</form>

				</div>
				<!-- Hết Search -->
			</div>

		<base href="http://localhost:81/dai_ly_nuoc_ngot/" />
			<div class="col-sm-5">
				<!-- Đăng Nhập/ Đăng Ký -->
				{if isset($smarty.session.khach_hang)}
					<div class="divdangnhap">
						<span>Chào {$smarty.session.ho_ten},
							<a href='dang-xuat'>Thoát</a>
						</span>

						<!--Giỏ Hàng-->
						<a href="gio-hang/">
							<i class="fa fa-shopping-cart" aria-hidden="true">
								<sup>
									<b style="color:navy" id="so_san_pham">
										{if isset($smarty.session.gio_Hang)} {$smarty.session.gio_Hang|@count} {else} 0 {/if}
									</b>
								</sup>
							</i>
						</a>
					</div>
				{else}
					<div class="divdangnhap float-right">
						<a href="javascript:void(0)" onclick="HienThiKhungDangNhap()">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</a>

						<ul id="dropdown-dangnhap" class="recentactive">
							<li class="khungdangnhaphead  text-xs-center text-sm-center">
								<span>
									<a href="dang-ky">Đăng ký</a>
									/
									<a href="dang-nhap">Đăng nhập</a>
								</span>

							</li>

							
							<!--	
								<li class="khungdangnhapbody">
									<form accept-charset="UTF-8" id="user-login" action="dang-nhap" method="post" onsubmit="return kiemtradangnhap(this)">
										<input type="text" name="tai_khoan" class="form-control" placeholder="Tài khoản" autofocus>
										<input type="password" name="mat_khau" class="form-control" placeholder="Mật Khẩu">

										<button type="submit" id="btn-special">
											Đăng Nhập
											<i class="fa fa-angle-right"></i>
										</button>
									</form>
								</li>
							-->
						</ul>

						<!--Giỏ Hàng-->
						<a href="gio-hang/">
							<i class="fa fa-shopping-cart" aria-hidden="true">
								<sup>
									<b style="color:navy" id="so_san_pham">
										{if isset($smarty.session.gio_Hang)} {$smarty.session.gio_Hang|@count} {else} 0 {/if}
									</b>
								</sup>
							</i>
						</a>
						<!--	<span id="soluongdat"> </span>-->
						<!--Hết Giỏ Hàng-->

					</div>
				{/if}
				<!-- Hết Đăng Nhập/ Đăng Ký -->



			</div>
		</div>
	</div>
</div>
<!--Hết Head-->


<!--Navbar-->
<div class="thanhnavbar">
	<div class="container">

		<hr>
		<nav class="navbar navbar-light navbar-expand-lg navbar-expand-md	 navbartop">
			<div class="container">

				<a class="navbar-brand" href="trang-chu/">
					{*
					<img src="public/layout/images/logo/logo.png" alt="" srcset="">*}
					<i class="fa fa-home"></i>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<base href="http://localhost:81/dai_ly_nuoc_ngot/" />
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="trang-chu/">TRANG CHỦ
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="gioi-thieu/">GIỚI THIỆU</a>
						</li>

						<li class="nav-item ">
							<a class="nav-link" href="san-pham/">SẢN PHẨM</a>

							<ul class="dSSP">

							</ul>
						</li>

						{*
						<li class="nav-item">
							<a class="nav-link" href="#">TIN TỨC </a>
						</li>
						*}

						<li class="nav-item">
							<a class="nav-link" href="#">LIÊN HỆ</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">KHUYẾN MÃI</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</div>
<!--Hết Navbar-->



<script>
	function kiemtradulieu(f) {
		gtTim = f.gtTim.value;
		if (gtTim == '') {
			alert("Vui lòng nhập giá trị");
			f.gtTim.focus();
			return false;
		}


	}


	$(document).ready(function () {
		/* Placeholder Typewriter */
		var placeholderText = [
			"Bạn muốn tìm gì?",
			"Nước Khoáng?",
			"Nước Ngọt?",
			"Nước Trái Cây Có Cồn",
			"Bia"
		];
		$('#gtTim').placeholderTypewriter({
			text: placeholderText,
			delay: 80,
			pause: 1000
		});
	});

	function kiemtradangnhap(f) {
		tai_khoan = f.tai_khoan.value;
		if (tai_khoan == "") {
			alert("Vui lòng nhập tên");
			f.tai_khoan.focus();
			return false;
		}

		mat_khau = f.mat_khau.value;
		if (mat_khau == "") {
			alert("Vui lòng nhập mật khẩu");
			f.mat_khau.focus();
			return false;
		}
	}

</script>