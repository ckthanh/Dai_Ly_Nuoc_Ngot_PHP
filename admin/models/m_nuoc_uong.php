<?php
include_once("models/database.php");

class M_nuoc_uong extends database
{
    // public function DanhSachNuocUong()
    // {
    //     $sql = "select * from ckt_nuoc_uong";
    //     $this->setQuery($sql);

    //     return $this->loadAllRows();
    // }

    public function DanhSachNuocUong()
    {
        $sql = "select *,lnu.ten_loai_nuoc_uong from ckt_nuoc_uong nu, ckt_loai_nuoc_uong lnu where nu.ma_loai_nuoc_uong=lnu.ma_loai_nuoc_uong";
        $this->setQuery($sql);

        return $this->loadAllRows();
    }

    public function DocDanhSachLoaiNuocUong()
    {
        $sql = "select * from ckt_loai_nuoc_uong ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }



    public function Xoa_nuoc_uong($ma_nuoc_uong)
    {
        $sql = "UPDATE ckt_nuoc_uong set trang_thai=1 where ma_nuoc_uong=?";

        $this->setQuery($sql);

        return $this->execute(array($ma_nuoc_uong));
    }


    //Danh sách nước uống theo mã
    public function Nuoc_uong_theo_ma($ma_nuoc_uong)
    {
        $sql = "select * from ckt_nuoc_uong where ma_nuoc_uong=?";
        $this->setQuery($sql);

        return $this->loadRow(array($ma_nuoc_uong));
    }

    //`ma_nuoc_uong`, `ma_loai_nuoc_uong`, `ten_nuoc_uong`, `thanh_phan`, `dung_tich`, 
    //`xuat_xu`, `san_xuat`, `don_gia`,
    // `don_gia_khuyen_mai`, `khuyen_mai`, `hinh`, `ngay_cap_nhat`, `dvt`, `trang_thai
    public function Sua_nuoc_uong($ma_loai_nuoc_uong, $ten_nuoc_uong, $thanh_phan,$xuat_xu, $dung_tich, $san_xuat, $don_gia,$don_gia_khuyen_mai, $khuyen_mai, $hinh, $ngay_cap_nhat, $dvt,$ma_nuoc_uong)
    {
        $sql = "UPDATE ckt_nuoc_uong SET ma_loai_nuoc_uong=?,ten_nuoc_uong=?,thanh_phan=?,xuat_xu=?,dung_tich=?,san_xuat=?,don_gia=?,don_gia_khuyen_mai=?,khuyen_mai=?,hinh=?,ngay_cap_nhat=?,dvt=? where ma_nuoc_uong=?";
        $param = array($ma_loai_nuoc_uong, $ten_nuoc_uong, $thanh_phan,$xuat_xu, $dung_tich, $san_xuat, $don_gia,$don_gia_khuyen_mai, $khuyen_mai, $hinh,$ngay_cap_nhat, $dvt,$ma_nuoc_uong);
        $this->setQuery($sql);

        return $this->execute($param);
    }

    public function Them_nuoc_uong($ma_nuoc_uong,$ma_loai_nuoc_uong, $ten_nuoc_uong, $thanh_phan,$dung_tich,$xuat_xu, $san_xuat, $don_gia,$don_gia_khuyen_mai, $khuyen_mai, $hinh, $ngay_cap_nhat, $dvt,$trang_thai)
    {
        $sql = "INSERT INTO ckt_nuoc_uong(ma_nuoc_uong,ma_loai_nuoc_uong, ten_nuoc_uong, thanh_phan, dung_tich,xuat_xu, san_xuat,don_gia,don_gia_khuyen_mai, khuyen_mai, hinh, ngay_cap_nhat, dvt,trang_thai) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $param  = array($ma_nuoc_uong,$ma_loai_nuoc_uong, $ten_nuoc_uong, $thanh_phan,$dung_tich,$xuat_xu, $san_xuat, $don_gia,$don_gia_khuyen_mai, $khuyen_mai, $hinh, $ngay_cap_nhat, $dvt,$trang_thai);

        $this->setQuery($sql);

        return $this->execute($param);
    }
}





?>  