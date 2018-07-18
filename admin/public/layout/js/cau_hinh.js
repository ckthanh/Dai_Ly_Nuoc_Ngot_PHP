function xoa_nuoc_uong(ma_nuoc_uong)
{
    if(confirm("Xóa nước uống"))
    {
        window.location = "xoa_nuoc_uong.php?ma_nuoc_uong=" +ma_nuoc_uong;
    }
}

function xoa_loai_nuoc_uong(ma_loai_nuoc_uong)
{
    if(confirm("Xóa loại nước uống"))
    {
        window.location="xoa_loai_nuoc_uong.php?ma_loai_nuoc_uong="+ma_loai_nuoc_uong;
    }
}

function xoa_don_hang(ma_don_hang)
{
    if(confirm("Xóa đơn hàng"))
    {
        window.location="xoa_don_hang.php?ma_don_hang="+ma_don_hang;
    }
}

function xoa_khach_hang(ma_khach_hang)
{
    if(confirm("Xóa khách hàng"))
    {
        window.location="xoa_khach_hang.php?ma_khach_hang="+ma_khach_hang;
    }
}