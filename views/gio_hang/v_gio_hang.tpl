<section id="noidunggiohang" class="mt-5">
    <div class="container">
        {if isset($ds_nuoc_uong)} {assign var=tien_nuoc_uong value=0}
        <div class="row">
                <form action="gio_hang.php" class="w3-container w3-card-4" method="post" style="width:100%">
                    <table class="table table-hover  " cellpadding="0">
                        <thead>
                            <tr>
                                <th >Mã Nước Uống</th>
                                <th  >Tên Nước Uống</th>
                                <th  >Số Lượng</th>
                                <th  >Đơn Giá</th>
                                <th  >Thành Tiền</th>
                                <th  > Xóa</th>
                                <th  >Tổng Tiền</th>
                            </tr>
                        </thead>
                        {foreach $ds_nuoc_uong as $item}
                        <tbody>
                            <tr id="tablebody" class="tablebody">
                                <td>
                                    {$item->ma_nuoc_uong}
                                </td>
                                <td>
                                    {$item->ten_nuoc_uong}
                                    <img src="public/images/hinh_nuoc_uong/{$item->hinh}" alt=" {$item->ten_nuoc_uong}" width="100px">
                                </td>

                                <td>
                                    <input type="text" value="{$item->so_Luong}" name="soluong{$item->ma_nuoc_uong}" />
                                    <input type="hidden" value="{$item->don_gia}" name="dongia{$item->ma_nuoc_uong}" />
                                </td>

                                <td>
                                    {number_format($item->don_gia)}
                                </td>

                                <td>
                                    {number_format($item->so_Luong*$item->don_gia)} {$tien_nuoc_uong=$tien_nuoc_uong+($item->so_Luong*$item->don_gia)}
                                </td>

                                <td>
                                    <input type="checkbox" name="{$item->ma_nuoc_uong}" value="{$item->don_gia}">
                                </td>
                                
                                <td colspan="6s" id="phanThanhTien">
                                  
                                      {number_format($tien_nuoc_uong)}vnđ
                                </td>
                            </tr>

                           
                               
                         
                        </tbody>
                        {/foreach}

                        <div class="nutChucNang float-sm-right mb-2">                       
                           <input type="submit" name="btnCapNhat" value="Cập Nhật" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer" />
                           <input type="submit" name="btnXoaMH" value="Xóa Mặt Hàng" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer" />
                           <input type="button" name="btnXoaGioHang" id="btnXoaGioHang" value="Xóa Giỏ Hàng" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer" />
                           <input type="button" name="btnDatHang" onclick="window.location.href='khach-hang/dat-hang' " value="Mua Hàng" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer" />
                           <input type="button" name="btnMuaTiep" onclick="window.location.href='san-pham/'" value="Mua tiếp" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer" />
                          
                        <!--  <div class="nutChucNang float-sm-right mb-2">-->                
                       </div>          
                    </table>
                </form>
        </div>
        {else}
        <div class="row">
               <div class="text-sm-center">
                 <h3  style="color:#666666">Bạn chưa chọn sản phẩm nào</h3>
               </div> 
          
        </div>
        {/if}
    </div>
</section>


 <script>
 
    var tablebody = document.getElementById('tablebody');

     window.addEventListener('resize',function(){
         if(document.documentElement.clientWidth <500)
         {
             tablebody.classList.add('w3-container');
             tablebody.classList.add('w3-card-4');
             tablebody.classList.add('mt-4');
         }
         else
         {
             tablebody.classList.remove('w3-container');
             tablebody.classList.remove('w3-card-4');
             tablebody.classList.remove('mt-4');
         }
     });
    
    
 </script>