<?php
@session_start();

class C_nuoc_uong
{
    public function __construct()
    {
        include("models/m_nuoc_uong.php");
        include("controllers/Smarty_dai_ly_nuoc_ngot.php");
    }

    public function Hien_Thi()
    {
        //Model
        $mnu = new M_nuoc_uong();   
        $dsnu = $mnu->DanhSachNuocUong();
        echo count($dsnu);
        //View
        $view = "views/nuoc_uong/v_quan_ly_nuoc_uong.tpl";
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $smarty->assign("view",$view);
        $smarty->assign("dsnu",$dsnu);
        $smarty->display("_layoutadminchinh.tpl");
    }

    public function Xoa_nuoc_uong()
    {
        if(isset($_GET["ma_nuoc_uong"]))
        {
            $ma_nuoc_uong = $_GET["ma_nuoc_uong"];
            //echo $ma_nuoc_uong;
           
            $mnu = new M_nuoc_uong();
            $kq = $mnu->Xoa_nuoc_uong($ma_nuoc_uong);

            if($kq)
            {
                header("location:nuoc_uong.php");
            }
        }
    }

    public function Them_nuoc_uong()
    {
        //Model 
        $mnu = new M_nuoc_uong();
        $dslnu = $mnu->DocDanhSachLoaiNuocUong();
        if(isset($_POST["btnThem"]))
        {
            echo "<script>alert('Hi')</script>";
            $ma_nuoc_uong=null;
            $ma_loai_nuoc_uong = $_POST["loai_nuoc_uong"];  
             echo $ma_loai_nuoc_uong;  
             $ten_nuoc_uong= $_POST["ten_nuoc_uong"];
             echo $ten_nuoc_uong;
             $thanh_phan = $_POST["thanh_phan"];
             echo $thanh_phan;
             $dung_tich = $_POST["dung_tich"];
             echo $dung_tich;
             $xuat_xu = $_POST["xuat_xu"];
             echo $xuat_xu;
             $san_xuat = $_POST["san_xuat"];
             echo $san_xuat;
             $don_gia = $_POST["don_gia"];
             echo $don_gia;
             $don_gia_khuyen_mai= $_POST["don_gia_khuyen_mai"];
             echo $don_gia_khuyen_mai;
             $khuyen_mai = $_POST["khuyen_mai"];
             echo $khuyen_mai;
             $hinh = $_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$dslnu->hinh;
             echo $hinh;
             $ngay_cap_nhat = date("Y-m-d");
              echo $ngay_cap_nhat;
             $dvt = $_POST["dvt"];
             echo $dvt;
             
             $kq = $mnu->Them_nuoc_uong($ma_nuoc_uong,$ma_loai_nuoc_uong,$ten_nuoc_uong,$thanh_phan,$dung_tich,$xuat_xu,$san_xuat,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhat,$dvt,0);

             if($kq)
             {
                 if($_FILES["hinh"]["error"]==0)
                 {
                     move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/layout/hinh_nuoc_uong/$hinh");
                 }
                 //header("location:nuoc_uong.php");
                 echo "<script>alert('Thêm thành công');window.location='nuoc_uong.php'</script>";
             }
        }

        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/nuoc_uong/v_them_nuoc_uong.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("dslnu",$dslnu);

        $smarty->display("_layoutadminchinh.tpl");
    }

    public function Sua_nuoc_uong()
    {     
        $mnu = new M_nuoc_uong();
        $dslnu = $mnu->DocDanhSachLoaiNuocUong();

        if(isset($_GET["ma_nuoc_uong"]))
        {
            $ma_nuoc_uong = $_GET["ma_nuoc_uong"];
           // echo $ma_nuoc_uong;
            //Model
          
            //Hiển thị nội dung 
            $dsnutm = $mnu->Nuoc_uong_theo_ma($ma_nuoc_uong); 
            //print_r($dsnutm);

        //Lấy dữ liệu về
             //`ma_nuoc_uong`, `ma_loai_nuoc_uong`, `ten_nuoc_uong`, `thanh_phan`, `dung_tich`, 
            //`xuat_xu`, `san_xuat`, `don_gia`,
            // `don_gia_khuyen_mai`, `khuyen_mai`, `hinh`, `ngay_cap_nhat`, `dvt`, `trang_thai

            if(isset($_POST["btnCapNhat"]))    
            {   
              // echo "<script>alert('Hi')</script>";
                $ma_nuoc_uong = $_GET["ma_nuoc_uong"]; 
               // echo $ma_nuoc_uong;     
                $ma_loai_nuoc_uong = $_POST["loai_nuoc_uong"];  
               // echo $ma_loai_nuoc_uong;  
                $ten_nuoc_uong= $_POST["ten_nuoc_uong"];
               // echo $ten_nuoc_uong;
                $thanh_phan = $_POST["thanh_phan"];
               // echo $thanh_phan;
                $dung_tich = $_POST["dung_tich"];
               // echo $dung_tich;
                $xuat_xu = $_POST["xuat_xu"];
              //  echo $xuat_xu;
                $san_xuat = $_POST["san_xuat"];
               // echo $san_xuat;
                $don_gia = $_POST["don_gia"];
               // echo $don_gia;
                $don_gia_khuyen_mai= $_POST["don_gia_khuyen_mai"];
               // echo $don_gia_khuyen_mai;
                $khuyen_mai = $_POST["khuyen_mai"];
               // echo $khuyen_mai;

                $hinh = $_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$dsnutm->hinh;
                //echo $hinh;
                $ngay_cap_nhat = $_POST["ngay_cap_nhat"];
                //echo $ngay_cap_nhat;
                $dvt = $_POST["dvt"];
                //echo $dvt;
               // $trang_thai = $_POST["trang_thai"];
                $kq = $mnu->Sua_nuoc_uong($ma_loai_nuoc_uong, $ten_nuoc_uong, $thanh_phan,$xuat_xu, $dung_tich, $san_xuat, $don_gia,$don_gia_khuyen_mai, $khuyen_mai, $hinh,$ngay_cap_nhat, $dvt,$ma_nuoc_uong);

                // print_r($kq);
                if($kq)
                {
                    if($_FILES["hinh"]["error"]==0)
                    {
                        move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/hinh_nuoc_uong/$hinh");
                    }

                   // header("location:nuoc_uong.php");
                   echo "<script>alert('Cập nhật thành công');window.location='nuoc_uong.php'</script>";
                }
            }
        }    

        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/nuoc_uong/v_chi_tiet_nuoc_uong.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("dsnutm",$dsnutm);
        $smarty->assign("dslnu",$dslnu);
        $smarty->display("_layoutadminchinh.tpl");
    }

}





?>