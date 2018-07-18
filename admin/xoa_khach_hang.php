<?php
session_start();

include_once("controllers/c_khach_hang.php");
$ckh =new C_khach_hang();

$ckh->XoaKhachHang();


?>