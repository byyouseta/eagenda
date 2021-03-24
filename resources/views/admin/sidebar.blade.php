<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('adminlte/dist/img/avatar-default.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Welcome</p>
          <p><b>Nama User</b></p>
          <!-- Status -->
          <!-- Kita tidak pakai
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            Kita tidak pakai status-->
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- KITA TIDAK MENGGUNAKAN SEARCH
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
        -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="#"><i class="fa fa-user"></i> <span>Pegawai</span></a></li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Agenda</span></a></li>
        <!-- Tidak pakai multi level dropdown
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
        Akhir dari DropDown -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>