<?php
include("models/m_san_pham.php");
include("models/Pager.php");

$msp = new M_san_pham();
$dsnu = $msp->DanhSachNuocUong();
// $limit = 6;
// $tongsp = count($dsnu);
// $pages = ceil($tongsp/$limit);
// $currentpage = (isset($_GET["page"]))?$_GET["page"]:1;
// $vt = ($currentpage-1)*$limit;
// $thanhpt = "";
// for ($i=1; $i <=pages ; $i++) 
// { 
//   if($i==$currentpage)
//   {
//     $thanhpt.="<b>$i</b>";
//   }
//   else
//   {
//     $thanhpt.="<a href='san-pham/page=$i'>$i</a>";
//   }
// }

$page = new pager();
		$limit=8;
		$count=count($dsnu);
		$pages=$page->findPages($count,$limit);
		$vt=$page->findStart($limit);
		$curpage=$_GET["page"];
		$thanhpt=$page->pageList($curpage,$pages);

$luaChon = $_POST["luaChon"];
//echo $luaChon;

switch($luaChon)
{
    case '50':
        $nuocuong = $msp->TimTheoGia1();
        break;
    case '50100':
        $nuocuong = $msp->TimTheoGia2();
        break;
    case '100200':    
        $nuocuong = $msp->TimTheoGia3();    
        break;
    case '500':    
        $nuocuong = $msp->TimTheoGia4();    
        break;    

    default:
        break;
}
?>

<div id="hienthimenusanpham">
    <div class="row">
        <?php
            if(count($nuocuong)>0)
            {
                foreach ($nuocuong as $dsnuocuong)
                 {
        ?> 
            <div class="col-md-4" id="motsanpham">
                <div class="hienthimenusanphamhead">
                    <a href="<?php echo $dsnuocuong->ma_nuoc_uong; ?>-<?php echo $dsnuocuong->ten_khong_dau; ?>" style="position: relative;text-decoration: none;">
                        <img src="public/images/hinh_nuoc_uong/<?php echo $dsnuocuong->hinh ?>" alt="" style="width:100%;height:200px">
                    </a>
                </div>
                <div class="hienthimenusanphamcontent">
                    <a href="<?php echo $dsnuocuong->ma_nuoc_uong; ?>-<?php echo $dsnuocuong->ten_khong_dau; ?>" style="text-decoration: none;">
                        <h3 style="font-size: 13px;font-weight: 600"><?php echo $dsnuocuong->ten_nuoc_uong; ?></h3>
                    </a>
                    <p style="margin-top:-18px;color:#0071bb"><?php echo $dsnuocuong->don_gia; ?> vnđ/<?php echo $dsnuocuong->dvt; ?></p>
                </div>
                <!--Xem chi tiết Button-->
                <div class="buttonhienthimenusanpham">
                    <button type="button">
                        <a href="<?php echo $dsnuocuong->ma_nuoc_uong; ?>-<?php echo $dsnuocuong->ten_khong_dau; ?>">Xem chi tiết</a>
                    </button>
                    
                </div>
              
            </div>          
           
        <?php
                 }
             }
             else
             {
        ?>
             <div class="container text-sm-center text-xs-center" style="padding:20px">
                 Không có sản phẩm phù hợp
             </div>   
        <?php       
             }
        ?>
        
    </div>  

  
    
</div>
