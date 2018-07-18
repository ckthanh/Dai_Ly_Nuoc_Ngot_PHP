<?php
session_start();


include_once("controllers/c_san_pham.php");

$csp = new C_san_pham();

$csp->San_Pham();

?>