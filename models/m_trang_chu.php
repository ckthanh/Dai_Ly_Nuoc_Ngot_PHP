<?php

include_once("models/database.php");

class M_trang_chu extends database
{

    public function DanhSachNuocUong($vt=-1, $limit=-1)
    {
        $sql = "select*from ckt_nuoc_uong";

        if($vt>=0 && $limit>0)
        {
            $sql .="limit $vt,$limit";
        }
        $this->setQuery($sql);

        return $this->loadAllRows();
    }


    public function DanhSachTenNuocUong()
    {
        $sql = "select*from ckt_loai_nuoc_uong where trang_thai=0";
        $this->setQuery($sql);

        return $this->loadAllRows();
    }




    public function DanhSachNuocUongTheoMaLoai($ma_loai_nuoc_uong,$vt=-1,$limit=-1)
    {
        $sql ="select * from ckt_nuoc_uong where ma_loai_nuoc_uong=?";

        if($vt>=0 && $limit >0)
        {
            $sql .="limit $vt,$limit";
        }

        $this->setQuery($sql);

        $param = array($ma_loai_nuoc_uong);

        return $this->loadAllRows($param);
    }
}


?>