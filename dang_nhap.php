<?php
session_start();

include_once("controllers/c_dang_nhap.php");


$cdn = new C_dang_nhap();

// if(isset($_GET["key"]))
// {
//     $cdn->ThoatDangNhap();

// }


$cdn->Hien_Thi_Giao_Dien_Dang_Nhap();


?>