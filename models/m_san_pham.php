<?php

include("models/database.php");

class M_san_pham extends database
{
    //Lấy sản phẩm cho giỏ hàng
    public function Lay_Nuoc_Uong_Cho_Gio_Hang($chuoi)
    {
        $sql = "select * from ckt_nuoc_uong where ma_nuoc_uong in($chuoi)";
        $this->setQuery($sql);

        return $this->loadAllRows();
    }

    //Dùng để phân trang
    public function DanhSachNuocUong($vt=-1, $limit=-1)
    {
        $sql = "select * from ckt_nuoc_uong where trang_thai=0";

        if($vt>=0 && $limit>0)
        {
            $sql.="limit $vt,$limit";
        }
        
        $this->setQuery($sql);

        return $this->loadAllRows();
    }


      //Load Mã Loại nước uống
      public function LoadMaLoaiTenLoaiNuocUong()
      {
          $sql = "select * from ckt_loai_nuoc_uong where trang_thai=0";
  
          $this->setQuery($sql);
  
          return $this->loadAllRows();
      }
 
 
     //Load Danh Sách Sản Phẩm Theo Mã Loại 
     public function DanhSachNuocUongTheoMaLoai($ma_loai_nuoc_uong,$vt=-1, $limit=-1)
     {
         $sql = "select * from ckt_nuoc_uong where ma_loai_nuoc_uong=?";
         if($vt>=0 && $limit>0)
         {
             $sql.="limit $vt,$limit";
         }
 
         $this->setQuery($sql);
         $param = array($ma_loai_nuoc_uong);
         return $this->loadAllRows($param);
     }
 
    
    public function Chi_Tiet_San_Pham_Theo_Ma($ma_nuoc_uong)
    {
        $sql = "select * from ckt_nuoc_uong where ma_nuoc_uong=?";

        $this->setQuery($sql);

        $param = array($ma_nuoc_uong);
        return $this->loadRow($param);

    }

    public function Doc_San_Pham_Cung_Loai($ma_loai_nuoc_uong,$ma_nuoc_uong,$vt=-1,$limit=-1)
	{
		$sql="select * from ckt_nuoc_uong where ma_loai_nuoc_uong=? and ma_nuoc_uong!=?";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai_nuoc_uong,$ma_nuoc_uong));	
    }
    
   
    //Tìm Sản Phẩm Theo Tên
    public function TimTenNuocUong($gtTim,$vt=-1,$limit=-1)
    {
        $sql = "select * from ckt_nuoc_uong where ten_nuoc_uong like '%$gtTim%'";

        if($vt>=0 && $limit>0)
        {
            $sql.="limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

     //Tìm Sản Phẩm Theo Giá trị Tìm
     public function TimNuocUong($ten_nuoc_uong,$dung_tich,$vt=-1,$limit=-1)
     {
         $sql = "select * from ckt_nuoc_uong where ten_nuoc_uong like '%$ten_nuoc_uong%' or dung_tich like '%$dung_tich%' ";
 
         if($vt>=0 && $limit>0)
         {
             $sql.="limit $vt,$limit";
         }
         $this->setQuery($sql);

         return $this->loadAllRows();
     }

    //Sắp tăng dần
    public function SapTangDan($vt=-1,$limit=-1)
    {
        $sql = "select * from ckt_nuoc_uong order by don_gia";
        if($vt>=0 && $limit>0)
        {
            $sql .="limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();        
    }

    public function SapGiamDan($vt=-1,$limit=-1)
    {
        $sql = "select * from ckt_nuoc_uong order by don_gia desc";
        if($vt>=0 && $limit>0)
        {
            $sql .="limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();        
    }

    public function TimTheoGia1($vt=-1,$limit=-1)    
    {
        $sql = "select * from ckt_nuoc_uong where don_gia between 0 and 50000 order by don_gia ";
        if($vt>=0 && $limit >0)
        {
            $sql.="limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function TimTheoGia2($vt=-1,$limit=-1)    
    {
        $sql = "select * from ckt_nuoc_uong where don_gia BETWEEN 50000 and 100000 order by don_gia" ;
        if($vt>=0 && $limit >0)
        {
            $sql.="limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function TimTheoGia3($vt=-1,$limit=-1)    
    {
        $sql = "select * from ckt_nuoc_uong where don_gia BETWEEN 100000 and 200000 order by don_gia";
        if($vt>=0 && $limit >0)
        {
            $sql.="limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function TimTheoGia4($vt=-1,$limit=-1)    
    {
        $sql = "select * from ckt_nuoc_uong where don_gia in(200000,500000) order by don_gia";
        if($vt>=0 && $limit >0)
        {
            $sql.="limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

   
}
