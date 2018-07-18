<?php
@session_start();

class C_dang_nhap
{
    public function __construct()
    {
        include("models/m_dang_nhap.php");
        include("controllers/Smarty_dai_ly_nuoc_ngot.php");
    }

    public function Hien_Thi_Giao_Dien_Dang_Nhap()
    {
        $mdn = new M_dang_nhap();
        //Model
        if(isset($_POST["btnDangNhap"]))
        {
           // echo "<script>alert('Success')</script>";

            //Get Data
            $tai_khoan = $_POST["tai_khoan"];
              // echo $tai_khoan;
            $mat_khau = $_POST["mat_khau"];
              //  echo $mat_khau;
            
            $kq = $mdn->KiemTraDangNhap($tai_khoan,$mat_khau);

            if($kq)
            {
                $_SESSION["khach_hang"] = $kq;
                $_SESSION["ho_ten"]  = $kq->ho_ten;
                $_SESSION["so_dien_thoai"]  = $kq->so_dien_thoai;
                $_SESSION["dia_chi"]  = $kq->dia_chi;
                $_SESSION["email"]  = $kq->email;
             
               header("location:san-pham/");
            }
            else
            {
                echo "<script>alert('Tài khoản hay mật khẩu không đúng');</script>";
            }
        }

        //View
      
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/dang_nhap/v_dang_nhap.tpl";
        $smarty->assign("view",$view);
        $smarty->display("dang_nhap/_layoutdangnhap.tpl");
    }


    public function ThoatDangNhap()
    {
        session_destroy();
        header("location:trang-chu/");
    }
}



?>