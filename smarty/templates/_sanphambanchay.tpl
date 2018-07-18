
		<!--Sản Phẩm Bán Chạy-->
		<div class="container spbanchay mt-4 mb-4">
			<hr class="mb-5">
			<h3  class="mb-4 text-sm-center" style="font-size:24px;font-weight: 600">SẢN PHẨM BÁN CHẠY</h3>


			<div class="owl-carousel sliderWrapper owl-theme owl-loaded">
				<div class="owl-stage-outer">
					<div class="owl-stage">

						<div class="owl-item">
							<div class="item item-owl">
								<div class="box-wrap">
									<div class="box-imag">
										<img src="public/images/hinh_nuoc_uong/lavie6l.png" alt="" style="width:100%;height:180px;">
									</div>
									<div class="box-content">
										<h3 style="font-size: 15px;font-weight: 600">Lavie 6l</h3>
										<p>100.000vnđ/thùng</p>
									</div>
								</div>
							</div>
						</div>
						<div class="owl-item">
							<div class="item item-owl">
								<div class="box-wrap">
									<div class="box-imag">
										<img src="public/images/hinh_nuoc_uong/dasani500.png" alt="" style="width:100%;height:180px;">
									</div>
									<div class="box-content">
										<h3 style="font-size: 15px;font-weight: 600">Dasani 500ml</h3>
										<p>90.000vnđ/thùng</p>
									</div>
								</div>
							</div>
						</div>
						<div class="owl-item">
							<div class="item item-owl">
								<div class="box-wrap">
									<div class="box-imag">
										<img src="public/images/hinh_nuoc_uong/lavie500.png" alt="" style="width:100%;height:180px;">
									</div>
									<div class="box-content">
										<h3 style="font-size: 15px;font-weight: 600">Lavie 500ml</h3>
										<p>180.000vnđ/thùng</p>
									</div>
								</div>
							</div>
						</div>
						<div class="owl-item">
							<div class="item item-owl">
								<div class="box-wrap">
									<div class="box-imag">
										<img src="public/images/hinh_nuoc_uong/aquafina500.png" alt="" style="width:100%;height:180px;">
									</div>
									<div class="box-content">
										<h3 style="font-size: 15px;font-weight: 600">Aquafina 500ml</h3>
										<p>90.000vnđ/thùng</p>
									</div>
								</div>
							</div>
						</div>
						<div class="owl-item">
							<div class="item item-owl">
								<div class="box-wrap">
									<div class="box-imag">
										<img src="public/images/hinh_nuoc_uong/aquafina5.png" alt="" style="width:100%;height:180px;">
									</div>
									<div class="box-content">
										<h3 style="font-size: 15px;font-weight: 600">Aquafina 5l</h3>
										<p>90.000vnđ/thùng</p>
									</div>
								</div>
							</div>
						</div>
						<div class="owl-item">
							<div class="item item-owl">
								<div class="box-wrap">
									<div class="box-imag">
										<img src="public/images/hinh_nuoc_uong/aquafina15.png" alt="" style="width:100%;height:180px;">
									</div>
									<div class="box-content">
										<h3 style="font-size: 15px;font-weight: 600">Aquafina 1.5l</h3>
										<p>90.000vnđ</p>
									</div>
								</div>
							</div>
						</div>
				
						

					</div>
				</div>

				<div class="owl-nav">
					<div class="owl-prev">
						<i class="fa fa-arrow-left    "></i>
					</div>
					<div class="owl-next">
						<i class="fa fa-arrow-right    "></i>
					</div>
				</div>
				<div class="owl-dots">
					<div class="owl-dot active">
						<span></span>
					</div>
					<div class="owl-dot">
						<span></span>
					</div>
					<div class="owl-dot">
						<span></span>
					</div>
				</div>
				<script>
					jQuery(function ($) {
						$('.owl-carousel').owlCarousel({
							loop: true,
							margin: 10,
							nav: true,
							autoplay: true,
							responsive: {
								0: {
									items: 1
								},
								600: {
									items: 3
								},
								1000: {
									items: 5
								}
							}
						})

						var owl = $('.sliderWrapper');
						owl.owlCarousel();
						// Go to the next item
						$('.owl-next').click(function () {
							owl.trigger('next.owl.carousel');
						})
						// Go to the previous item
						$('.owl-prev').click(function () {
							// With optional speed parameter
							// Parameters has to be in square bracket '[]'
							owl.trigger('prev.owl.carousel', [300]);
						})

					});
				</script>

				<!-- 			
						<div class="owl-nav">
							<div class="customPrevBtn">
								<i class="fa fa-angle-left"></i>
							</div>
							<div class="customNextBtn">
								<i class="fa fa-angle-right"></i>
							</div>
						</div> -->



			</div>


		</div>
		<!--Hết Sản Phẩm Bán Chạy -->