<?php
include("models/database.php");

class M_khach_hang extends database
{
    public function DanhSachKhachHang()
    {
        $sql = "select * from ckt_khachhang";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function DanhSachKhachHangTheoMa($ma_khach_hang)
    {
        $sql = "SELECT * FROM CKT_KHACHHANG WHERE MA_KHACH_HANG=?";
        $this->setQuery($sql);
        $param = array($ma_khach_hang);
        return $this->execute($param);
    }

    public function XoaKhachHang($ma_khach_hang)
    {
        $sql = "UPDATE CKT_KHACHHANG SET TRANG_THAI=1 WHERE MA_KHACH_HANG=?";
        $this->setQuery($sql);
        $param= array($ma_khach_hang);
        return $this->execute($param);
    }


   
}


?>