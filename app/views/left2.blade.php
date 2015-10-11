<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="images/user.jpg" alt="">
                    </div>
                    <div class="user-info">
                        <div>Amani <strong>Yunge</strong></div>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!--end search section-->
            </li>
            <li class="">
                <a href="{{url('/')}}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>
            <li>
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
            <li>
                <a href="#"><i class="fa fa-home fa-fw"></i>Contacts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('contacts/manage')}}">Manage</a>
                    </li>
                    
                </ul>
                <!-- second-level-items -->
            </li>
            
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
