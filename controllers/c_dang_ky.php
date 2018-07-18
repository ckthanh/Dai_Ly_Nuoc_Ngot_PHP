<?php
@session_start();

class C_dang_ky 
{
    public function __construct()
    {
        include("models/m_dang_ky.php");
        include("controllers/Smarty_dai_ly_nuoc_ngot.php");
        include("controllers/c_gmail.php");
    }

    public function Hien_Thi_Giao_Dien_Dang_Ky()
    {
        $mdk = new M_dang_ky();
        //Model
        if(isset($_POST["btnDangKy"]))
        {
            //Check button
                // echo "<script>alert('Success')</script>";
                // return false;
            //Get data
            $ho_ten = $_POST["ho_ten"];
           // echo $ho_ten;
            $so_dien_thoai = $_POST["so_dien_thoai"];
            //echo $so_dien_thoai;
            $dia_chi = $_POST["dia_chi"];
           // echo $dia_chi;
           $email = $_POST["email"];
           // echo $email;
            $tai_khoan = $_POST["tai_khoan"];
           // echo $tai_khoan;
            $mat_khau = $_POST["mat_khau"];
           // echo $mat_khau;
          
            //Check whether user available or not.
            $ketquaduyet = $mdk->Kiem_Tra_Ten_Dang_Nhap($tai_khoan);
            
            
            if($ketquaduyet==0)
            {
                //echo "<script>alert('Tài khoản chưa tồn tại')</script>";
                $kq = $mdk->Dang_Ky($ho_ten,$so_dien_thoai,$dia_chi,$email,$tai_khoan,$mat_khau);

                //Send Mail
                if($kq)
                {
                    $cgmail = new C_GuiMail();
                    $cgmail->Gui_Mail_Dang_Ky($ho_ten,$email,$tai_khoan,$mat_khau);
                    echo "<script>alert('Đăng ký thành công');location='dang-nhap'</script>";
                }
            }
            else
            {   
                echo "<script>alert('Tài khoản đã tồn tại');window.location='.'</script>";
            }
        }

        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/dang_ky/v_dang_ky.tpl";
        $smarty->assign("view",$view);
        $smarty->display('dang_ky/_layoutdangky.tpl');
    }

}


?>