<?php
session_start();

include_once("controllers/c_trang_chu.php");
$ctc = new C_trang_chu();
$ctc->Hien_Giao_Dien();


?>