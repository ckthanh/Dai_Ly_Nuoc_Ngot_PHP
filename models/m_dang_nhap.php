<?php

include_once("models/database.php");

class M_dang_nhap extends database
{
    //Load only one that match 
    public function KiemTraDangNhap($tai_khoan,$mat_khau)
    {
        $sql = "select * from ckt_khachhang where tai_khoan=? and mat_khau=?";
        $this->setQuery($sql);
        $param = array($tai_khoan,md5($mat_khau));

        //Return only one that match
        return $this->loadRow($param);
    }
    
}



?>