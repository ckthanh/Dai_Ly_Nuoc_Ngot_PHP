<?php
//Chứa tất cả các hàm có thể xảy ra

@session_start();

class C_gio_hang
{
    protected $smarty;

    function lay_Gio_Hang()
    {
        if(isset($_SESSION['gio_Hang']))
            return $_SESSION['gio_Hang'];
        else    
            return 0;    
    }

    function them_Gio_Hang($maSP, $donGia, $so_Luong)
    {
        //Sẽ có 2 trường hợp --> Sản phẩm mới mua lần đầu và Sản phẩm đó được chọn mua LẦN NỮA

        //Kiểm tra tính hợp lệ
        if ($so_Luong > 0) 
        {
            if (isset($_SESSION['gio_Hang'][$maSP])) 
            {
                //Do cộng dồn nên (số lượng + thành tiền) sẽ xóa hết
                $_SESSION['thanh_Tien'] -= @$_SESSION['gio_Hang'][$maSP] * $donGia;
                $_SESSION['so_Luong'] -= @$_SESSION['gio_Hang'][$maSP];
            }
            //else
            $_SESSION['gio_Hang'][$maSP] = $so_Luong;

            //Nếu thành tiền đã tồn tại
            if (isset($_SESSION['thanh_Tien'])) 
            {
                //Cập nhật lần cuối
                $_SESSION['thanh_Tien'] = @$_SESSION['thanh_Tien'] + ($so_Luong * $donGia);
                $_SESSION['so_Luong'] = @$_SESSION['so_Luong'] + $so_Luong;
            } 
            else
            {
                $_SESSION['thanh_Tien'] = $so_Luong * $donGia;
                $_SESSION['so_Luong'] = $so_Luong;
            }
        }
        elseif($so_Luong ==0)
        {
            xoa_Mat_Hang($maSP, $donGia);
        }
    }



    function xem_Gio_Hang()
    {
        //View
        include_once("controllers/Smarty_dai_ly_nuoc_ngot.php");
        $smarty = new Smarty_dai_ly_nuoc_ngot();

        $giohang = $this->lay_Gio_Hang();

        if($giohang)
        {
            $gio_hang_nuoc_uong = array();

            foreach ($giohang as $key => $value)
            {   
                $gio_hang_nuoc_uong[$key]=$value;      
            }

            if($gio_hang_nuoc_uong)
            {
                //Mới chỉ lấy được mã + số lượng hiện tại
                $_SESSION['gio_hang_nuoc_uong']=$gio_hang_nuoc_uong;

                //Lấy thông tin dựa vào mã
                $smarty->assign("ds_nuoc_uong",$this->lay_Thong_Tin_Nuoc_Uong($gio_hang_nuoc_uong));               
            }
        }

        $smarty->assign("view","views/gio_hang/v_gio_hang.tpl");
        $smarty->display("gio_hang/_layoutgiohang.tpl");  
    }

    function lay_Thong_Tin_Nuoc_Uong($nuoc_uong)
    {
        $ma_nuoc_uong = array();

        foreach ($nuoc_uong as $key => $value)
        {
            $ma_nuoc_uong[] = $key;
        }

        //Gộp thành chuỗi
        $ma_nuoc_uong = implode(",",$ma_nuoc_uong);

        include_once("models/m_san_pham.php");
        $msp = new M_san_pham();
        //Chỉ lấy được mã + số lượng mặc định
        $dsnuocuong = $msp->Lay_Nuoc_Uong_Cho_Gio_Hang($ma_nuoc_uong);

        $ds_nuoc_uong_gio_hang = array();

        //Gán thêm biến số lượng vì trong CSDL không có biến số lượng
        foreach ($dsnuocuong as $item)
        {
            $item->so_Luong = $nuoc_uong[$item->ma_nuoc_uong];

            $ds_nuoc_uong_gio_hang[] = $item;
        }

        return $ds_nuoc_uong_gio_hang;
    }


    function xoa_Mat_Hang($maSP, $donGia)
    {
        //Lấy giỏ hàng về
        $giohang = $this->lay_Gio_Hang();

        $gioHangMoi = array();

        foreach ($giohang as $key => $value) 
        {
           if($key == $maSP)
           {
               //Xóa hết
               $_SESSION['thanh_Tien'] -= $giohang[$maSP]*$donGia;
               $_SESSION['so_Luong'] -= $giohang[$maSP];
           }
           else
           {
               //Còn những sản phẩm còn lại GÁN VÀO MẢNG GIÁ TRỊ MỚI
               $gioHangMoi[$key]=$value;
           }
        }

        if(!empty($gioHangMoi))
        {
            //Gán lại vào $_SESSION['gio_Hang']
            //Mặc định chỉ có 1 session giỏ hàng
            $_SESSION['gio_Hang'] = $gioHangMoi;
        }
        else
        {
            $this->xoa_Gio_Hang();
        }
    }


    function xoa_Gio_Hang()
    {
        unset($_SESSION['gio_Hang']);
        unset($_SESSION['thanh_Tien']);
        unset($_SESSION['so_Luong']);
    }

    //Dùng cho HTML5 Session Storage
    function thanh_Tien()
    {
        if(isset($_SESSION['thanh_Tien']))
            return $_SESSION['thanh_Tien'];
        else
            return 0;    
    }

    function so_Luong()
    {
        if(isset($_SESSION['so_Luong']))
            return $_SESSION['so_Luong'];
        else
            return 0;    
    }

    function cap_Nhat_Gio_Hang($maSP,$so_Luong,$donGia)
    {
        //Kiểm tra tính đúng đắn
        if(!is_numeric($so_Luong))
            return false;
        
        $so_Luong = (int)$so_Luong;

        if($so_Luong>0)
        {
            //Xóa hết trước
            $_SESSION['thanh_Tien'] -= @$_SESSION['gio_Hang'][$maSP]*$donGia;
            //Cập nhật cái mới
            $_SESSION['thanh_Tien'] += $so_Luong * $donGia;

            $_SESSION['so_Luong'] -= @$_SESSION['gio_Hang'][$maSP];
            $_SESSION['so_Luong'] += $so_Luong;

            //Gán lại số lượng cuối cùng vào lại Session['gio_Hang']
            $_SESSION['gio_Hang'][$maSP]=$so_Luong;
        }

        if($so_Luong==0)
        {
            $this->xoa_Mat_Hang($maSP,$donGia);
        }

        //Chặn không cho submit lên server khi gặp lỗi
        return false;
    }


}






?>