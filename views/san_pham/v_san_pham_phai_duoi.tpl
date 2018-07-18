 <div id="hienthimenusanpham">
    <div class="row  ">
        {foreach $danh_sach_nuoc_uong as $dsnuocuong} 
        <div class="col-sm-4" id="motsanpham">
            <div class="hienthimenusanphamhead">
                <a href="chi-tiet-san-pham/{$dsnuocuong->ma_nuoc_uong}-{$dsnuocuong->ten_khong_dau}" style="position: relative;text-decoration: none;">
                    <img src="public/images/hinh_nuoc_uong/{$dsnuocuong->hinh}" alt="" style="width:100%;height:200px">
                </a>
                <div class="hienthimenusanphamcontent">
                    <a href="chi-tiet-san-pham/{$dsnuocuong->ma_nuoc_uong}" style="text-decoration: none;">
                        <h3 style="font-size: 15px;font-weight: 600">{$dsnuocuong->ten_nuoc_uong}</h3>
                    </a>
                    <p style="margin-top:-8px;color:#0071bb;">{$dsnuocuong->don_gia} vnđ/{$dsnuocuong->dvt}</p>
                    <!--Xem chi tiết Button-->
                    <div class="buttonhienthimenusanpham">
                        <button type="button">
                            <a href="chi-tiet-san-pham/{$dsnuocuong->ma_nuoc_uong}-{$dsnuocuong->ten_khong_dau}">Xem chi tiết</a>
                        </button>
                    </div>
                    <div class="muahang">
                            <!--Lấy đơn giá--> 
                            <input type="hidden" id="dongia{$dsnuocuong->ma_nuoc_uong}" value="{$dsnuocuong->don_gia}">
                            <!--Lấy số lượng-->
                            <input type="hidden" id="soluong{$dsnuocuong->ma_nuoc_uong}" value="1" >
                            <!--Lấy key-->
                            <a  class="button-1" id="{$dsnuocuong->ma_nuoc_uong}"  href="javascript:void(0)" >
                               Mua Hàng <i class="fa fa-shopping-cart" style="font-size:18px;"></i>
                            </a>
                    </div>     
                </div>
            </div>
        </div>            
         {/foreach} 
    </div>
    
    <!--<div class="mt-4" style="clear:both; text-align:center">{$thanhpt}</div>-->
</div>