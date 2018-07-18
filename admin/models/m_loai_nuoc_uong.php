<?php
include_once("models/database.php");

class M_loai_nuoc_uong extends database
{
    public function DanhSachLoaiNuocUong()
    {
        $sql = "select * from ckt_loai_nuoc_uong";
        $this->setQuery($sql);

        return $this->loadAllRows();
    }

    public function DanhSachLoaiNuocUongTheoMa($ma_loai_nuoc_uong)
    {   
        $sql = "select * from ckt_loai_nuoc_uong where ma_loai_nuoc_uong=?";
        $this->setQuery($sql);
        $param = array($ma_loai_nuoc_uong);
        return $this->loadRow($param);
    }

    //`ma_loai_nuoc_uong`, `ten_loai_nuoc_uong`, `mo_ta`, `hinh'
    public function CapNhatLoaiNuocUong($ten_loai_nuoc_uong,$mo_ta,$hinh,$trang_thai,$ma_loai_nuoc_uong)
    {
        $sql = "update ckt_loai_nuoc_uong set ten_loai_nuoc_uong=?,mo_ta=?,hinh=?,trang_thai=? where ma_loai_nuoc_uong=?";
        $this->setQuery($sql);

        $param = array($ten_loai_nuoc_uong,$mo_ta,$hinh,$trang_thai,$ma_loai_nuoc_uong);
        return $this->execute($param);
    }

    public function ThemLoaiNuocUong($ma_loai_nuoc_uong,$ten_loai_nuoc_uong,$mo_ta,$hinh)
    {
        $sql ="INSERT INTO CKT_LOAI_NUOC_UONG(ma_loai_nuoc_uong,ten_loai_nuoc_uong,mo_ta,hinh) VALUES(?,?,?,?)";
        $this->setQuery($sql);

        $param = array($ma_loai_nuoc_uong,$ten_loai_nuoc_uong,$mo_ta,$hinh);
        return $this->execute($param);
    }

    public function XoaLoaiNuocUong($ma_loai_nuoc_uong)
    {
        $sql = "UPDATE CKT_LOAI_NUOC_UONG SET TRANG_THAI=1 WHERE MA_LOAI_NUOC_UONG=?";
        $this->setQuery($sql);
        $param = array($ma_loai_nuoc_uong);
        return $this->execute($param);
    }
}


?>