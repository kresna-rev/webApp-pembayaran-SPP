<?php
  error_reporting(0);
  // include('../app/database.php');
  

  $query_select='SELECT * FROM spp';
  $hasil=mysqli_query($connecting,$query_select);
  foreach($hasil as $h)
  {
    $nomor++;
    $data .= "
          <tbody>
            <tr>
              <td>$nomor</td>
              <td>{$h['tahun']}</td>
              <td>Rp. {$h['nominal']}</td>
              <td>
                <a href='?page=hapus_spp&i={$h['id_spp']}' class='btn btn-danger btn-circle'>
                  <i class='fas fa-trash'></i>
                </a>
                <a href='?page=edit_spp&i={$h['id_spp']}' class='btn btn-primary btn-circle mx-2'>
                  <i class='fas fa-pen'></i>
                </a>
                
              </td>
            </tr>
          </tbody>
    ";
  }


$template = "dashboard";
$title = "MySpp - DataSPP";
$active4 = "active";
$content = "

  <!-- Page Heading -->
  <h1 class='h3 mb-2 text-gray-800'>Halaman Data SPP</h1>
  <!-- DataTales Example -->
  <div class='row'>
  <div class='col-md-6 p-3'>
    <form class='form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100' method='post'>
      <div class='input-group'>
        <input type='text' class='form-control bg-white border-primary small' placeholder='Cari SPP...' aria-label='Search' aria-describedby='basic-addon2'>
        <div class='input-group-append'>
          
          <input class='btn btn-primary' type='submit' name='btn' value='Cari'>
          
        </div>
      </div>
    </form>
  </div>
</div>
  <div class='card shadow mb-4'>
    <div class='card-header py-2'>
      <div class='row'>
        <div class='col-6 mt-2'>
          <h6 class='font-weight-bold text-primary'>daftar spp JeWaiPi</h6>
        </div>
        <div class='ml-auto'>
          <a href='?page=tambah_spp' class='btn btn-primary mx-3'>tambah 
            <i class='fas fa-plus'></i>
          </a>
        </div>
      </div>
    </div>
    <div class='card-body '>
      <div class='table-responsive'>
        <table class='table table-bordered text-center' id='datatable' width='100%' cellspacing='0'>
          <thead>
            <tr>
              <th>No.</th>
              <th>Tahun</th>
              <th>Nominal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          $data
          
        </table>
      </div>
    </div>
  </div>


";