<?php
error_reporting(0);
include("../app/database.php");

$var01=$_POST['var01'];
$var02=$_POST['var02'];
$save=$_POST['save'];

	if($save)
	{
		$query_insert="INSERT INTO kelas (nama_kelas, kompetensi_keahlian) values('$var01','$var02');";
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

<h1 class='h3 mb-2 text-gray-800'>Halaman Tambah Kelas</h1>
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
                    <label for='nama' class='form-label'>Nama Kelas</label>
                    <input type='text' class='form-control' id='nama' name='var01' placeholder='example: X - KULI'>
                  </div>
                  <div class='mb-3'>
                    <label for='kompetensi' class='form-label'>Kompetensi Keahlian</label>
                    <input type='text' class='form-control' id='kompetensi' name='var02' placeholder='example: Teknik Perkulian'>
                  </div>
                  <button type='submit' value='Simpan' name='save' class='btn btn-success btn-block'>
                    Simpan
                  </button>
                  <a href='?page=data_kelas' class='btn btn-info btn-block'>Kembali ke Data Kelas</a>
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