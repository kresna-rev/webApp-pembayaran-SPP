<?php
  include("../app/database.php");
  
    $query_hapus="DELETE FROM petugas WHERE id_petugas='{$_GET['i']}'";
    $hasil=mysqli_query($connecting,$query_hapus);
  
    header("location:?page=data_petugas");
  