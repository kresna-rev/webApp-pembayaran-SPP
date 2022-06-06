<?php
  include("../app/database.php");
  
    $query_hapus="DELETE FROM spp WHERE id_spp='{$_GET['i']}'";
    $hasil=mysqli_query($connecting,$query_hapus);
  
    header("location:?page=data_spp");
  