$(document).ready(function()
{
    $('#btnXoaGioHang').click(function()
    {
        $.ajax({
            url: "XL_Xoa_Gio_Hang.php",
            type: "GET",
            async:false,
            success: function()
            {
                $("#noidunggiohang").html('<div class="container"> <h3 class="text-sm-center text-xs-center" style="color:#666666"> Hiện tại chưa có sản phẩm trong giỏ hàng </h3> </div>');
                sessionStorage.removeItem("gio_hang");
                $("#soluongdat").html("");
            }
        });

        return false;
    });
});