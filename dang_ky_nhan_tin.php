<?php

include_once("models/m_dang_ky_nhan_tin.php");
include_once("controllers/c_gmail.php");

if(isset($_POST["btnDKTin"]))
{
    $thu =  $_POST["Th_Tin"];
    //Kiểm tra tính hợp lệ của mail
    if(filter_var($thu,FILTER_VALIDATE_EMAIL))
    {
        $mdknt = new M_dang_ky_nhan_tin();
        $gmail = new C_GuiMail();
        $kq = $mdknt->Dang_ky_nhan_tin($thu);

        if($kq)
        {
            $gmail->Guil_Mail_Dang_Ky_Mail($thu);
            echo "<script>alert('Đăng ký nhận mail thành công');window.location='.'</script>";
        }
    }

}








?>