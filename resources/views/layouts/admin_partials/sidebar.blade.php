

<!-- Sidebar Menu -->
<ul class="sidebar-menu">
    {{--<li class="header">HEADER</li>--}}
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="/dashboard"><i class="fa fa-link"></i> <span>dashboard</span></a></li>
    <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-user"></i> <span>User</span></a></li>
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
</ul>
<!-- /.sidebar-menu -->