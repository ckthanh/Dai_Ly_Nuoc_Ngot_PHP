<?php /* Smarty version Smarty-3.1.18, created on 2018-06-28 13:57:07
         compiled from "views\dang_nhap\v_dang_nhap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30405b250e35d26132-72597952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03b734576dabff77c7c43dac1769574ada533f9a' => 
    array (
      0 => 'views\\dang_nhap\\v_dang_nhap.tpl',
      1 => 1530186982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30405b250e35d26132-72597952',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b250e35d7c046_86070232',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b250e35d7c046_86070232')) {function content_5b250e35d7c046_86070232($_smarty_tpl) {?>        <!--Phần đăng nhập-->

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
</script><?php }} ?>
