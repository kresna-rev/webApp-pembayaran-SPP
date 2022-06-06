<?php
  error_reporting(0);
  // include('../app/database.php');
  

  $query_select='SELECT * FROM kelas';
  $hasil=mysqli_query($connecting,$query_select);
  foreach($hasil as $h)
  {
    $nomor++;
    $data .= "
          <tbody>
            <tr>
              <td>$nomor</td>
              <td>{$h['nama_kelas']}</td>
              <td>{$h['kompetensi_keahlian']}</td>
              <td>
                <a href='?page=hapus_kelas&i={$h['id_kelas']}' class='btn btn-danger btn-circle'>
                  <i class='fas fa-trash'></i>
                </a>
                <a href='?page=edit_kelas&i={$h['id_kelas']}' class='btn btn-primary btn-circle mx-2'>
                  <i class='fas fa-pen'></i>
                </a>
              </td>
            </tr>
          </tbody>
    ";
  }


$template = "dashboard";
$title = "MySpp - DataKelas";
$active3 = "active";
$content = "

  <!-- Page Heading -->
  <h1 class='h3 mb-2 text-gray-800'>Halaman Data Kelas</h1>
  <!-- DataTales Example -->
  <div class='card shadow mb-4'>
    <div class='card-header py-2'>
      <div class='row'>
        <div class='col-6 mt-2'>
          <h6 class='font-weight-bold text-primary'>daftar kelas JeWaiPi</h6>
        </div>
        <div class='ml-auto'>
          <a href='?page=tambah_kelas' class='btn btn-primary mx-3'>tambah 
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
              <th>Nama Kelas</th>
              <th>Kompetensi Keahlian</th>
              <th>Aksi</th>
            </tr>
          </thead>
          $data
          
        </table>
      </div>
    </div>
  </div>


";