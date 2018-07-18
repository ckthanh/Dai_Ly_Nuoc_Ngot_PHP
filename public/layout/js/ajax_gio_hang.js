
//Jquery
$(function()
{
    $("a.button-1").click(function()
    {
        //Lấy dữ liệu về

        $key = $(this).attr("id");
         //alert($key);

        $soluonginput = "#soluong"+$key;
        $soLuong = $($soluonginput).val();
        // alert($soLuong);

        $dongiainput = "#dongia"+$key;
        $dongia = $($dongiainput).val();
       //  alert($dongia);

     
        
         var formData = {
             id: $key,
             soluong: $soLuong,
             dongia: $dongia
         };

         $.ajax({
             url: "mua_hang.php",
             type: "POST",
             async: false,
             data: formData,
             dataType:'json',
             success: function(data)
             {
                 alert("Số lượng đặt: "+data['sl']+ ".\n Tổng tiền: "+formatCurrency(data['st']) + "vnđ.");

                 //Lưu sessionStorage
                 var gioHang = 
                 {
                     "sl":data['sl'],
                     "st":data['st']
                 }

            
                 sessionStorage.setItem("gio_hang",JSON.stringify(gioHang));

                 $("#so_san_pham").html(gioHang.sl);
             },
             error: function(error)
             {   
                 alert(error.statusText);
             }   
         });

         return false;
    });
});


//JavaScript
 //Định dạng số
 function formatCurrency(num) 
 {
    var num = num.toString().replace(/\$|\,/g,'');
    if(isNaN(num))
    num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num*100+0.50000000001);
    num = Math.floor(num/100).toString();
    for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
    num = num.substring(0,num.length-(4*i+3))+','+
    num.substring(num.length-(4*i+3));
    return (((sign)?'':'-') + num);
 }
