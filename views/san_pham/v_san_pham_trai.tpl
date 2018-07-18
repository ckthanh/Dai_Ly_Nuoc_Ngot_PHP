<div class="sanphamtrai mt-4 w3-container mb-4 w3-card-4">
    <p id="timGia">Tìm Theo Giá</p>
    <div class="luachon">
        <label style="color:#666666">
            <input type="radio" name="ttg" class="luachon" value="50" onclick="ChonTheoGia(this.value)">
             < 50000vnđ 
        </label>
         <br>

        <label style="color:#666666">
            <input type="radio" name="ttg" class="luachon" value="50100" onclick="ChonTheoGia(this.value)" )
            > 50000 - 100000vnđ
        </label>

        <br>
        <label style="color:#666666">
            <input type="radio" name="ttg" class="luachon" value="100200" onclick="ChonTheoGia(this.value)" )
            > 100000 - 200000vnđ
        </label>

        <br>

        <label style="color:#666666">
            <input type="radio" name="ttg" class="luachon" value="500" onclick="ChonTheoGia(this.value)">
            <= 500000vnđ 
        </label>

         <br>
    </div>
</div>

<div class="sanphamtrai mt-4 w3-container mb-4 w3-card-4">
    <p id="timGia">Danh Mục Sản Phẩm</p>    
    <div class="luachon">
        {foreach $dslnu as $loainuocuong}
            <p style="text-align: center">
                <a href="javascript:void(0)"  onclick="DocDSNuocUongSanPham({$loainuocuong->ma_loai_nuoc_uong})">{$loainuocuong->ten_loai_nuoc_uong}</a>
                  <!--<a href="javascript:void(0)" class="loainuocuong" id="{$loainuocuong->ma_loai_nuoc_uong}" >{$loainuocuong->ten_loai_nuoc_uong}</a>-->
            </p>
        {/foreach}
    </div>
</div>