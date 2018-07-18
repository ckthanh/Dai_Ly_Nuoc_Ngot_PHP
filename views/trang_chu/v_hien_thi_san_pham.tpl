
<div class="row">
	<div class="col-sm-12">
		{* Tách 2 *}
			{block name="menusanpham"}{include file="views/trang_chu/v_menu_san_pham.tpl"}{/block}

		<div id="hienthimenusanpham" >
			<div class="row mt-3">
					{foreach $dsnutheoma as $dsnuocuong }
						<div class="col-md-3" id="motsanpham">
							<div class="hienthimenusanphamhead">
								<a href="{$dsnuocuong->ma_nuoc_uong}-{$dsnuocuong->ten_khong_dau}" style="position: relative;text-decoration: none;">
									<img src="public/images/hinh_nuoc_uong/{$dsnuocuong->hinh}" alt="" style="width:100%;height:200px">
								</a>
						
							<div class="hienthimenusanphamcontent">
								<a href="{$dsnuocuong->ma_nuoc_uong}-{$dsnuocuong->ten_khong_dau}" style="text-decoration: none;">
									<h3 style="font-size: 15px;font-weight: 600">{$dsnuocuong->ten_nuoc_uong}</h3>
								</a>
								<p style="margin-top:-8px;color:#0071bb;">{$dsnuocuong->don_gia} vnđ/{$dsnuocuong->dvt}</p>

						
								<!--Xem chi tiết Button-->
								<div class="buttonhienthimenusanpham">
									<button type="button">
										<a href="{$dsnuocuong->ma_nuoc_uong}-{$dsnuocuong->ten_khong_dau}">Xem chi tiết</a>
										<!--	<a href="chi_tiet_san_pham.php?ma_nuoc_uong={$dsnuocuong->ma_nuoc_uong}-ten_khong_dau={$dsnuocuong->ten_khong_dau}">Xem chi tiết</a>-->
									</button>      
										<!--Phần mua hàng-->
									       
				                                 
								</div>
								<div class="muahang">
                                        <!--Lấy đơn giá--> 
                                        <input type="hidden" id="dongia{$dsnuocuong->ma_nuoc_uong}" value="{$dsnuocuong->don_gia}">
                                        <!--Lấy số lượng-->
                                        <input type="hidden" id="soluong{$dsnuocuong->ma_nuoc_uong}" value="1" >
                                        <!--Lấy key-->
                                        <a  class="button-1" id="{$dsnuocuong->ma_nuoc_uong}"  href="javascript:void(0)" >
                                           Mua hàng <i class="fa fa-shopping-cart" style="font-size:18px;"></i>
                                        </a>
                                </div>     
								
							</div>
							</div>	
						</div>
						<!--Hết Một sản phẩm-->	
					{/foreach}		
			</div>
						  
            <div style="clear:both; text-align:center" class="mt-4">{$thanhpt}</div>
		</div>
     </div>
</div>



