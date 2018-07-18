<?php
session_start();

include_once("controllers/c_nuoc_uong.php");

$cnu = new C_nuoc_uong();

$cnu->Sua_nuoc_uong();


?>