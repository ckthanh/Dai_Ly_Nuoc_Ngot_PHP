<?php
session_start();
class C_khach_hang
{
    public function __construct()
    {
        include_once("models/m_khach_hang.php");
        include_once("controllers/Smarty_dai_ly_nuoc_ngot.php");

    }


    public function Dang_Ky()
    {
        //Model 
        $smarty = new Smarty_dai_ly_nuoc_ngot();

        if(isset($_POST["submit"]))
        {
            //Lấy dữ liệu về
            $ho_ten = $_POST["ho_ten"];
            $so_dien_thoai = $_POST["so_dien_thoai"];
            $dia_chi = $_POST["dia_chi"];
            $email =  $_POST["email"];
          
            $ghi_chu = $_POST["ghi_chu"];

            $mkh = new M_khach_hang();

            if(isset($_SESSION["khach_hang"]))
            {
                $khach_hang =  $mkh->Them_Khach_Hang($ho_ten,$so_dien_thoai,$dia_chi,$email,$ghi_chu);
            }
                      
            //Kiểm tra
            //echo "Hi";

            //Nếu thành công thì trả về mã khách hàng cuối cùng
            if($khach_hang >0)
            {
                $ngay_dat= date("Y-m-d");
                $httt = $_POST["httt"];
                $tong_tien=0;

                $don_hang = $mkh->Them_Don_Hang($khach_hang,$ngay_dat,$tong_tien,$httt,$ghi_chu);

                if($don_hang > 0 )
                {
                    //Gọi session giỏ hàng để lấy thông tin mã + số lượng tương ứng
                    include_once("controllers/c_gio_hang.php");
                    $cgh = new C_gio_hang();
                    $giohang = $cgh->lay_Gio_Hang();

                    foreach ($giohang as $key => $value)
                    {
                       // echo $giohang[$key];
                        //echo $giohang[$value];
                        $mkh->Them_Chi_Tiet_Don_Hang($don_hang,$key,$value,0);
                    }

                    $mkh->Cap_Nhat_Don_Gia($don_hang);
                    $mkh->Cap_Nhat_Tong_Tien_Don_Hang($don_hang);

                    $cgh->xoa_Gio_Hang();

                    $view="views/khach_hang/v_dat_hang_thanh_cong.tpl";
                    $smarty->assign("view",$view);
                    $smarty->display('khach_hang/_layoutkhachhang.tpl');
                }
            }
        }
        else
        {
              //View
            $view = "views/khach_hang/v_dang_ky_khach_hang.tpl";
            $smarty->assign("view",$view);
            //Layout chính
            $smarty->display('khach_hang/_layoutkhachhang.tpl');
        }     
    }
}




?>