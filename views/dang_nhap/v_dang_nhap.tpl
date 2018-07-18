        <!--Phần đăng nhập-->

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6" style="margin:0 auto">
                        <div class="page-login mt-5 mb-5" style="border: 1px solid #e1e1e1;padding:22px 30px; ">
                            <div class="login">
                                <div class="loginhead text-sm-center mb-5">
                                    <h2 style="font-size:1.57143em">ĐĂNG NHẬP TÀI KHOẢN</h2>
                                   
                                </div>
                                <base href="http://localhost:81/dai_ly_nuoc_ngot/" />
                                <div class="logincontent text-sm-center">
                                    <form action="dang-nhap" method="post" onsubmit="return kiemtradangnhap(this)">

                                        <input type="text" name="tai_khoan" id="tai_khoan" class="form-control" placeholder="Tài khoản" autofocus>

                                        <input type="password" name="mat_khau" id="mat_khau" class="form-control" placeholder="Mật khẩu">

                                        <button type="submit" name="btnDangNhap" id="btnDangNhap" style="background-color: transparent;padding:10px;cursor: pointer;">ĐĂNG NHẬP</button>

                                    </form>
                                </div>
                                <br>

                                <div class="loginfoot text-sm-center text-xs-center">
                                    <p>Chưa có tài khoản, đăng ký
                                        <a href="dang-ky">
                                            <span style="color:brown;text-decoration-color: red;text-decoration: underline">tại đây</span>
                                        </a>
                                    </p>
                                    <p>Quên mật khẩu?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        <!--Hết phần đăng nhập-->
<script>
    function kiemtradangnhap(f)
    {
        tai_khoan = f.tai_khoan.value;
        if(tai_khoan=="")
        {
            alert("Vui lòng nhập tên");
            f.tai_khoan.focus();
            return false;
        }
        
        mat_khau = f.mat_khau.value;
        if(mat_khau == "")
        {
            alert("Vui lòng nhập mật khẩu");
            f.mat_khau.focus();
            return false;
        }
    }
</script>