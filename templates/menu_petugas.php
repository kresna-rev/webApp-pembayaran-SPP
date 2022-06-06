<?php
$menusidebar = "

<ul class='navbar-nav bg-gradient-success sidebar sidebar-dark accordion' id='accordionSidebar'>

    <!-- Sidebar - Brand -->
    <a class='sidebar-brand d-flex align-items-center justify-content-center  href='#'>
        <div class='sidebar-brand-icon br'>
            <img src='assets/img/Logo.png' alt='User' class=' rounded img-thumbnail bg-transparent mt-3 border-0'>
        </div>
    </a>
    <div class='sidebar-brand sidebar-brand-text my-0'>MySPP</div>

    <!-- Divider -->
    <hr class='sidebar-divider my-0'>
    <li class='nav-item $active'>
        <a class='nav-link' href='index.php'>
            <i class='fas fa-house-user'></i>
            <span>Home</span>
        </a>
    </li>
    
    <hr class='sidebar-divider my-0'>

    <!-- Nav Item - Dashboard -->
    <li class='nav-item '>
        <a class='nav-link' href='?page=entri_trans'>
            <i class='fas fa-fw fa-dollar-sign'></i>
            <span>Entri trnasaksi pembayaran</span></a>
    </li>
    <li class='nav-item '>
        <a class='nav-link' href='?page=history'>
            <i class='fas fa-fw fa-history'></i>
            <span>Lihat history pembayaran</span></a>
    </li>


</ul>

";