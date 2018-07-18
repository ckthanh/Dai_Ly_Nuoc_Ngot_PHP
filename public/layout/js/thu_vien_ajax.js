function DocDSNuocUong(ma_loai_nuoc_uong)
{
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST","XL_Nuoc_Uong_Trang_Chu.php");

    xmlhttp.onreadystatechange = function()
    {
        if(xmlhttp.readyState == 4 && xmlhttp.status==200)
        {
            var data = xmlhttp.responseText; 
            document.getElementById("hienthimenusanpham").innerHTML = data; 
        }
    };

    var param = new FormData();
    param.append("ma_loai_nuoc_uong",ma_loai_nuoc_uong);

    xmlhttp.send(param);
    
}
function DocDSNuocUongSanPham(ma_loai_nuoc_uong)
{
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST","XL_Nuoc_Uong_San_Pham.php");

    xmlhttp.onreadystatechange = function()
    {
        if(xmlhttp.readyState == 4 && xmlhttp.status==200)
        {
            var data = xmlhttp.responseText; 
            document.getElementById("hienthimenusanpham").innerHTML = data; 
        }
    };

    var param = new FormData();
    param.append("ma_loai_nuoc_uong",ma_loai_nuoc_uong);

    xmlhttp.send(param);
    
}


function Tim_Nuoc_Uong(gtTim)
{
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST","XL_Tim_Nuoc_Uong_San_Pham.php");

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            var data = xmlhttp.responseText;
            document.getElementById("hienthimenusanpham").innerHTML=data;
        }
    };

    var param = new FormData();
    param.append("gtTim",gtTim);

    xmlhttp.send(param);
}

function Sap_Xep_Theo(gtTang)
{
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST","XL_Sap_Tang_Giam_San_Pham.php");

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            var data = xmlhttp.responseText;
            document.getElementById("hienthimenusanpham").innerHTML=data;
            
        }
    }

    var param = new FormData();
    param.append("gtTang",gtTang);
    xmlhttp.send(param);

}

function ChonTheoGia(luaChon)
{
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST","XL_Tim_Theo_Gia_San_Pham.php");

    xmlhttp.onreadystatechange = function()
    {
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            var data = xmlhttp.responseText;
            document.getElementById("hienthimenusanpham").innerHTML=data;
        }
    }

    var param = new FormData();
    param.append("luaChon",luaChon);
    xmlhttp.send(param);
}

// $(document).ready(function(){
//     $(".luachon").click(function(){
      
//     });
// });
