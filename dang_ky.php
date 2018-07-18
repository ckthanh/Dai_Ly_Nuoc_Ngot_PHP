<?php
session_start();

include_once("controllers/c_dang_ky.php");


$cdk = new C_dang_ky();
$cdk->Hien_Thi_Giao_Dien_Dang_Ky();

?>