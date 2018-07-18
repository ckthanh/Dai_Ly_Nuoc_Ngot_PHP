<?php
@session_start();

include_once("controllers/c_gio_hang.php");
$cgh = new C_gio_hang();

//Lấy dữ liệu về
$maSP = $_POST['id'];
$so_Luong = ((int)$_POST['soluong']);
$donGia = ((double)$_POST['dongia']);

if($so_Luong>=0 && $donGia >0)
    $cgh->them_Gio_Hang($maSP,$donGia,$so_Luong);


//Lưu Session Storage
$arrGioHang = array('sl'=>$cgh->so_Luong(), 'st'=>number_format($cgh->thanh_Tien()));

echo json_encode($arrGioHang);





?>