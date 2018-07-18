<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2 >Quản Lý Nước Uống    <button type="button" class="btn btn-round btn-primary" onclick="window.location='them_loai_nuoc_uong.php'">Thêm Loại Nước Uống</button></h2>
      
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Cài đặt</a>
              </li>           
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Mã loại nước uống</th>
              <th>Tên loại nước uống</th>
              <th>Mô tả</th>  
              <th>Hình</th>
              <th>Trạng thái</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
           {foreach $dslnu as $loainuocuong} 
                <tr>
                    <td> {$loainuocuong->ma_loai_nuoc_uong} </td>
                    <td> 
                      <a href="sua_chi_tiet_loai_nuoc_uong.php?ma_loai_nuoc_uong={$loainuocuong->ma_loai_nuoc_uong}">  {$loainuocuong->ten_loai_nuoc_uong} </a>
                    </td>
                    <td>
                        <textarea name="mo_ta" id="mo_ta" class="ckeditor">
                            {$loainuocuong->mo_ta}
                        </textarea>
                    </td>                  
                    <td>{$loainuocuong->hinh}</td> 
                    <td>{$loainuocuong->trang_thai}</td>             
                    <td>
                         <a href="sua_chi_tiet_loai_nuoc_uong.php?ma_loai_nuoc_uong={$loainuocuong->ma_loai_nuoc_uong}" class="btn btn-round btn-primary">
                         Cập Nhật
                        </a>
                        
                       <!-- <a href="javascript:void(0)" onclick="xoa_nuoc_uong({$nuocuong->ma_nuoc_uong})">
                         Xóa
                        </a>
                       --> 
                        <a href="javascript:xoa_loai_nuoc_uong({$loainuocuong->ma_loai_nuoc_uong})" class="btn btn-round btn-primary"> Xóa </a>
                    </td>           
                </tr>
            {/foreach}   
          </tbody>
        </table>
      </div>
    </div>
  </div>