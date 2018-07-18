<?php
include_once("models/m_trang_chu.php");
include_once("models/m_dang_ky_nhan_tin.php");
@session_start();

class C_trang_chu
{

    public function Hien_Giao_Dien_Trang_Chu()
    {
        //Model
        
        $m_nuoc_uong = new M_trang_chu();    
        $dsnu = $m_nuoc_uong->DanhSachNuocUong();
      //  echo count($dsnu);

        //View
        include("controllers/Smarty_dai_ly_nuoc_ngot.php");
        $smarty = new Smarty_dai_ly_nuoc_ngot(); 
        $view = "views/trang_chu/v_noi_dung.tpl";

        $smarty->assign("view",$view);
        $smarty->display("_layoutchinh.tpl");
    }

    public function Danh_Sach_Nuoc_Uong_Theo_Ma_Loai()
    {
        //Model 1
        $m_nuoc_uong = new M_trang_chu();  

          
            //Dùng cho phân trang
        $dsnu = $m_nuoc_uong->DanhSachNuocUong();
            //echo count($dsnu);

            //Code for Search Items
            $str = "'";
            foreach ($dsnu as $nuocuong)
            {
                $str .= $nuocuong->ten_nuoc_uong."'.'";
            }
            $str = substr($str,0,strlen($str)-2);

            //Liệt kê tên nước uống theo mã TỰ ĐỘNG
        $dstennuocuong = $m_nuoc_uong->DanhSachTenNuocUong();
          // echo count($dstennuocuong);

        
        //Phân trang 
        $limit = 8;
        $tongsp = count($dsnu);
        $pages = ceil($tongsp/$limit);
        $currentpage =isset($_GET["page"])?$_GET["page"]:1;
       // echo    $currentpage;
        $vt = ($currentpage-1)*$limit;

        $thanhpt = "";
        for ($i=1 ; $i <= $pages ; $i++) 
        { 
            if($i==$currentpage)
            {
                $thanhpt .= "<b style='height:40px;width:40px;border:1px solid gray;padding:10px;margin:10px; background-color:#0071bb;color:#fff;'>$i</b>";
            }
            else
            {
                $thanhpt .= "<a href='trang-chu/$i' style='height:40px;width:40px;padding:10px;margin:10px;border:1px solid gray;text-decoration:none'>$i</a>";
            }
        }

        // ***** QUAN TRỌNG *****   //
        $ma_loai_nuoc_uong = isset($_GET["ma_loai_nuoc_uong"])?$_GET["ma_loai_nuoc_uong"]:1;

                                                               //Mã phải động              
        $dsnutheoma = $m_nuoc_uong->DanhSachNuocUongTheoMaLoai($ma_loai_nuoc_uong,$vt,$limit);


     

        //View
        include("controllers/Smarty_dai_ly_nuoc_ngot.php");
        $smarty = new Smarty_dai_ly_nuoc_ngot(); 
        $view = "views/trang_chu/v_noi_dung.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("thanhpt",$thanhpt);
        $smarty->assign("str",$str);
        $smarty->assign("dsnutheoma",$dsnutheoma);
        $smarty->assign("dstennuocuong",$dstennuocuong);
        $smarty->display("_layoutchinh.tpl");
    }

  
   
}

?>