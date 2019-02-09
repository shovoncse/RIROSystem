<div class="left side-menu">

    <div class="slimscroll-menu" id="remove-scroll">

        <!-- LOGO -->
        <div class="topbar-left" style="background-color: #ffff5f;">
            <a href="/" class="logo">
                <span>
                    <img src="{{URL::to('assets/images/logo.png')}}" alt="logo">
                </span>
                <i>
                    <img src="{{URL::to('assets/images/logo_sm.png')}}" alt="" height="28">
                </i>
            </a>
        </div>

        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{URL::to('assets/images/users/avatar-1.png')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
            </div>
            <h5><a href="#">Irnadi Zen</a> </h5>
            <p class="text-muted">Administrator</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <!--<li class="menu-title">Navigation</li>-->

                <li>
                    <a href="/">
                        <i class="fi-air-play"></i> <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Inventory </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="/parts">Part Management</a></li>
                        <li><a href="/hot-part-inventory">Hot Part Inventory</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-mail"></i><span> Configuration </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="#">Turbine Configuration</a></li>
                        <li><a href="#">Installed Asset</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-layout"></i><span> Schedule </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="#">Operation Schedule</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> Maintenance </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="#">Maintenance Schedule</a></li>
                        <li><a href="#">Asset Tracker</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> User Management </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="#">Add New User</a></li>
                        <li><a href="#">User List</a></li>
                    </ul>
                </li>

                

            </ul>

        </div>
        <!-- Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>