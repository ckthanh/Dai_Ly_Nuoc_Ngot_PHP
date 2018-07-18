        <!--Phần đăng ký-->
 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6" style="margin:0 auto">
                        <div class="page-login mt-5 mb-5" style="border: 1px solid #e1e1e1;padding:22px 30px; ">
                            <div class="login">
                                <div class="loginhead text-sm-center">
                                    <h2 style="font-size:1.57143em">ĐĂNG KÝ TÀI KHOẢN</h2>
                                    <p>Qúy khách vui lòng điền chính xác thông tin để nhận được đầy đủ quyền lợi, thông tin Ưu đãi dành riêng cho khách hàng</p>
                                </div>

                                <div class="logincontent text-sm-center">
                                    <form  method="post" action="dang-ky"  onsubmit="return kiemtradangky(this)" name="frm_dang_ky">

                                        <input type="text" name="ho_ten" id="ho_ten" class="form-control" placeholder="Họ Tên" autofocus>

                                        <input type="text" name="so_dien_thoai"  id="so_dien_thoai" class="form-control" placeholder="Số điện thoại">

                                        <input type="text" name="dia_chi" id="dia_chi" class="form-control" placeholder="Địa chỉ">

                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">

                                        <input type="text" name="tai_khoan" id="tai_khoan" class="form-control" placeholder="Tài khoản">

                                        <input type="password" name="mat_khau" id="mat_khau" class="form-control" placeholder="Mật khẩu">

                                        <button type="submit" id="btnDangKy" name="btnDangKy" style="background-color: transparent;padding:10px;cursor: pointer;">ĐĂNG KÝ</button>
                                    </form>
                                </div>
                                <br>

                                <div class="loginfoot text-sm-center text-xs-center">
                                    <p>Đã có tài khoản, đăng nhập
                                        <a href="dang-nhap">
                                            <span style="color:brown;text-decoration-color: red;text-decoration: underline">tại đây</span>
                                        </a>
                                    </p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <script>
    
        function isMobileValid(phoneNum) {
            var re = /^(090|091|092|093|094|095|096|097|098|099|0120|0121|0122|0123|0124|0125|0126|0127|0128|0129|0160|0161|0162|0163|0164|0165|0166|0167|0168|0169|0190|0191|0192|0193|0194|0195|0196|0197|0198|0199|0188)\d+$/;
            if (phoneNum.match(re)) {
                var mobileValidRegexPattern = '090|091|092|093|094|095|096|097|098|099|0120|0121|0122|0123|0124|0125|0126|0127|0128|0129|0160|0161|0162|0163|0164|0165|0166|0167|0168|0169|0190|0191|0192|0193|0194|0195|0196|0197|0198|0199|0188';
                var mobileValids = mobileValidRegexPattern.split('|');

                for (var i = 0; i < mobileValids.length; i++) {
                    var ext = mobileValids[i];
                    var phoneExt = '';
                    var restNum = '';
                    if (phoneNum.length > ext.length) {
                        phoneExt = phoneNum.substring(0, ext.length);
                        restNum = phoneNum.substring(ext.length);
                    }

                    if (ext == phoneExt && restNum.length == 7) {
                        return true;
                    }
                }
                return false;
            }
            else {
                return false;
            }
        }

        function check_mumberphone(phone) {
            if (isMobileValid($.trim(phone.replace('-',''))) == false){
                $("#warning_phone").css('display','block');
                f.so_dien_thoai.focus();
            }else{	
                $("#warning_phone").css('display','none');
                $('#checkbullet').show();
                $('#checkbullet').fadeOut(2000);
            }
        } 

        function kiemtradangky(f)
        {
            ho_ten = f.ho_ten.value;
            if(ho_ten =="")
            {
                alert("Vui lòng nhập Tên");
                f.ho_ten.focus();
                return false;
            }

            so_dien_thoai = f.so_dien_thoai.value;
            if(so_dien_thoai == '')
            {
                alert("Vui lòng nhập số điện thoại");
                f.so_dien_thoai.focus();
                return false;
            }
            if(isNaN(so_dien_thoai))
            {
                 alert("Vui lòng nhập số");
                f.so_dien_thoai.focus();
                return false;
            }
            if(isMobileValid($.trim(so_dien_thoai.replace("-",""))) == false)
            {
                $("#warning_phone").css('display','block');
                f.so_dien_thoai.focus();
                return false;
            }

            dia_chi = f.dia_chi.value;
            if(dia_chi =='') 
            {
                alert("Vui lòng nhập địa chỉ");
                f.dia_chi.focus();
                return false;
            }

            email = f.email.value;
            if(email=='')
            {
                alert("Vui lòng nhập email");
                f.email.focus();
                return false;
            }

            tai_khoan=f.tai_khoan.value;
            if(tai_khoan=="")
            {
                alert("Vui lòng nhập tài khoản");
                f.tai_khoan.focus();
                return false;
            }

            mat_khau=f.mat_khau.value;
            if(mat_khau =="")
            {
                alert("Vui lòng nhập mật khẩu");
                f.mat_khau.focus();
                return false;
            }


        }
    </script>

        <!--Hết phần đăng ký-->