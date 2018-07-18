<?php /* Smarty version Smarty-3.1.18, created on 2018-07-05 07:07:56
         compiled from "views\khach_hang\v_dang_ky_khach_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199955b2386c665f448-99687960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6f00eaae8530ed40969bb613321294cbd55bfd1' => 
    array (
      0 => 'views\\khach_hang\\v_dang_ky_khach_hang.tpl',
      1 => 1530767275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199955b2386c665f448-99687960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b2386c666ee53_28990555',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2386c666ee53_28990555')) {function content_5b2386c666ee53_28990555($_smarty_tpl) {?><div class="container" >
    <div class="w3-container mt-5">
        <div class="row">
            <div class="col-sm-12">
                <form class="w3-container w3-card-4" action="khach_hang.php?key=dat-hang" method="post" onsubmit="return kiemtradulieu(this)" name="frm_dat_hang" >

                    <p align="center" class="mt-3" style="font-size:20px;font-weight: bold;background-color:#0071bb;color:#fff">Vui Lòng Nhập Thông Tin Khách Hàng</p>

                    <?php if (isset($_SESSION['khach_hang'])) {?>
                    <table class="table " cellpadding="10px"  align="center" style="border-collapse: collapse;">
                        <tr>
                            <td align="center">
                                <span style="color:red;">*</span> Họ Tên
                                <br>
                                <input type="text" name="ho_ten" id="ho_ten" value="<?php echo $_SESSION['ho_ten'];?>
" style="text-align: center;width:300px;height:35px" autofocus>
                            </td>
                        </tr>

                        <!--Kiểm tra tính hợp lệ-->
                        <tr>
                            <td align="center">
                                <span style="color:red;">*</span> Số Điện Thoại
                                <br>
                                <input type="text" name="so_dien_thoai" value="<?php echo $_SESSION['so_dien_thoai'];?>
" id="so_dien_thoai" style="text-align: center;width:300px;height:35px">
                            </td>
                        </tr>

                        <tr>
                            <td align="center">
                                <span style="color:red;">*</span> Địa Chỉ
                                <br>
                                <input type="text" name="dia_chi" id="dia_chi" value="<?php echo $_SESSION['dia_chi'];?>
" style="text-align: center;width:300px;height:35px">
                            </td>
                        </tr>

                        <tr>
                            <td align="center"> 
                                Email
                                <br>
                                <input type="email" name="email" id="email" value="<?php echo $_SESSION['email'];?>
" style="text-align: center;width:300px;height:35px" placeholder="Dùng đăng nhập cho lần mua kế tiếp">
                            </td>

                        </tr>   

                        <tr>
                            <td align="center">
                                <!-- <span style="color:red;">*</span>-->Ghi Chú
                                <br>
                                <textarea type="textarea" name="ghi_chu" id="ghi_chu" style="text-align: center;width:300px"> </textarea>
                            </td>
                        </tr>

                        <tr>
                            <td align="center">
                                <span style="font-size:20px;"  class="mb-3">    Hình Thức Thanh Toán </span>
                                <br>

                                <label for="ntkgh">
                                    <input type="radio" name="httt" id="ntkgh" value="Nhận Tiền Khi Giao Hàng" onclick="hiennoidungchuyenkhoan()" checked>Nhận Tiền Khi Giao Hàng
                                </label>
                                <br>
                                <label for="cknh">
                                    <input type="radio" name="httt" id="cknh" value="Chuyển Khoản Ngân Hàng" onclick="hiennoidungchuyenkhoan()" >Chuyển Khoản Ngân Hàng
                                </label>
                            </td>                           
                        </tr>

                        <tr id="noidungchuyenkhoannganhang" style="display: none" align="center">
                             <td >
                                Quý khách vui lòng chuyển qua <a href="#" style="text-decoration: none"> <span style="color: brown">1 trong những tài khoản sau</span></a>
                                <br>
                                <br>
                                <span style="color:gray">* Liên hệ <span style="color:black">0903083306</span> để xác nhận sau khi chuyển tiền  *   </span>
                            </td>
                        </tr>

                        <tr>
                             <td align="center">
                                 <input type="submit" name="submit" value="Đặt Hàng" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer">
                                 
                                 <input type="button" value="Mua tiếp" onclick="window.location.href='gio_hang.php'" class="w3-btn " style="background-color:#0071bb;color:#fff;cursor: pointer"> 
                             </td>   
                        </tr>
                        
                    </table>
                     <?php } else { ?>   
                    <table class="table " cellpadding="10px"  align="center">
                        <tr>
                            <td align="center">
                                <span style="color:red;">*</span> Họ Tên
                                <br>
                                <input type="text" name="ho_ten" id="ho_ten" style="text-align: center;width:300px;height:35px" autofocus>
                            </td>
                        </tr>

                        <!--Kiểm tra tính hợp lệ-->
                        <tr>
                            <td align="center">
                                <span style="color:red;">*</span> Số Điện Thoại
                                <br>
                                <input type="text" name="so_dien_thoai" id="so_dien_thoai" style="text-align: center;width:300px;height:35px">
                            </td>
                        </tr>

                        <tr>
                            <td align="center">
                                <span style="color:red;">*</span> Địa Chỉ
                                <br>
                                <input type="text" name="dia_chi" id="dia_chi" style="text-align: center;width:300px;height:35px">
                            </td>
                        </tr>

                        <tr>
                            <td align="center"> 
                                Email
                                <br>
                                <input type="email" name="email" id="email" style="text-align: center;width:300px;height:35px">
                            </td>
                        </tr>


                        <tr>
                            <td align="center">
                                <!-- <span style="color:red;">*</span>-->Ghi Chú
                                <br>
                                <textarea type="textarea" name="ghi_chu" id="ghi_chu" style="text-align: center;width:300px"> </textarea>
                            </td>
                        </tr>

                        <tr>
                            <td align="center">
                                <span style="font-size:20px;"  class="mb-3">    Hình Thức Thanh Toán </span>
                                <br>

                                <label for="ntkgh">
                                    <input type="radio" name="httt" id="ntkgh" value="Nhận Tiền Khi Giao Hàng" onclick="hiennoidungchuyenkhoan()" checked>Nhận Tiền Khi Giao Hàng
                                </label>
                                <br>
                                <label for="cknh">
                                    <input type="radio" name="httt" id="cknh" value="Chuyển Khoản Ngân Hàng" onclick="hiennoidungchuyenkhoan()" >Chuyển Khoản Ngân Hàng
                                </label>
                            </td>                           
                        </tr>

                        <tr id="noidungchuyenkhoannganhang" style="display: none" align="center">
                             <td >
                                Quý khách vui lòng chuyển qua <a href="#" style="text-decoration: none"> <span style="color: brown">1 trong những tài khoản sau</span></a>
                                <br>
                                <br>
                                <span style="color:gray">* Liên hệ <span style="color:black">0903083306</span> để xác nhận sau khi chuyển tiền  *   </span>
                            </td>
                        </tr>

                        <tr>
                             <td align="center">
                                 <input type="submit" name="submit" value="Đặt Hàng" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer">
                                 
                                 <input type="button" value="Mua tiếp" onclick="window.location.href='gio_hang.php'" class="w3-btn " style="background-color:#0071bb;color:#fff;cursor: pointer"> 
                             </td>   
                        </tr>
                        
                    </table>
                    <?php }?>
                </form>
            </div>
        </div>
    </div>
</div>


<script>

function isMobileValid(phoneNum) {
    var re = /^(090|091|092|093|094|095|096|097|098|099|0120|0121|0122|0123|0124|0125|0126|0127|0128|0129|0160|0161|0162|0163|0164|0165|0166|0167|0168|0169|0190|0191|0192|0193|0194|0195|0196|0197|0198|0199|0188)\d+$/;
    if (phoneNum.match(re)) {
        var mobileValidRegexPattern = '090|091|092|093|094|095|096|097|098|099|0120|0121|0122|0123|0124|0125|0126|0127|0128|0129|0160|0161|0162|0163|0164|0165|0166|0167|0168|0169|0190|0191|0192|0193|0194|0195|0196|0197|0198|0199|0188';
        var mobileValids = mobileValidRegexPattern.split('|');

        for (var i = 0; i < mobileValids.length; i++) {
            var ext = mobileValids[i];
            var phoneExt = '';
            var restNum = '';
            if (phoneNum.length > ext.length) {
                phoneExt = phoneNum.substring(0, ext.length);
                restNum = phoneNum.substring(ext.length);
            }

            if (ext == phoneExt && restNum.length == 7) {
                return true;
            }
        }
        return false;
    }
    else {
        return false;
    }
}

function check_mumberphone(phone) {
	if (isMobileValid($.trim(phone.replace('-',''))) == false){
		$("#warning_phone").css('display','block');
		f.so_dien_thoai.focus();
	}else{	
		$("#warning_phone").css('display','none');
		$('#checkbullet').show();
		$('#checkbullet').fadeOut(2000);
	}
}  

function kiemtradulieu(f)
{
    ho_ten = f.ho_ten.value;
    if(ho_ten == '')
    {
        alert("Vui lòng nhập họ tên");
        f.ho_ten.focus();
        return false;
    }

     so_dien_thoai = f.so_dien_thoai.value;
    if(so_dien_thoai == '')
    {
        alert("Vui lòng nhập điện thoại");
        f.so_dien_thoai.focus();
        return false;
    }
    if(isNaN(so_dien_thoai))
    {
        alert("Vui lòng nhập điện thoại là số");
        f.so_dien_thoai.focus();
        return false;
    }

    if(isMobileValid($.trim(so_dien_thoai.replace("-",""))) == false)
    {
        $("#warning_phone").css('display','block');
		f.so_dien_thoai.focus();
		return false;
    }

    dia_chi = f.dia_chi.value;
      if(dia_chi == '')
      {
          alert("Vui lòng nhập địa chỉ");
          f.dia_chi.focus();
          return false;
      }

}

    function hiennoidungchuyenkhoan() 
    {
        var cknh = document.getElementById("cknh");

        var noidunghien = document.getElementById("noidungchuyenkhoannganhang");


        if (cknh.checked == true) {
            noidunghien.style.display = "block";
        }
        else {
            noidunghien.style.display = "none";
        }
    }
</script><?php }} ?>
