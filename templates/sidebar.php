<?php

    switch($_SESSION['JenisLog'])
    {
        case "admin":
            include("menu_admin.php");
        break;
        case "petugas":
            include("menu_petugas.php");
        break;
        case "siswa":
            include("menu_siswa.php");
        break;
    }

$sidebar = "
  
  $menusidebar


";