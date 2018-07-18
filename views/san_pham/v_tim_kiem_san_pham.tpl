<div class="container">
    {if $dsnuTheoGiaTriTim|@count >0}
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
            <div class="bg-info mt-5" style="padding: 15px;height: 80px;line-height: 40px;">
                <p class="text-white text-center">
                    Có {$dsnuTheoGiaTriTim|@count} kết quả tìm kiếm với từ khóa "<span style="text-transform:uppercase">{$gtTim}</span>"
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div id="hienthimenusanpham">
                <div class="row">
                    {foreach $dsnuTheoGiaTriTim as $dsnuocuong}
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3" id="motsanpham">
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
                                    </button>
                                    <!--Phần mua hàng-->

                                </div>
                                
                                <div class="muahang">
                                    <!--Lấy đơn giá-->
                                    <input type="hidden" id="dongia{$dsnuocuong->ma_nuoc_uong}" value="{$dsnuocuong->don_gia}">
                                    <!--Lấy số lượng-->
                                    <input type="hidden" id="soluong{$dsnuocuong->ma_nuoc_uong}" value="1">
                                    <!--Lấy key-->
                                    <a class="button-1" id="{$dsnuocuong->ma_nuoc_uong}" href="javascript:void(0)">
                                        Mua hàng
                                        <i class="fa fa-shopping-cart" style="font-size:18px;"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Hết Một sản phẩm-->
                    {/foreach}
                </div>
               <!-- <div style="clear:both; text-align:center">{$thanhpt}</div>-->
            </div>
        </div>
    </div>
    <!--<div style="clear:both; text-align:center">{$thanhpt}</div>-->
    {else}
     <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
            <div class="bg-info mt-5" style="padding: 15px;height: 80px;line-height: 40px;">
                <p class="text-white text-center">
                  Không có kết quả tìm kiếm với từ khóa "<span style="text-transform:uppercase">{$gtTim}</span>"
                </p>
            </div>
        </div>
    </div>
    {/if}
</div>