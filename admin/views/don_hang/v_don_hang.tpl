<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2 >Quản Lý Đơn Hàng   <button type="button" disabled="disabled" class="btn btn-round btn-primary" onclick="window.location='them_don_hang.php'">Thêm Đơn Hàng</button></h2>
      
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Cài đặt 1</a>
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
              <th>Mã đơn hàng</th>
              <th>Mã khách hàng</th>
              <th>Họ tên</th>
              <th>Ngày đặt</th>
              <th>Tổng Tiền</th>
              <th>Phương thức thanh toán</th>
              <th>Trạng thái đơn hàng</th>
               <th>Ghi chú</th>
               <th>Trạng thái </th>
               <th>Chức năng </th>
            </tr>
          </thead>
          <tbody>
           {foreach $dsdh as $donhang} 
            <tr>
                    <td> {$donhang->ma_don_hang} </td>
                    <td> {$donhang->ma_khach_hang} </td>
                    <td> {$donhang->ho_ten} </td>
                    <td> {$donhang->ngay_dat}  </td>
                    <td> {$donhang->tong_tien} </td>
                    <td> {$donhang->phuong_thuc_thanh_toan} </td>
                    <td> {$donhang->trang_thai_don_hang} </td>
                    <td> {$donhang->ghi_chu} </td>
                    <td> {$donhang->trang_thai} </td>
                  
                    <td>
                        <a href="sua_chi_tiet_don_hang.php?ma_don_hang={$donhang->ma_don_hang}" class="btn btn-round btn-primary">
                         Cập Nhật
                        </a>
                        
                       <!-- <a href="javascript:void(0)" onclick="xoa_don_hang({$donhang->ma_don_hang})">
                         Xóa
                        </a>
                       --> 
                        <a href="javascript:xoa_don_hang({$donhang->ma_don_hang})" class="btn btn-round btn-primary"> Xóa </a>
                    </td>           
            </tr>
              {/foreach}   
          </tbody>
        </table>
      </div>
    </div>
  </div>