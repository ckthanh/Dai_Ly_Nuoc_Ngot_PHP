<?php
include_once("controllers/c_khach_hang.php");
$ckh = new C_khach_hang();

if(isset($_GET["key"]))
{
    $key = $_GET["key"];
    if($key =='dat-hang')
    {
        $ckh->Dang_Ky();
    }
}






?>