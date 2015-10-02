<!-- Sidebar -->
<div class="sidebar">
    <!--- Sidebar navigation -->
    <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
    <ul id="nav" class="nav nav-pills nav-stacked"">
        <!-- Main menu with font awesome icon -->
        <li class="open"><a href="{{url('dashboard')}}"><i class="fa fa-home"></i> Dashboard</a>
            <!-- Sub menu markup 
            <ul>
              <li><a href="#">Submenu #1</a></li>
              <li><a href="#">Submenu #2</a></li>
              <li><a href="#">Submenu #3</a></li>
            </ul>-->
        </li>
        <li class="has_sub">
            <a href="#"><i class="fa fa-list-alt"></i><b>Team</b><span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
                <li><a href="{{url('team/manage')}}">Manage</a></li>
            </ul>
        </li>
        <li class="has_sub">
            <a href="#"><i class="fa fa-file-o"></i><b>Services</b> <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
                <li><a href="{{url('service/manage')}}">Manage</a></li>
            </ul>
        </li>
    <li class="has_sub">
            <a href="#"><i class="fa fa-file-o"></i><b>Contacts</b> <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
                <li><a href="{{url('contacts/manage')}}">Manage</a></li>
            </ul>
        </li>
        <li class="has_sub">
            <a href="#"><i class="fa fa-file-o"></i> <b>Gallery</b><span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
                <li><a href="{{url('gallery/manage')}}">Manage</a></li>
            </ul>
        </li>
        <li class="has_sub">
            <a href="#"><i class="fa fa-file-o"></i> <b>News</b><span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
                <li><a href="{{url('news/manage')}}">Manage</a></li>
            </ul>
        </li>
    <li class="has_sub">
            <a href="#"><i class="fa fa-file-o"></i> <b>Colousel</b><span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
                <li><a href="{{url('colousel/manage')}}">Manage</a></li>
            </ul>
        </li>

    </ul>
</div>

<!-- Sidebar ends -->