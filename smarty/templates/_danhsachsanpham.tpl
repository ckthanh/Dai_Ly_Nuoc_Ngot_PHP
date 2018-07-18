	<!--DANH SÁCH SẢN PHẨM-->
		<!-- views/trang_chu/v_menu_san_pham.tpl  -->
		<div class="container dssanpham">
			<hr class="mb-4">
			<div class="row">
				<div class="col-md-12">
					<h4 class="mb-4 text-sm-center" style="font-size:24px;font-weight: 600;text-align:center">DANH SÁCH SẢN PHẨM</h4>
				</div>
			</div>


			<div class="row">
				<div class="col-sm-12">
					<!--Tách 1-->
					<ul class="menusanpham">
						<li class="active">
							<a href="index.php?ma_loai=1">NƯỚC NGỌT</a>
						</li>
						<li>
							<a href="index.php?ma_loai=2">NƯỚC SUỐI</a>
						</li>
						<li>
							<a href="index.php?ma_loai=3">NƯỚC TRÁI CÂY</a>
						</li>
						<li>
							<a href="index.php?ma_loai=4">BIA</a>
						</li>
					</ul>

					<div class="hienthimenusanpham">
						<!--Tách 2 include file="views/trang_chu/v_noidung_menu_san_pham.tpl"-->
						<div class="row">

							<!--Một sản phẩm-->
							<div class="col-md-3" id="motsanpham">
								<div class="hienthimenusanphamhead">
									<a href="chi_tiet_san_pham.html" style="position: relative;text-decoration: none;">
										<img src="public/images/hinh_nuoc_ngot/revive.png" alt="" style="width:100%;">
									</a>
								</div>
								<div class="hienthimenusanphamcontent">
									<a href="chi_tiet_san_pham.html" style="text-decoration: none;">
										<h3 style="font-size: 13px;font-weight: 600">Revive chanh muối</h3>
									</a>
									<p style="margin-top:-18px">90.000vnđ/thùng</p>
								</div>
								<!--Xem chi tiết Button-->
								<div class="buttonhienthimenusanpham">
									<button type="button">
										<a href="chi_tiet_san_pham.html">Xem chi tiết</a>
									</button>
								</div>
							</div>
							<!--Hết Một sản phẩm-->

			


						</div>
					</div>
				</div>
			</div>

			.
		</div>

		<!--HẾT DANH SÁCH SẢN PHẨM-->

