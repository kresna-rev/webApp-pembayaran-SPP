<?php
error_reporting(0);
include("../app/database.php");

$var01=$_POST['var01'];
$var02=$_POST['var02'];
$save=$_POST['save'];

	if($save)
	{
		$query_insert="INSERT INTO spp (tahun, nominal) values('$var01','$var02')";
		$h=mysqli_query($connecting,$query_insert);
		if($h)
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


$template = "dashboard";
$title = "tambah";
$content = "

<h1 class='h3 mb-2 text-gray-800'>Halaman Tambah SPP</h1>
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
                    <label for='thn' class='form-label'>Tahun</label>
                    <input type='text' class='form-control' id='thn' name='var01' placeholder='example: 2022'>
                  </div>
                  
                  <label for='nominal' class='form-label'>Nominal</label>
                  <div class='input-group mb-3'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='basic-addon1'>Rp</span>
                    </div>
                    <input type='text' name='var02' class='form-control' placeholder='9999' id='nominal' aria-label='Username' aria-describedby='basic-addon1'>
                  </div>
                  <button type='submit' value='Simpan' name='save' class='btn btn-success btn-block'>
                    Simpan
                  </button>
                  <a href='?page=data_spp' class='btn btn-info btn-block'>Kembali ke Data SPP</a>
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