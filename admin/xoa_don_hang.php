<?php
session_start();

include_once("controllers/c_don_hang.php");
$cdh= new C_don_hang();

$cdh->XoaDonHang();

?>