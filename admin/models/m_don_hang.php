<?php
include_once("models/database.php");


class M_don_hang extends database
{
    public function DanhSachDonHang()
    {
        $sql = "SELECT ma_don_hang,dh.ma_khach_hang,kh.ho_ten,ngay_dat,tong_tien,phuong_thuc_thanh_toan,trang_thai_don_hang,dh.ghi_chu,dh.trang_thai FROM ckt_don_hang dh,ckt_khachhang kh where dh.ma_khach_hang=kh.ma_khach_hang ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function ChiTietDonHangTheoMa($ma_don_hang)
    {
        $sql = "SELECT * FROM CKT_DON_HANG WHERE MA_DON_HANG=?";
     // $sql = "SELECT ma_don_hang,dh.ma_khach_hang,kh.ho_ten,ngay_dat,tong_tien,phuong_thuc_thanh_toan,trang_thai_don_hang,dh.trang_thai FROM ckt_don_hang dh,ckt_khachhang kh where dh.ma_khach_hang=kh.ma_khach_hang and ma_don_hang=?";
        $this->setQuery($sql);

        $param = array($ma_don_hang);
        return $this->loadRow($param);

    }

    public function XoaDonHang($ma_don_hang)
    {
        $sql = "UPDATE CKT_DON_HANG SET TRANG_THAI=1 WHERE MA_DON_HANG=?";
        $this->setQuery($sql);
        $param = array($ma_don_hang);
        return $this->execute($param);
    }

    //`ma_don_hang`, `ma_khach_hang`, `ngay_dat`, `tong_tien`, `phuong_thuc_thanh_toan`, `trang_thai_don_hang`, `trang_thai
    public function CapNhatDonHang($phuong_thuc_thanh_toan,$trang_thai_don_hang,$ghi_chu,$trang_thai,$ma_don_hang)
    {
        $sql = "UPDATE CKT_DON_HANG SET phuong_thuc_thanh_toan=?,trang_thai_don_hang=?,ghi_chu=?,trang_thai=? where ma_don_hang=?";
        $this->setQuery($sql);
        $param = array($phuong_thuc_thanh_toan,$trang_thai_don_hang,$ghi_chu,$trang_thai,$ma_don_hang);
        return $this->execute($param);
    }
}



?>
