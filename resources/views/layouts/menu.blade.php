<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{Auth::user()->pathphoto}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-users"></i>
                    <span>Usuários</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right"></span>
                    </span>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-th"></i> <span>Posts</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green"></small>
                    </span>
                </a>
            </li>
                <li>
                    <a href="#">
                        <i class="fa fa-th"></i> <span>TESTE</span>
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-th"></i>TESTE</a></li>
                        <li><a href=""><i class="fa fa-th"></i>TESTE</a></li>
                    </ul>
                </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<!-- =============================================== -->
