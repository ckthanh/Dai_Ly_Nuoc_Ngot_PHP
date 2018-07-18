<?php


include("controllers/c_quan_tri.php");
$cqt = new C_quan_tri();

if(isset($_GET["func"]))
{
    $cqt->Thoat_Dang_Nhap();
}

$cqt->Hien_Thi_Dang_Nhap();

?>