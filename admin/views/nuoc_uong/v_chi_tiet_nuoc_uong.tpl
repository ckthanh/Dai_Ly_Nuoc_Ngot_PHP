<div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                  
                </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Quản Lý Nước Uống
                             
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </li>

                                <li>
                                    <a class="close-link">
                                        <i class="fa fa-close"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <!--Form-->
                            <form action="#" method="post" class="form-horizontal"   enctype="multipart/form-data" >
                                <span class="section">Chi Tiết Sản Phẩm</span>
                                <!--ma_nuoc_uong-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ma_nuoc_uong">Mã nước uống
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="ma_nuoc_uong" name="ma_nuoc_uong" class="form-control col-md-7 col-xs-12" type="text" disabled  value="{$dsnutm->ma_nuoc_uong}">
                                    </div>
                                </div>

                                <!--ten_loai_nuoc_uong-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="loai_nuoc_uong">Tên loại nước uống
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="text-input small-input" type="text" id="loai_nuoc_uong" name="loai_nuoc_uong" />
                                            {foreach $dslnu as $loai_nuoc_uong}
                                               <option value="{$loai_nuoc_uong->ma_loai_nuoc_uong}">{$loai_nuoc_uong->ten_loai_nuoc_uong}</option>
                                            {/foreach}
                                            </select>
                                    </div>
                                </div>

                                <!--ten_nuoc_uong-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ten_nuoc_uong">Tên nước uống
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="ten_nuoc_uong" name="ten_nuoc_uong" value="{$dsnutm->ten_nuoc_uong}" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--thanh_phan-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thanh_phan">Thành phần
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="thanh_phan" id="thanh_phan" class="ckeditor" >
                                            {$dsnutm->thanh_phan}
                                        </textarea>
                                       
                                    </div>
                                </div>
                                
                                <!--xuat_xu-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="xuat_xu">Xuất xứ
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="xuat_xu" type="text" name="xuat_xu" value="{$dsnutm->xuat_xu}" class="optional form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--dung_tich-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dung_tich">Dung tích
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="dung_tich" name="dung_tich" required="required" value="{$dsnutm->dung_tich}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--san_xuat-->
                                <div class="item form-group">
                                    <label for="san_xuat" class="control-label col-md-3">Sản xuất</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="san_xuat" type="text" name="san_xuat" value="{$dsnutm->san_xuat}" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>

                                <!--don_gia-->
                                <div class="item form-group">
                                    <label for="don_gia" class="control-label col-md-3 col-sm-3 col-xs-12">Đơn giá</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="don_gia" type="text" name="don_gia" value="{$dsnutm->don_gia}" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>

                                <!--don_gia_khuyen_mai-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="don_gia_khuyen_mai">Đơn giá khuyến mãi
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="don_gia_khuyen_mai" name="don_gia_khuyen_mai" value="{$dsnutm->don_gia_khuyen_mai}" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--khuyen_mai-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="khuyen_mai">Khuyến mãi
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="khuyen_mai" name="khuyen_mai" value="{$dsnutm->khuyen_mai}" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--hinh-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hinh">Hình
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="hinh" name="hinh" class="form-control col-md-7 col-xs-12"> 
                                        
                                        {if $dsnutm->hinh !=""}
                                             <img src="../public/images/hinh_nuoc_uong/{$dsnutm->hinh}" alt="" style="width:200px;height:100px">
                                        {/if}
                                    </div>
                                </div>
                                
                                    
                                  <!--ngay_cap_nhat-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dvt">Ngày cập nhật
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="ngay_cap_nhat" name="ngay_cap_nhat" value="{$dsnutm->ngay_cap_nhat}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>


                                <!--dvt-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dvt">Đơn vị tính
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="dvt" name="dvt" value="{$dsnutm->dvt}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                             
                             
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">                                       
                                        <input type="submit" value="Cập nhật" name="btnCapNhat" onclick="return kiemtradulieu();">
                                        <input type="button" onclick="window.location='nuoc_uong.php'" value="Quay về">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function kiemtradulieu()
        {
            var ma_loai_nuoc_uong = document.getElementById("ma_loai_nuoc_uong");
            if(ma_loai_nuoc_uong.value == "")        
            {
                alert("Vui lòng nhập mã loại");
                ma_loai_nuoc_uong.focus();
                return false;
            }

            return true;
        }
    </script>