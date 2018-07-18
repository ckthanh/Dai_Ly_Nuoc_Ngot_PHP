 <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
               <span style="font-size:18px;"> Đại Lý Nước Ngọt</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Chào,</span>
                <h2>
                  {$smarty.session.ho_Ten}
                </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">
              <div class="menu_section">
                <h3>Tổng Quan</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="trang_chu.php"><i class="fa fa-home"></i> Trang Chủ </span></a>         
                  </li>

                  <!--Thống kê-->
                  <li>
                    <a>
                      <i class="fa fa-bar-chart-o"></i> Thống Kê<span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Doanh Số </a></li>
                      <li><a href="chartjs2.html">Số Lượng Nhập</a></li>
                      <li><a href="morisjs.html">Số Lượng Tồn</a></li>
                    
                    </ul>
                  </li>

                 

                  <li>
                    <a>
                      <i class="fa fa-desktop"></i> Quản Lý <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="nuoc_uong.php">Nước Uống</a></li>
                      <li><a href="loai_nuoc_uong.php">Loại Nước Uống</a></li>
                      <li><a href="don_hang.php">Đơn Hàng</a></li>
                      <li><a href="khach_hang.php">Khách Hàng</a></li>
                      <li><a href="glyphicons.html">Tài Khoản</a></li>
                      <li><a href="widgets.html">Tin Tức</a></li>
                      <li><a href="invoice.html">Liên Hệ</a></li>
                    </ul>
                  </li>

              
                </ul>
              </div>
            
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Cài Đặt">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Toàn Màn Hình">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Khóa">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Thoát" href="quan_tri.php?func=exit">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>