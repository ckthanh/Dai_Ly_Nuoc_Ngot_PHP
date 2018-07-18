<?php
  ini_set("display_errors",0);
  @session_start();

  if($_SESSION['ho_Ten'])
  {
      header("location:quan_tri.php");
  }
  if($_SESSION['error'])
  {
      $error = $_SESSION['error'];
      $_SESSION['error']="";
  }
?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đại Lý Bia-Nước Ngọt 115 Ký Con </title>

    <!-- Bootstrap -->
    <link href="public/layout/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/layout/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/layout/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="public/layout/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="public/layout/css/custom.min.css" rel="stylesheet">

    <style>
    	#btnDangNhap
    	{
    		    padding: 8px 9px !important;
    	}

    	#btnDangKy
    	{
    		 padding: 8px 16px !important;
    		     margin-left: 132px !important;
    	}
    </style>
  </head>

  <body class="login">
    <div>
      <!-- <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a> -->

      <div class="login_wrapper">
        <div class="animate form">
          <section class="login_content">

            <form method="POST" action="quan_tri.php" name="frm_Dang_Nhap" onsubmit="return kiemTraDuLieuNhap(this)">
              <h1 >ĐĂNG NHẬP</h1>
              <div>
                <input type="text" name="taiKhoan" class="form-control" placeholder="Tên Đăng Nhập" autofocus="" />
              </div>
              <div>
                <input type="password" name="matKhau" class="form-control" placeholder="Mật Khẩu"  />
              </div>

              <div>
                <?php
                  echo $error;
                ?>
              </div>

              <div>
               <!-- <a class="btn btn-default submit" name="dangNhap" href="index.html">Đăng nhập</a>-->
                <input type="submit"  class="button"   value="Đăng nhập" name="dangNhap" />
                <a class="reset_pass" href="#">Quên mật khẩu?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Thành viên mới?
                  <a href="javascript:void(0)" onclick="window.location='#signup'" class="to_register"> Tạo tài khoản </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Đại Lý Nước Ngọt !</h1>
                  <p>©2018 Bản quyền thuộc Đại Lý Nước Ngọt 115 Ký Con</p>
                </div>
              </div>
            </form>

          </section>
        </div>

        <!-- <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="quan_tri.php">
              <h1>Tạo Tài Khoản</h1>
              <div>
                <input type="text" class="form-control" placeholder="Tài Khoản"  name="taiKhoan" autofocus="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Mật Khẩu"  name="matKhau"  />
              </div>
              <div>
                   <input class="button" id="btnDangKy" type="submit" value="Đăng ký" name="dangKy" />
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Là thành viên ?
                  <a href="javascript:void(0)" class="to_register" onclick="window.location='#signin'"> Đăng nhập </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                 <h1><i class="fa fa-paw"></i> Đại Lý Nước Ngọt !</h1>
                  <p>©2018 Bản quyền thuộc Đại Lý Nước Ngọt 115 Ký Con</p>
                </div>
              </div>
            </form>
          </section>
        </div> -->
      </div>
    </div>

    <script>
      function kiemTraDuLieuNhap(f)
      {
          taiKhoan = f.taiKhoan.value;
          if(taiKhoan =="")
          {
            alert("Vui lòng nhập tài khoản");
            taiKhoan.focus();
            return false;
          }

          matKhau = f.matKhau.value;
          if(matKhau=="")
          {
            alert("Vui lòng nhập mật khẩu");
            matKhau.focus();
            return false;
          }
      }
    </script>

   
  </body>
</html>
