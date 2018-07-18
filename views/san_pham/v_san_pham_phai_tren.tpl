<div class="sanphamtop mb-5 " style="display:inline-block;">
    <ul style="display:inline-block;float:right" >
        <!--<li class="dropdown " style="width:180px;display:inline-block">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Loại nước uống
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!--<li><a href="javascript:void()" onclick="window.location='my_pham.php?ma_loai_cha=2&ma_loai_san_pham=48'">Dầu gội</a></li> -->
        <!--      {foreach $dslnu as $loainuocuong}
                                        <li style="text-align: center">
                                            <a href="javascript:void(0)"  onclick="DocDSNuocUongSanPham({$loainuocuong->ma_loai_nuoc_uong})">{$loainuocuong->ten_loai_nuoc_uong}</a>
                                              <!--<a href="javascript:void(0)" class="loainuocuong" id="{$loainuocuong->ma_loai_nuoc_uong}" >{$loainuocuong->ten_loai_nuoc_uong}</a>-->
        <!--         </li>
                                    {/foreach}
                                </ul>
                            </li>-->

        <li class="dropdown" style="width:180px;display:inline-block">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sắp xếp theo
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li style="text-align: center">
                    <!-- <a href="javascript:void(0)" class="btnSapXepGia" id="1" >Giá tăng dần</a> -->
                    <a href="javascript:void(0)" id="SapTangDan" onclick="Sap_Xep_Theo('SapTangDan')">Giá tăng dần</a>
                </li>
                <li style="text-align: center">
                    <!-- <a href="javascript:void(0)" class="btnSapXepGia" id="2">Giá giảm dần</a> -->
                    <a href="javascript:void(0)" id="SapGiamDan" onclick="Sap_Xep_Theo('SapGiamDan')">Giá giảm dần</a>
                </li>

            </ul>
        </li>

        <li style="width:300px;display:inline-block">
            <form onsubmit="$('#keyword').blur();return false;" class="pure-form">
                <input id="keyword" autofocus type="text" name="q" placeholder="Tìm Tên Hoặc Thể Tích ..." style="width:100%;max-width:	400px;outline:0;text-align:center"
                    onkeyup="Tim_Nuoc_Uong(this.value)">
            </form>
        </li>

    </ul>
</div>

<script>
    $(function () {
        // $(".dropdown-menu").click(function ()
        // {
        //     console.log($(this).val());
        // });

        $('#keyword').autoComplete({
            minChars: 1,
            source: function (term, suggest) {
                term = term.toLowerCase();
                var choices = [{ $str }];
                var suggestions = [];
                for (i = 0; i < choices.length; i++)
                    if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                suggest(suggestions);
            }
        });


    });

    $(document).ready(function () {
        /* Placeholder Typewriter */
        var placeholderText = [
            "Bạn muốn tìm gì?",
            "Nước Khoáng?",
            "Nước Ngọt?",
            "Nước Trái Cây Có Cồn",
            "Bia"
        ];
        $('#keyword').placeholderTypewriter({
            text: placeholderText,
            delay: 80,
            pause: 1000
        });
    });

</script>