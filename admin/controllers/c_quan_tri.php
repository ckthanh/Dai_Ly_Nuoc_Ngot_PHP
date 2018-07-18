<?php
session_start();
include("models/m_user.php");
include("controllers/Smarty_dai_ly_nuoc_ngot.php");
class C_quan_tri
{
    // public function __construct()
    // {
    //     include("models/m_user.php");
    //     include("controllers/Smarty_dai_ly_nuoc_ngot.php");
    // }

    public function Hien_Thi_Dang_Nhap()
    {
        if(isset($_POST["dangNhap"]))
        {
            $taiKhoan = $_POST["taiKhoan"];
            $matKhau= $_POST["matKhau"];

            //Qua 1 bước kiểm tra và lưu Session
            $this->Luu_Dang_Nhap($taiKhoan,$matKhau);

            if($_SESSION["ho_Ten"])
            {
                //View
                $smarty = new Smarty_dai_ly_nuoc_ngot();
                $smarty->display('_layoutadminchinh.tpl');
            }
            else
            {
                $_SESSION["error"] = "Thông tin đăng nhập không hợp lệ";
                header("location:login.php");
            }
        }
    }


    public function Luu_Dang_Nhap($tk,$mk)
    {
        $muser = new M_user();

        $user = $muser->Doc_User_TaiKhoan_MatKhau($tk,$mk);

        $_SESSION["ho_Ten"]=$user->ho_Ten;

    }

    public function Thoat_Dang_Nhap()
    {
        session_destroy();
        header("location:login.php");
    }

}


?>