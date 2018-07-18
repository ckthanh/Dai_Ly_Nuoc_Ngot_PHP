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
                            <h2>Quản Lý Khách Hàng
                             
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
                                <span class="section">Chi Tiết Khách Hàng</span>
                                <!--ma_khach_hang-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ma_khach_hang">Mã khách hàng
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="ma_khach_hang" name="ma_khach_hang" class="form-control col-md-7 col-xs-12" type="text" disabled  value="{$dskhtm->ma_khach_hang}">
                                    </div>
                                </div>

                                <!--ho_ten-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ho_ten">Họ tên
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                         <input type="text" id="ho_ten" name="ho_ten" value="{$dskhtm->ho_ten}" required="required" class="form-control col-md-7 col-xs-12">    
                                    </div>
                                </div>

                                <!--so_dien_thoai-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="so_dien_thoai">Số điện thoại
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="so_dien_thoai" name="so_dien_thoai" value="{$dskhtm->so_dien_thoai}" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--dia_chi-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dia_chi">Địa chỉ
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                         <input type="text" id="dia_chi" name="dia_chi" value="{$dskhtm->dia_chi}" required="required" class="form-control col-md-7 col-xs-12">    
                                       
                                    </div>
                                </div>
                                
                                <!--email-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="email" type="email" name="xuat_xu" value="{$dskhtm->email}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--mat_khau-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mat_khau">Mật khẩu
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="mat_khau" name="mat_khau" required="required" value="{$dskhtm->mat_khau}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--trang_thai-->
                                <div class="item form-group">
                                    <label for="san_xuat" class="control-label col-md-3">Trạng thái</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="trang_thai" type="text" name="trang_thai" value="{$dskhtm->trang_thai}" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>

                                        
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">                                       
                                        <input type="submit" value="Cập nhật" name="btnCapNhat" onclick="return kiemtradulieu();">
                                        <input type="button" onclick="window.location='khach_hang.php'" value="Quay về">
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