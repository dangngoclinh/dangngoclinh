  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo asset('public/adminlte/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">DANH MỤC</li>
        <li class="treeview">
          <a href="<?php echo URL::route('facebook');?>">
            <i class="fa fa-dashboard"></i> <span>Trang Chủ</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Quản Lý Sản Phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo route('facebook');?>"><i class="fa fa-circle-o"></i> Quản Lý Danh Mục 1</a></li>
            <li><a href="<?php echo route('facebook');?>"><i class="fa fa-circle-o"></i> Quản Lý Danh Mục 2</a></li>
            <li><a href="<?php echo route('facebook');?>"><i class="fa fa-circle-o"></i> Danh Sách Sản Phẩm</a></li>
            <li><a href="<?php echo route('facebook');?>"><i class="fa fa-circle-o"></i> Thêm Sản Phẩm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Tin Tức</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo URL::route('facebook');?>"><i class="fa fa-circle-o"></i> Danh Sách</a></li>
            <li><a href="<?php echo URL::route('facebook');?>"><i class="fa fa-circle-o"></i> Thêm Tin Mới</a></li>
            <li><a href="<?php echo URL::route('facebook');?>"><i class="fa fa-circle-o"></i> Hướng Dẫn Mua Hàng</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Người Dùng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo URL::route('facebook');?>"><i class="fa fa-circle-o"></i> Danh Sách</a></li>
            <li><a href="<?php echo URL::route('facebook');?>"><i class="fa fa-circle-o"></i> Thêm Người Dùng</a></li>
            <li><a href="<?php echo URL::route('facebook');?>"><i class="fa fa-circle-o"></i> Danh Sách Đại Lý</a></li>
            <li><a href="<?php echo URL::route('facebook');?>"><i class="fa fa-circle-o"></i> Danh Sách Đối Tác</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>