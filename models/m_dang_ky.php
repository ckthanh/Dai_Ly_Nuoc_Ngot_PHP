<?php
include_once("models/database.php");


class M_dang_ky extends database
{
    //Check whether user available or not
    public function Kiem_Tra_Ten_Dang_Nhap($tai_khoan)
    {
        $sql = "select * from ckt_khachhang where tai_khoan=?";
        $this->setQuery($sql);

        //Return affected row
        //If ==0 --> false
        //If >0 --> true
        $param = array($tai_khoan);

        //Check all data in database
        return count($this->loadAllRows($param));
    }

    public function Dang_Ky($ho_ten,$so_dien_thoai,$dia_chi,$email,$tai_khoan,$mat_khau)
    {
        $sql = "INSERT INTO CKT_KHACHHANG(ho_ten,so_dien_thoai,dia_chi,email,tai_khoan,mat_khau) VALUES(?,?,?,?,?,?)";
        $this->setQuery($sql);

        $param = array($ho_ten,$so_dien_thoai,$dia_chi,$email,$tai_khoan,md5($mat_khau));
        return $this->execute($param);
    }
}


?>