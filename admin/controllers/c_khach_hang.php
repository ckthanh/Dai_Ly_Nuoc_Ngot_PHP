<?php
@session_start();


class C_khach_hang
{
    public function __construct()
    {
        include("models/m_khach_hang.php");
        include("controllers/Smarty_dai_ly_nuoc_ngot.php");
    }

    public function HienGiaoDien()
    {
        //Model
        $mkh = new M_khach_hang();
        $dskh = $mkh->DanhSachKhachHang();
        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/khach_hang/v_khach_hang.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("dskh",$dskh);
        $smarty->display("_layoutadminchinh.tpl");
    }


    public function XoaKhachHang()
    {
        if(isset($_GET["ma_khach_hang"]))
        {
            $ma_khach_hang = $_GET["ma_khach_hang"];
            $mkh = new M_khach_hang();
            $kq = $mkh->XoaKhachHang($ma_khach_hang);

            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='khach_hang.php'</script>";
            }

        }
    }
}


?>