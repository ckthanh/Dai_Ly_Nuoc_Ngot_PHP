<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2 >Quản Lý Nước Uống    <button type="button" class="btn btn-round btn-primary" onclick="window.location='them_nuoc_uong.php'">Thêm Nước Uống</button></h2>
      
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
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
              <th>Mã nước uống</th>
              <th>Tên loại nước uống</th>
              <th>Tên nước uống</th>
               <th>Tên không dấu</th>
              <th>Thành phần</th>
              <th>Dung tích</th>
              <th>Xuất xứ</th>
              <th>Sản xuất</th>
              <th>Đơn giá</th>
              <th>Đơn giá khuyến mãi</th>
              <th>Khuyến mãi</th>
              <th>Hình</th>
              <th>Đơn vị tính</th>
              <th>Chức Năng</th>
            </tr>
          </thead>
          <tbody>
           {foreach $dsnu as $nuocuong} 
            <tr>
                    <td> {$nuocuong->ma_nuoc_uong} </td>
                    <td> {$nuocuong->ten_loai_nuoc_uong} </td>
                    <td>
                       <a href="sua_chi_tiet.php?ma_nuoc_uong={$nuocuong->ma_nuoc_uong}"> {$nuocuong->ten_nuoc_uong} </a>
                     </td>
                     <td>
                       {$nuocuong->ten_khong_dau}
                     </td>
                    <td>{$nuocuong->thanh_phan} </td>
                    <td>{$nuocuong->dung_tich} </td>
                    <td>{$nuocuong->xuat_xu} </td>
                    <td>{$nuocuong->san_xuat} </td>
                    <td>{$nuocuong->don_gia} </td>
                    <td>{$nuocuong->don_gia_khuyen_mai} </td>
                    <td>{$nuocuong->khuyen_mai}</td>
                    <td>{$nuocuong->hinh}</td>
                    <td>{$nuocuong->dvt}</td>
                    <td>
                        <a href="sua_chi_tiet.php?ma_nuoc_uong={$nuocuong->ma_nuoc_uong}" class="btn btn-round btn-primary">
                         Cập Nhật
                        </a>
                        
                       <!-- <a href="javascript:void(0)" onclick="xoa_nuoc_uong({$nuocuong->ma_nuoc_uong})">
                         Xóa
                        </a>
                       --> 
                        <a href="javascript:xoa_nuoc_uong({$nuocuong->ma_nuoc_uong})" class="btn btn-round btn-primary"> Xóa </a>
                    </td>           
            </tr>
              {/foreach}   
          </tbody>
        </table>
      </div>
    </div>
  </div>