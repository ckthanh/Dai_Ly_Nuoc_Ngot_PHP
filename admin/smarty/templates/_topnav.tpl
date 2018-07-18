      <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""> {$smarty.session.ho_Ten}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Hồ sơ</a></li>
                    <li><a href="javascript:;" onclick="alert('Liên hệ: 012220476xx để hỗ trợ')">Giúp đỡ</a></li>
                    <li>
                      <a href="quan_tri.php?func=exit" ><i class="fa fa-sign-out pull-right"></i>Thoát</a>
                    </li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>C.K.T</span>
                          <span class="time">3 phút trước</span>
                        </span>
                        <span class="message">
                          Lipsum dolor sit amet
                        </span>
                      </a>
                    </li>
                      <div class="text-center">
                        <a>
                          <strong>Xem Tất Cả</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
              <!-- /top navigation -->