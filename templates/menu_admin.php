<?php
$menusidebar = "

<!-- Sidebar -->
<ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>

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
    <li class='nav-item $active1'>
        <a class='nav-link' href='?page=data_siswa'>
            <i class='fas fa-fw fa-user'></i>
            <span>Data Siswa</span></a>
    </li>
    <li class='nav-item $active2'>
        <a class='nav-link' href='?page=data_petugas'>
            <i class='fas fa-fw fa-user'></i>
            <span>Data Petugas</span></a>
    </li>
    <li class='nav-item $active3'>
        <a class='nav-link' href='?page=data_kelas'>
            <i class='fas fa-fw fa-user'></i>
            <span>Data Kelas</span></a>
    </li>
    <li class='nav-item $active4'>
        <a class='nav-link' href='?page=data_spp'>
            <i class='fas fa-fw fa-user'></i>
            <span>Data Spp</span></a>
    </li>
    <li class='nav-item $active5'>
        <a class='nav-link' href='?page=entri_trans'>
            <i class='fas fa-fw fa-dollar-sign'></i>
            <span>Entri transaksi pembayaran</span></a>
    </li>
    <li class='nav-item $active6'>
        <a class='nav-link' href='?page=history'>
            <i class='fas fa-fw fa-history'></i>
            <span>Lihat history pembayaran</span></a>
    </li>
    <li class='nav-item $active7'>
        <a class='nav-link' href='?page=generate_report'>
            <i class='fas fa-cog'></i>
            <span>Generate laporan</span></a>
    </li>


</ul>
<!-- End of Sidebar -->
";