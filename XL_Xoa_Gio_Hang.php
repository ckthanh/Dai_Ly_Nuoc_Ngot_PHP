<?php
@session_start();

include_once("controllers/c_gio_hang.php");
$cgh = new C_gio_hang();
$cgh->xoa_Gio_Hang();

?>