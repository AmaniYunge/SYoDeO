<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>

            </li><br>

            <li class="">
                <a href="{{url('home2')}}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-users fa-fw"></i>Team<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('team/manage')}}">Manage</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>

            <li>
                <a href="#"><i class="fa fa-cogs fa-fw"></i>Service<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('service/manage')}}">Manage</a>
                    </li>
                    
                </ul>
            <li>
                <a href="#"><i class="fa fa-briefcase fa-fw"></i>News<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('news/manage')}}">Manage</a>
                    </li>
                    
                </ul>
                <!-- second-level-items -->
            </li>
            <li>
                <a href="#"><i class="fa fa-camera fa-fw"></i>Gallery<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                     <a href="{{url('gallery/manage')}}">Manage</a>
                    </li>
                    
                </ul>
                <!-- second-level-items -->
            </li>
            <li>
                <a href="#"><i class="fa fa-pencil fa-fw"></i>Slide Show<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('colousel/manage')}}">Manage</a>
                    </li>
                    
                </ul>
                <!-- second-level-items -->
            </li>

            
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
