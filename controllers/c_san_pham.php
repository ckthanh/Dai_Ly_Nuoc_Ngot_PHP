<?php
@session_start();


class C_san_pham
{
    public function __construct()
    {
        include_once("controllers/Smarty_dai_ly_nuoc_ngot.php");
        include_once("models/m_san_pham.php");
        include_once("models/Pager.php");
       
    }

    public function San_Pham_Theo_Ma()
    {
        //Library     
        $msp = new M_san_pham();
        
        //Model
        $ma_nuoc_uong = $_GET["ma_nuoc_uong"];
            
        $sp = $msp->Chi_Tiet_San_Pham_Theo_Ma($ma_nuoc_uong);

        //Lấy ma_loai_nuoc_uong để show SẢN PHẨM LIÊN QUAN

        $ma_loai_nuoc_uong = $sp->ma_loai_nuoc_uong;
        $dsnu = $msp->DanhSachNuocUong();
       // echo count($dsnu);

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
                $thanhpt .= "<a href='chi-tiet-san-pham/{$sp->ma_nuoc_uong}/page=$i' style='height:40px;width:40px;padding:10px;margin:10px;border:1px solid gray;text-decoration:none'>$i</a>";
              //  $thanhpt .= "<a href='chi_tiet_san_pham.php?ma_nuoc_uong={$sp->ma_nuoc_uong}&page=$i' style='height:40px;width:40px;padding:10px;margin:10px;border:1px solid gray;text-decoration:none'>$i</a>";
            }
        }
   
                                                                       //Mã phải động              
        $dsnutheoma = $msp->Doc_San_Pham_Cung_Loai($ma_loai_nuoc_uong,$ma_nuoc_uong,$vt,$limit);

        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/san_pham/v_chi_tiet_san_pham.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("sp",$sp);
        $smarty->assign("dsnutheoma",$dsnutheoma);
        $smarty->assign("thanhpt",$thanhpt);
     
        $smarty->display("chi_tiet_san_pham/_layoutchitietsanpham.tpl");
    }

    //Test giao diện
    public function Hien_Giao_Dien()
    {
        //View
        $smarty= new Smarty_dai_ly_nuoc_ngot();
        $view="views/san_pham/v_san_pham.tpl";
        $smarty->assign("view",$view);
        $smarty->display("san_pham/_layoutsanpham.tpl");
    }


    public function San_Pham()
    {
        //Model
        $msp = new M_san_pham();
        $dsnu =$msp->DanhSachNuocUong();
        // echo count($dsnu);
        // echo "<pre >";
        // print_r($dsnu);
        // echo "</pre >";

         //Load loại nước uống
         $dslnu = $msp->LoadMaLoaiTenLoaiNuocUong();
        //Load dữ liệu cho Phần Tìm Kiếm
         $str = "'";
         foreach ($dsnu as $nuocuong)
         {
             $str .= $nuocuong->ten_nuoc_uong."','";
         }
         $str = substr($str,0,strlen($str)-2);
         

         $page = new pager();
         $limit=10;
         $tongsp = count($dsnu);
         $pages=$page->findPages($tongsp,$limit);
         $currentpage=isset($_GET["page"])?$_GET["page"]:1;
         $vt = $page->findStart($limit);
         $thanhpt = $page->pageList($currentpage,$pages);
         $danh_sach_nuoc_uong = $msp->DanhSachNuocUong();
         //Load tất cả sản phẩm + Phân Trang
         #region
            $limit=6;
             //echo $limit;
            $tongsp = count($dsnu);
            //echo $tongsp;
            $pages = ceil($tongsp/$limit);
            // echo $pages;
            $currentpage = isset($_GET["page"])?$_GET["page"]:1;
            //echo $currentpage;
            $vt = ($currentpage-1)*$limit;
            //echo $vt;
            $thanhpt = "";
            for ($i=1; $i <= $pages; $i++) 
            { 
               if($i == $currentpage)
               {
                   $thanhpt .= "<b style='height:40px;width:40px;border:1px solid gray;padding:10px;margin:10px; background-color:#0071bb;color:#fff;'>$i</b>";
               }
               else
               {    
                   $thanhpt .= "<a href='san-pham/page=$i' style='height:40px;width:40px;padding:10px;margin:10px;border:1px solid gray;text-decoration:none'>$i</a>";
               }
            }
            $dsnu =  $msp->DanhSachNuocUong($vt,$limit);
            #endregion
          //print_r($dsnutheoma);
           

        //View
        $smarty= new Smarty_dai_ly_nuoc_ngot();
        $view= "views/san_pham/v_san_pham.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("dslnu",$dslnu);
        $smarty->assign("str",$str);
        $smarty->assign("danh_sach_nuoc_uong",$danh_sach_nuoc_uong);
        $smarty->assign("thanhpt",$thanhpt);
        $smarty->display("san_pham/_layoutsanpham.tpl");

    }


    public function TimSanPham()
    {
        //Model
        if(isset($_POST["btnTimSP"]))
        {
            if(isset($_POST["gtTim"]))
            {
                $msp =new M_san_pham();
                $dsnu = $msp->DanhSachNuocUong();

                //Cách 1: Tìm theo 1 giá trị
                     $gtTim = $_POST["gtTim"];
                    //     //echo $gtTim;
                
                     $dsnuTheoGiaTriTim = $msp->TimTenNuocUong($gtTim);
                    //    //  print_r($dsnuTheoGiaTriTim);

                //Cách 2: Tìm theo 2 giá trị
                    // $gtTim = $_POST["gtTim"];
                    // $ten_nuoc_uong = $gtTim;
                    // //echo $ten_nuoc_uong;
                    // $dung_tich = $gtTim;
                    // //echo $dung_tich;
                    // $dsnuTheoGiaTriTim = $msp->TimNuocUong($ten_nuoc_uong,$dung_tich);

                    //Phân trang
                    // $limit = 8;
                    // $tongsp = count($dsnu);
                    // $pages = ceil($tongsp/$limit);
                    // $currentpage = isset($_GET["page"])?$_GET["page"]:1;
                    // $vt = ($currentpage-1)*$limit;
                    // $thanhpt = "";
                    // for ($i=1; $i <=$pages ; $i++) 
                    // { 
                    //     if($i==$currentpage)
                    //     {
                    //         $thanhpt .= "<b style='height:40px;width:40px;border:1px solid gray;padding:10px;margin:10px; background-color:#0071bb;color:#fff;'>$i</b>";
                    //     }
                    //     else
                    //     {
                    //         $thanhpt .= "<a href='tim-kiem-san-pham/$i' style='height:40px;width:40px;padding:10px;margin:10px;border:1px solid gray;text-decoration:none'>$i</a>";
                    //     }
                    // }
                    // $dsnuTheoGiaTriTim = $msp->TimTenNuocUong($gtTim,$vt,$limit);
                  //  $dsnuTheoGiaTriTim = $msp->TimNuocUong($ten_nuoc_uong,$dung_tich,$vt,$limit);

            }  
        }
         //View
         $smarty =new Smarty_dai_ly_nuoc_ngot();
         $view = "views/san_pham/v_tim_kiem_san_pham.tpl";
         $smarty->assign("view",$view);
         $smarty->assign("gtTim",$gtTim);
       //  $smarty->assign("thanhpt",$thanhpt);
         $smarty->assign("dsnuTheoGiaTriTim",$dsnuTheoGiaTriTim);
         $smarty->display("tim_kiem_san_pham/_layouttimkiemsanpham.tpl");
    }
}




?>