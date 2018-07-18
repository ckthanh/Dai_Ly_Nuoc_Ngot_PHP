<?php /* Smarty version Smarty-3.1.18, created on 2018-06-22 11:32:28
         compiled from "smarty\templates\_topnav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210475b2c8420321f45-06363476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01e0bcfb93aa4e6a7c4a1220521b5f6480f08c9c' => 
    array (
      0 => 'smarty\\templates\\_topnav.tpl',
      1 => 1529659734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210475b2c8420321f45-06363476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b2c8420339644_47981925',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2c8420339644_47981925')) {function content_5b2c8420339644_47981925($_smarty_tpl) {?>      <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""> <?php echo $_SESSION['ho_Ten'];?>

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
              <!-- /top navigation --><?php }} ?>
