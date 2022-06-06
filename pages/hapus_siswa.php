<?php
  include("../app/database.php");
  
  $query_hapus="DELETE FROM siswa WHERE nisn='{$_GET['i']}'";
  $hasil=mysqli_query($connecting,$query_hapus);

  header("location:?page=data_siswa");
