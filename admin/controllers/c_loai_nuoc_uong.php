<?php
@session_start();

class C_loai_nuoc_uong
{
    public function __construct()
    {
        include("models/m_loai_nuoc_uong.php");
        include("controllers/Smarty_dai_ly_nuoc_ngot.php");
    }

    public function HienGiaoDien()
    {
        //Model
        $mlnu = new M_loai_nuoc_uong();
        $dslnu = $mlnu->DanhSachLoaiNuocUong();

        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view= "views/loai_nuoc_uong/v_loai_nuoc_uong.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("dslnu",$dslnu);
        $smarty->display("_layoutadminchinh.tpl");
    }

    public function XoaLoaiNuocUong()
    {
        $ma_loai_nuoc_uong = $_GET["ma_loai_nuoc_uong"];

        if($ma_loai_nuoc_uong >0)
        {
            $mlnu=new M_loai_nuoc_uong();

            $kq = $mlnu->XoaLoaiNuocUong($ma_loai_nuoc_uong);

            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='loai_nuoc_uong.php'</script>";
            }
        }
    }

    public function ThemLoaiNuocUong()
    {
        $mlnu = new M_loai_nuoc_uong();
        $dslnu = $mlnu->DanhSachLoaiNuocUong();

        //Model
        if(isset($_POST["btnThem"]))
        {
            $ma_loai_nuoc_uong = $_POST["ma_loai_nuoc_uong"];
            echo $ma_loai_nuoc_uong;
            $ten_loai_nuoc_uong = $_POST["ten_loai_nuoc_uong"];
            echo $ten_loai_nuoc_uong;
            $mo_ta = $_POST["mo_ta"];
            echo $mo_ta;
            $hinh = $_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$dslnu->hinh;
            echo $hinh;

            //exit();

            $kq = $mlnu->ThemLoaiNuocUong($ma_loai_nuoc_uong,$ten_loai_nuoc_uong,$mo_ta,$hinh);

            if($kq)
            {
                if($_FILES["hinh"]["error"]==0)
                {
                    move_uploaded_file($_FILES["hinh"]["name"],"../public/layout/images/hinh_loai_nuoc_uong/$hinh");
                }

                echo "<script>alert('Thêm thành công');window.location='loai_nuoc_uong.php'</script>";
            }
        }
        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/loai_nuoc_uong/v_them_loai_nuoc_uong.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("dslnu",$dslnu);
        $smarty->display("_layoutadminchinh.tpl");
    }


    public function CapNhatLoaiNuocUong()
    {
        $mlnu =new M_loai_nuoc_uong();
        //lấy hình
        $dslnu = $mlnu->DanhSachLoaiNuocUong();

        if(isset($_GET["ma_loai_nuoc_uong"]))
        {
            $ma_loai_nuoc_uong = $_GET["ma_loai_nuoc_uong"];
            $dslnutm = $mlnu->DanhSachLoaiNuocUongTheoMa($ma_loai_nuoc_uong);
          //  print_r($dslnutm);
           
            //Model
            if(isset($_POST["btnCapNhat"]))
            {
                $ma_loai_nuoc_uong = $_GET["ma_loai_nuoc_uong"];
               // echo $ma_loai_nuoc_uong;
                $ten_loai_nuoc_uong = $_POST["ten_loai_nuoc_uong"];
               // echo $ten_loai_nuoc_uong;
                $mo_ta = $_POST["mo_ta"];
                //echo $mo_ta;
                $hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$dslnutm->hinh;
                //echo $hinh;
                $trang_thai=$_POST["trang_thai"];
                //echo $trang_thai;
               // exit();
                if($ma_loai_nuoc_uong != 0)
                {
                    $kq = $mlnu->CapNhatLoaiNuocUong($ten_loai_nuoc_uong,$mo_ta,$hinh,$trang_thai,$ma_loai_nuoc_uong);

                    if($kq)
                    {
                        if($_FILES["hinh"]["error"]==0)
                        {
                            move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/layout/hinh_nuoc_uong/$hinh");
                        }

                        echo "<script>alert('Cập nhật thành công!');window.location='loai_nuoc_uong.php'</script>";
                    }
                }
            }
        }
        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/loai_nuoc_uong/v_chi_tiet_loai_nuoc_uong.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("dslnutm",$dslnutm);
        $smarty->assign("dslnu",$dslnu);
        $smarty->display("_layoutadminchinh.tpl");
    }
}


?>