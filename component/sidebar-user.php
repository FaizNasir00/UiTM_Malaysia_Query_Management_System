
<?php include 'loader.php'; ?>
<ul class="navbar-nav bg-gradient-gray sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="new-query.php">
        <div class="sidebar-brand-icon">
            <img src="img/icon.png" style="max-width: 40px; border-radius: 6px;" />
        </div>
        <div class="sidebar-brand-text mx-3 display-8">InQKA UiTM</div>
    </a>


    <!-- Divider -->


    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMenu"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-desktop"></i>
            <span>Query</span>
        </a>
        <div id="collapseMenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu</h6>
    
                <a class="collapse-item" href="new-query.php">New Query</a>
                <a class="collapse-item" href="search-query.php">View Query</a> 
                <a class="collapse-item" href="logout.php">Log Out</a>
        
            </div>
        </div>
    </li>


   
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>