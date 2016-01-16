<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-5">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">VestaCP Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-5">
          <ul class="nav navbar-nav">
            
           </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">MonsterCritic <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li><a href="#"><span class="visible-sm visible-xs">Settings<span class="fui-gear"></span></span><span class="visible-md visible-lg"><span class="fui-gear"></span></span></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
    

    <!-- Brand and toggle get grouped for better mobile display -->
    
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="{{ URL::to('admin') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ URL::to('admin/users') }}"><i class="fa fa-fw fa-bar-chart-o"></i> Users</a>
            </li>
            <li>
                <a href="{{ URL::to('admin/resellers') }}"><i class="fa fa-fw fa-table"></i> Resellers</a>
            </li>
            <li>
                <a href="{{ URL::to('admin/administrators') }}"><i class="fa fa-fw fa-desktop"></i> Administrators</a>
            </li>
            <li>
                <a href="{{ URL::to('admin/servers') }}"><i class="fa fa-fw fa-edit"></i> Servers</a>
            </li>
            <li>
                <a href="{{ URL::to('admin/packages') }}"><i class="fa fa-fw fa-desktop"></i> Packages</a>
            </li>
            <li>
                <a href="{{ URL::to('admin/sair') }}"><i class="fa fa-fw fa-wrench"></i> Logout</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>