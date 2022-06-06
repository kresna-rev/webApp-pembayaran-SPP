<?php
error_reporting(0);
include("../app/database.php");

$var01=$_POST['var01'];
$var02=$_POST['var02'];
$var03=$_POST['var03'];
$save=$_POST['save'];

$query_petugas = mysqli_query($connecting, "SELECT * FROM petugas WHERE id_petugas='{$_GET['i']}'");
$cek_petugas=mysqli_fetch_assoc($query_petugas);
  if($save)
  {
    $query_update="UPDATE petugas SET username='$var01', nama_petugas='$var02', level='$var03'  WHERE id_petugas='{$_GET['i']}'";
    $hasil_update=mysqli_query($connecting,$query_update);
    if($hasil_update)
    {
      $ket="
        <div class='alert alert-success alert-dismissible fade show my-2' role='alert'>
          <strong>Selamat!</strong> Data anda telah kami simpan.
        </div>
      ";
    }
    else
    {
      $ket="
        <div class='alert alert-danger alert-dismissible fade show my-2' role='alert'>
          <strong>Ooopss!</strong> Data anda gagal di Simpan.
        </div>
      ";
    }	
  }
	
  $query_level='SELECT * FROM petugas';
  $hasil_level=mysqli_query($connecting,$query_level);
  foreach($hasil_level as $k)
  {
    if($cek_petugas['level']==$k['level']){
      $level.="<option value='{$k['id_petugas']}' selected> {$k['level']} </option>";
    }
    else{
      $level.="<option value='{$k['id_petugas']}'> {$k['level']} </option>";
    }
  }



$template = "dashboard";
$title = "edit";
$content = "

<h1 class='h3 mb-2 text-gray-800'>Halaman Edit Petugas</h1>
$ket
<div class='container'>
  <!-- Outer Row -->
  <div class='row'>
    <div class='col-md-9 mx-auto'>
      <div class='card rounded o-hidden border-0 shadow-lg my-4'>
        <div class='card-body p-0'>
          <div class='row'>
            <div class='col-md'>
              <div class='p-5'>
                <div class='text-center'>
                  <h1 class='h4 text-gray-900 mb-4'>Masukan Data</h1>
                </div>
                <form class='user' action='' method='POST' autocomplete='off'>
                  
                  <div class='mb-3'>
                    <label for='usernama' class='form-label'>Username</label>
                    <input type='text' class='form-control' id='usernama' value='$cek_petugas[username]' name='var01' >
                  </div>
                  <div class='mb-3'>
                    <label for='nama' class='form-label'>Nama</label>
                    <input type='text' class='form-control' id='nama' name='var02' value='$cek_petugas[nama_petugas]' >
                  </div>
                  <div class='mb-3'>
                    <label for='level' class='form-label'>Level</label>
                    <select name='var03' value='$cek_petugas[level]' class='form-select 
                    form-control' id='level'>
                      <option value='' selected>Pilih Level...</option>
                      
                      $level
                    </select>
                  </div>
                  <button type='submit' value='Update' name='save' class='btn btn-success btn-block'>
                    Update
                  </button>
                  <a href='?page=data_petugas' class='btn btn-info btn-block'>Kembali ke Data Petugas</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

";