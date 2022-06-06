<?php

function Profil()
    {
        global $connecting;
        switch($_SESSION['JenisLog'])
         {
             case "admin":
                 $query = mysqli_query($connecting, "SELECT * FROM petugas WHERE username= '$_SESSION[Id]' ");
                 $hasil = mysqli_fetch_assoc($query);
             break;
             case "petugas":
                 $query = mysqli_query($connecting, "SELECT * FROM petugas WHERE username= '$_SESSION[Id]' ");
                 $hasil = mysqli_fetch_assoc($query);
             break;
             case "siswa":
                 $query = mysqli_query($connecting, "SELECT * FROM siswa WHERE nis= '$_SESSION[Id]' ");
                 $hasil = mysqli_fetch_assoc($query);
             break;
         }

         return $hasil;
    }

    $profil = Profil();

function ProsesLogin($username, $password, $level)
{
  global $connecting;
  switch($level)
  {
    case "1":  //admin
      $query_admin = mysqli_query($connecting, "SELECT * FROM petugas WHERE username='$username' AND password='$password' AND level='admin'");
      $cek_admin=mysqli_fetch_assoc($query_admin);
      if($cek_admin)
      {
        $_SESSION['JenisLog']="admin";
        $_SESSION['Id']=$username;
        header("location:index.php?page=home");
      }
      else 
      {
        $keterangan="<div class='alert alert-danger mt-3'>Maaf username / password salah</div>";
      }
    break;
    case "2":  //petugas
      $query_petugas = mysqli_query($connecting, "SELECT * FROM petugas WHERE username='$username' AND password='$password' AND level='petugas'");
      $cek_petugas=mysqli_fetch_assoc($query_petugas);
      if($cek_petugas)
      {
        $_SESSION['JenisLog']="petugas";
        $_SESSION['Id']=$username;
        header("location:index.php?page=home");
      }
      else 
      {
        $keterangan="<div class='alert alert-danger mt-3'>Maaf username / password salah</div>";
      }
    break;
    case "3":  //siswa
      $query_siswa = mysqli_query($connecting, "SELECT * FROM siswa WHERE nis='$username' AND password='$password' ");
      $cek_siswa = mysqli_fetch_assoc($query_siswa);
      if($cek_siswa)
      {
        $_SESSION['JenisLog']="siswa";
        $_SESSION['Id']=$username;
        header("location:index.php?page=home");
      }
      else 
      {
        $keterangan="<div class='alert alert-danger mt-3'>Maaf username / password salah</div>";
      }
    break;
    }
}