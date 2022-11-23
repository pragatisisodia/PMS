<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark2">
        
        <a href="" class="logo">
            <img src="assets/logos/logo.png" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
        
        <div class="container-fluid">
            <div class="collapse" id="search-nav">
                <form action="" method="POST" class="navbar-left navbar-form nav-search mr-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-search pr-1">
                                <i class="fa fa-search search-icon"></i>
                            </button>
                        </div>
                        <input type="search" value="search" class="form-control" name="search" placeholder="Search images...">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item toggle-nav-search hidden-caret">
                    <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                        <i class="fa fa-search"></i>
                    </a>
                </li>

                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="assets/logos/logo.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                        <div class="avatar-sm ml-3">
                            <img src="assets/logos/logo.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                            <li class="user-settings">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">My Profile</a>
                            </li>
                            <li class="user-settings">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>

<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="dark2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="fa fa-dashboard"></i> 
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="visitors_list.php" class="nav-link">
                        <i class="fa fa-users"></i> 
                        <p>Visitors</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="prisoner.php" class="nav-link">
                        <i class="fa fa-list"></i> 
                        <p>Prisoner Records</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="staff_list.php" class="nav-link">
                        <i class="fa fa-user-o"></i> 
                        <p>Staff Records</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">
                        <i class="fa fa-sign-in"></i> 
                        <p>Login</p>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->