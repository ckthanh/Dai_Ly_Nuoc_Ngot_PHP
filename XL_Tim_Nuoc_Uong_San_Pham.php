<?php
include_once("models/m_san_pham.php");

$gtTim = $_POST["gtTim"];

$msp = new M_san_pham();
$dsnu = $msp->DanhSachNuocUong();
//echo count($dsnu);
$dsnutheoma =$msp->TimTenNuocUong($gtTim);
//print_r($dsnutheoma);

//Phân Trang
$limit = 8;
$tongsp = count($dsnu);
$pages = ceil($tongsp/$limit);
$currentpage = isset($_GET["page"])?$_GET["page"]:1;
$vt = ($currentpage-1)*$limit;

$thanhpt = "";
for ($i=1; $i <=$pages ; $i++) 
{ 
    if($i==$currentpage)
    {
        $thanhpt .= "<b style='height:40px;width:40px;border:1px solid gray;padding:10px;margin:10px; background-color:#0071bb;color:#fff;'>$i</b>";
    }
    else
    {
        $thanhpt .= "<a href='san-pham/page=$i' style='height:40px;width:40px;padding:10px;margin:10px;border:1px solid gray;text-decoration:none'>$i</a>";
    }
}
$dsnutheoma =$msp->TimTenNuocUong($gtTim,$vt,$limit);

?>
<div id="hienthimenusanpham">
    <div class="row">
        <?php
            foreach ($dsnutheoma as $dsnuocuong)
            {
        ?> 
            <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4" id="motsanpham">
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
        ?>
        
    </div>   
</div>

