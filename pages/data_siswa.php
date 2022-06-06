<?php
  error_reporting(0);
  // include('../app/database.php');
  
	$query_kelas="SELECT * FROM kelas";
	$hasil_kelas=mysqli_query($connecting,$query_kelas);
	foreach($hasil_kelas as $hasil)
	{
		$nama_kls.="{$hasil['nama_kelas']}";
		
	}

  $query_select='SELECT * FROM siswa';
  $hasil=mysqli_query($connecting,$query_select);
  foreach($hasil as $h)
  {
    $nomor++;
    $data.="
    
    <tbody>
      <tr>
        <td>$nomor</td>
        <td>{$h['nisn']}</td>
        <td>{$h['nis']}</td>
        <td>{$h['nama']}</td>
        <td>{$h['id_kelas']}</td>
        <td>{$h['alamat']}</td>
        <td>{$h['no_telp']}</td>
        <td>{$h['id_spp']}</td>
        <td>
          <a href='?page=hapus_siswa&i={$h['nisn']}' class='btn btn-danger btn-circle'>
            <i class='fas fa-trash'></i>
          </a>
          <a href='?page=edit_siswa&i={$h['nisn']}' class='btn btn-primary mx-2 btn-circle'>
            <i class='fas fa-pen'></i>
          </a>
          <a href='?page=siswa_resetpas&i={$h['nisn']}' class='btn btn-info btn-circle'>
            <i class='fas fa-undo-alt'></i>
          </a>
        </td>
      </tr>
    </tbody>
    
    ";
  }


$template = "dashboard";
$title = "MySpp - Datasiswa";
$active1 = "active";
$content = "

  <!-- Page Heading -->
  <h1 class='h3 mb-2 text-gray-800'>Halaman Data Siswa</h1>
  <!-- DataTales Example -->
  <div class='card shadow mb-4'>
    <div class='card-header py-2'>
      <div class='row'>
        <div class='col-6 mt-2'>
          <h6 class='font-weight-bold text-primary'>daftar siswa JeWaiPi</h6>
        </div>
        <div class='ml-auto'>
          <a href='?page=tambah_siswa' class='btn btn-primary mx-3'>tambah 
            <i class='fas fa-plus'></i>
          </a>
        </div>
      </div>
    </div>
    <div class='card-body '>
      <div class='table-responsive'>
        <table class='table table-bordered text-center' id='dataTable' width='100%' cellspacing='0'>
          <thead>
            <tr>
              <th>No.</th>
              <th>NISN</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Alamat</th>
              <th>No.Telp</th>
              <th>SPP</th>
              <th>Aksi</th>
            </tr>
          </thead>
          
          $data
          
        </table>
      </div>
    </div>
  </div>


";