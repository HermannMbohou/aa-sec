<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="assets/images/user-1.png" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="services\auth\auth.php?p=logout" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="nav-small-cap">--- MENU</li>

                        <li> <a href="dashboard.php?d=<?=$user->id?>" aria-expanded="false" ><i class="ti-home"></i><span class="hide-menu">Dashboard</span></a> </li>
                        <li> <a href="transaction.php?d=<?=$user->id?>" aria-expanded="false" ><i class=" ti-stats-up "></i><span class="hide-menu">Transaction</span></a> </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>