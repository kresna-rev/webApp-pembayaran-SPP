<?php
  include("../app/database.php");
  
    $query_hapus="DELETE FROM kelas WHERE id_kelas='{$_GET['i']}'";
    $hasil=mysqli_query($connecting,$query_hapus);

    header("location:?page=data_kelas");
  