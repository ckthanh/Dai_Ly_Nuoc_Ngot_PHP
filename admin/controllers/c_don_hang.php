<?php
@session_start();

class C_don_hang
{
    public function __construct()
    {
       include("models/m_don_hang.php");     
       include("controllers/Smarty_dai_ly_nuoc_ngot.php");
    }

    public function HienGiaoDien()
    {
        //Model
        $mdh = new M_don_hang();
        $dsdh = $mdh->DanhSachDonHang();
         // print_r($dsdh[0]);
        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/don_hang/v_don_hang.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("dsdh",$dsdh);
        $smarty->display("_layoutadminchinh.tpl");

    }

    public function XoaDonHang()
    {
        if(isset($_GET["ma_don_hang"]))
        {
            $ma_don_hang = $_GET["ma_don_hang"];

            $mdh = new M_don_hang();

            $kq = $mdh->XoaDonHang($ma_don_hang);

            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='don_hang.php'</script>";
            }
        }
    }

    //`ma_don_hang`, `ma_khach_hang`, `ngay_dat`, `tong_tien`, `phuong_thuc_thanh_toan`, `trang_thai_don_hang`, `trang_thai`

    public function SuaDonHang()
    {
        //Model 
        $mdh = new M_don_hang();
        $dsdh = $mdh->DanhSachDonHang();

        if(isset($_GET["ma_don_hang"]))
        {
            $ma_don_hang = $_GET["ma_don_hang"];
            $dsdhtm = $mdh->ChiTietDonHangTheoMa($ma_don_hang);    
           // print_r($dsdhtm);

            if(isset($_POST["btnCapNhat"]))
            {
                //Lấy dữ liệu về
                $ma_don_hang = $_GET["ma_don_hang"];
                    echo $ma_don_hang;
                // $ma_khach_hang = $_GET["ma_khach_hang"];
                //   echo $ma_khach_hang;
                // $ngay_dat = $_POST["ngay_dat"];
                //  echo $ngay_dat;
                // $tong_tien = $_POST["tong_tien"];
                //     echo $tong_tien;
                $phuong_thuc_thanh_toan = $_POST["phuong_thuc_thanh_toan"];
                echo $phuong_thuc_thanh_toan;
                $trang_thai_don_hang = $_POST["trang_thai_don_hang"];
                echo $trang_thai_don_hang;
                $ghi_chu = $_POST["ghi_chu"];
                echo $ghi_chu;
                $trang_thai = $_POST["trang_thai"];
                echo $trang_thai;

                //exit();
                $kq = $mdh->CapNhatDonHang($phuong_thuc_thanh_toan,$trang_thai_don_hang,$ghi_chu,$trang_thai,$ma_don_hang);
              //  exit();
                if($kq)
                {
                    echo "<script>alert('Cập nhật thành công');window.location='don_hang.php'</script>";
                }
                else
                {
                    echo "<script>alert('Cập nhật lỗi');window.location='sua_chi_tiet_don_hang.php'</script>";
                }
            }
        }

        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/don_hang/v_chi_tiet_don_hang.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("dsdhtm",$dsdhtm);
        $smarty->assign("dsdh",$dsdh);
        $smarty->display("_layoutadminchinh.tpl");
    }
}




?>