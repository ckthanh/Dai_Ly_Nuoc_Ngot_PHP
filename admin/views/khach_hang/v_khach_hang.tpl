<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2 >Quản Lý Khách Hàng  </h2>
      
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
              <th>Mã khách hàng</th>
              <th>Họ tên</th>
              <th>Số điện thoại</th>
              <th>Địa chỉ</th>
              <th>Email</th>
              <th>Mật khẩu</th>
              <th>Trạng thái</th> 
            </tr>
          </thead>
          <tbody>
           {foreach $dskh as $khachhang} 
            <tr>
                    <td> {$khachhang->ma_khach_hang} </td>
                    <td>  <a href="sua_chi_tiet_khach_hang.php?ma_khach_hang={$khachhang->ma_khach_hang}">{$khachhang->ho_ten} </a> </td>
                    <td>
                      {$khachhang->so_dien_thoai}
                     </td>
                    <td>{$khachhang->dia_chi} </td>
                    <td>{$khachhang->email} </td>
                    <td>{$khachhang->mat_khau} </td>
                    <td>{$khachhang->trang_thai} </td>
                    <td>
                        
                       <!-- <a href="javascript:void(0)" onclick="xoa_khach_hang({$khachhang->ma_khach_hang})">
                         Xóa
                        </a>
                       --> 
                        <a href="javascript:xoa_khach_hang({$khachhang->ma_khach_hang})" class="btn btn-round btn-primary"> Xóa </a>
                    </td>           
            </tr>
              {/foreach}   
          </tbody>
        </table>
      </div>
    </div>
  </div>