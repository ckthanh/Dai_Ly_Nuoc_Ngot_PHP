<?php
include_once("controllers/c_gio_hang.php");
$cgh = new C_gio_hang();


if(isset($_POST["btnXoaMH"]))
{
    //lấy session giỏ hàng về
    $giohang = $cgh->lay_Gio_Hang();

    foreach ($giohang as $key => $value) 
    {
        $cgh->xoa_Mat_Hang($key,$_POST[$key]);
    }
}

if(isset($_POST["btnCapNhat"]))
{
    $giohang = $cgh->lay_Gio_Hang();
    
    foreach ($giohang as $key => $value)
    {
       //Số lượng mới 
       //Do số lượng sẽ thay đổi nên khai báo biến nhận đối tượng
       $soluongmoi = $_POST["soluong".$key];    
       
       $cgh->cap_Nhat_Gio_Hang($key, $soluongmoi,$_POST["dongia".$key]);
    }
}



$cgh->xem_Gio_Hang();


?>