<?php
session_start();

include("controllers/c_loai_nuoc_uong.php");
$clnu = new C_loai_nuoc_uong();
$clnu->CapNhatLoaiNuocUong();

?>