	<!--Footer-->
<div class="footer" id="footer">
		<div class="container ">
			<hr class="mt-4" id="thanhngangfooter1">
			<div class="Footer1 mt-4 ">
				<div class="row">

					<!--VỀ CHÚNG TÔI-->
					<div class="col-md-3 col-xs-12  mt-4 ">
						<h3 class="mb-4" style="font-size:16px;font-weight: 600">VỀ CHÚNG TÔI</h3>
						<p>
							<i class="fa fa-map mr-2" "></i>
								115 Ký Con, Phường Nguyễn Thái Bình, Quận 1
							</p>
							<p>
								<i class="fa fa-envelope mr-2 ""></i>
							dailynuocngot115@gmail.com
						</p>
						<p>
							<i class="fa fa-phone mr-2"></i>
							(028)39143734
						</p>
					</div>
					<!--HẾT VỀ CHÚNG TÔI-->

					<!--ĐĂNG KÝ NHẬN TIN-->
					<div class="col-md-3  col-xs-12  mt-4">
						<h3 class="mb-4" style="font-size:16px;font-weight: 600">ĐĂNG KÝ NHẬN TIN</h3>

						<form action="dang_ky_nhan_tin.php" method="post">
							<input type="text" id="Th_Tin" autofocus placeholder="abc@gmail.com">

							<input type="submit" class="btn btn-outline-info mt-2" id="btnDKTin" value="Đăng ký" style="cursor:pointer">
						</form>
						
					</div>
					<!--HẾT ĐĂNG KÝ NHẬN TIN-->

					<!--HỖ TRỢ-->
					<div class="col-md-3  col-xs-12  mt-4">

						<h3 class="mb-4" style="font-size:16px;font-weight: 600">HỖ TRỢ</h3>
						<p>
							<a href="#" style="text-decoration: none;"> Về chúng tôi</a>
						</p>

						<p>
							<a href="#" style="text-decoration: none;"> Trung tâm hỗ trợ</a>
						</p>
						<p>
							<a href="#" style="text-decoration: none;">Chính sách bảo mật</a>
						</p>
						<p>
							<a href="#" style="text-decoration: none;">Chính sách thanh toán</a>
						</p>
						<p>
							<a href="#" style="text-decoration: none;">Chính sách giao hàng</a>
						</p>

					</div>
					<!--HẾT HỖ TRỢ-->

					<!--MẠNG XÃ HỘI-->
					<div class="col-md-3  col-xs-12  mt-4">

						<h3 class="mb-4" style="font-size:16px;font-weight: 600">KẾT NỐI VỚI CHÚNG TÔI </h3>

					</div>
					<!--HẾT MẠNG XÃ HỘI-->


				</div>
			</div>
		</div>

		<div class="container">

			<div class="Footer2 mb-4" style="position: relative;">
				<hr class="mb-4 mt-5">
				<div class="row">
					
					<div class="footer2trai col-xs-12">
						© ĐẠI LÝ BIA NƯỚC NGỌT
					</div>

					<div class="footer2phai col-xs-12">
						<a href="javascript:void(0)" onclick="LenDauTrang()" style="position: absolute;right:0;text-decoration: none;">
							<i class="fa fa-arrow-up"></i>
							
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--Hết Footer-->



	</div>
</div> 
	 
	 
	
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="public/layout/js/jquery.zoom.js" type="text/javascript"></script>
	<script type="text/javascript" src="public/layout/js/placeholderTypewriter.js"></script>
	<script type="text/javascript" src="public/layout/js/WebNuocNgot.js"></script>
	 <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>
	<script>
		$(document).ready(function(){
			$('img#chitietsanpham')
			.wrap('<span style="display:inline-block"></span>')
			.css('display', 'block')
			.parent()
			.zoom();
		});
    
	</script>
	
</body>
</html>