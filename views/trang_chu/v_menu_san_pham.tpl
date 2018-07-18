<!--Tách 1-->
<ul class="menusanpham">
	{foreach $dstennuocuong as $tennuocuong}
		<li class="active">
<a href="javascript:void(0)" onclick="DocDSNuocUong({$tennuocuong->ma_loai_nuoc_uong})">{$tennuocuong->ten_loai_nuoc_uong}</a>
		</li>
	{/foreach}					
</ul>
<!--Hết Tách 1-->                    