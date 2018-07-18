<?php
session_start();

include("controllers/c_san_pham.php");
$csp = new C_san_pham();

$csp->TimSanPham();


?>