$(document).ready(function()
{
    $(".loainuocuong").click(function()
    {
        //Lấy giá trị về
        $ma_loai_nuoc_uong = $(this).attr("id");
       // alert($ma_loai_nuoc_uong);

       var formData = {
           id: $ma_loai_nuoc_uong
       }

       $.ajax({
            url:"XL_Nuoc_Uong_Trang_Chu.php",
            type:"POST",
            async:false,
            data:formData,
            success: function(){
                alert("Hi");
            }
       });
        
    })
    // function TimTheoMaLoai(ma_loai_nuoc_uong)
    // {
    // var xmlhttp = new XMLHttpRequest();

    // xmlhttp.open("POST","XL_Nuoc_Uong_San_Pham.php");

    // xmlhttp.onreadystatechange = function(){
    //     if(xmlhttp.readyState==4 && xmlhttp.status==20)
    //     {
    //         var data = xmlhttp.responseText;
    //         document.getElementById("hienthimenusanpham").innerHTML = data; 
    //     }
    // };

    // var param = new FormData();
    // param.append("ma_loai_nuoc_uong",)
    // }

});