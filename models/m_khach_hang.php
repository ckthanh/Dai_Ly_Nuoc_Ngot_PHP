<?php

require_once("models/database.php");

class M_khach_hang extends database
{
    //`ma_khach_hang`, `ho_ten`, `so_dien_thoai`, `dia_chi`, `email`, `mat_khau`, `ghi_chu`, `trang_thai`

    public function Them_Khach_Hang($ho_ten, $so_dien_thoai, $dia_chi, $email, $ghi_chu)
    {
        $query = "INSERT INTO ckt_khachhang(ho_ten, so_dien_thoai, dia_chi, email, ghi_chu) VALUES(?,?,?,?,?)";

        $this->setQuery($query);

        //Kiểm tra
        //print_r(array($ho_ten, $so_dien_thoai, $dia_chi, $email, $mat_khau, $ghi_chu))

        $ketqua =  $this->execute(array($ho_ten, $so_dien_thoai, $dia_chi, $email, $ghi_chu));

        if($ketqua)        
            return $this->getLastId();       
        else        
            return false;
    }

    //`ma_don_hang`, `ma_khach_hang`, `ngay_dat`, `tong_tien`, `phuong_thuc_thanh_toan`,trang_thai_don_hang
    public function Them_Don_Hang($ma_khach_hang, $ngay_dat, $tong_tien, $phuong_thuc_thanh_toan,$ghi_chu)
    {
       // $trang_thai_don_hang = "Chưa thanh toán";

        $query = "INSERT INTO ckt_don_hang(ma_khach_hang, ngay_dat, tong_tien, phuong_thuc_thanh_toan,ghi_chu) VALUES(?,?,?,?,?)";

        $this->setQuery($query);

        $ketqua = $this->execute(array($ma_khach_hang, $ngay_dat, $tong_tien, $phuong_thuc_thanh_toan,$ghi_chu));

        if($ketqua)
            return $this->getLastId();
        else
            return false;    
    }   

    //`ma_don_hang`, `ma_nuoc_uong`, `so_luong`, `don_gia`, `trang_thai`
    public function Them_Chi_Tiet_Don_Hang($ma_don_hang,$ma_nuoc_uong, $so_luong, $don_gia)
    {
        $query = "INSERT INTO ckt_chi_tiet_don_hang(ma_don_hang,ma_nuoc_uong, so_luong, don_gia) VALUES(?,?,?,?)";

        $this->setQuery($query);

        $this->execute(array($ma_don_hang,$ma_nuoc_uong, $so_luong, $don_gia));   
    }

    public function Cap_Nhat_Tong_Tien_Don_Hang($ma_don_hang)
    {
        $query = "UPDATE ckt_don_hang SET tong_tien =(SELECT SUM(so_luong*don_gia) FROM ckt_chi_tiet_don_hang WHERE ckt_don_hang.ma_don_hang = ckt_chi_tiet_don_hang.ma_don_hang) WHERE ma_don_hang=?";

        $this->setQuery($query);

        $this->execute(array($ma_don_hang));
    }

        //Cập nhật đơn giá của sản phẩm thuộc ĐƠN HÀNG ĐÓ
    public function Cap_Nhat_Don_Gia($ma_don_hang)
    {
        $query = "UPDATE ckt_chi_tiet_don_hang SET don_gia = (SELECT don_gia FROM ckt_nuoc_uong WHERE ckt_chi_tiet_don_hang.ma_nuoc_uong = ckt_nuoc_uong.ma_nuoc_uong) WHERE ma_don_hang=?";

        $this->setQuery($query);

        $this->execute(array($ma_don_hang));
    }
}




?>