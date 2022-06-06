<?php
error_reporting(0);
include("../app/database.php");

$var01=$_POST['var01'];
$var02=$_POST['var02'];

$save=$_POST['save'];

$query_petugas = mysqli_query($connecting, "SELECT * FROM petugas WHERE id_petugas='{$_GET['i']}'");
$cek_petugas=mysqli_fetch_assoc($query_petugas);
	if($save)
	{
		$query_update="UPDATE petugas SET password='$var04'  WHERE id_petugas='{$_GET['i']}";
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
	


$template = "dashboard";
$title = "reset";
$content = "

<h1 class='h3 mb-2 text-gray-800'>Halaman Reset Password Siswa</h1>
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
                    <label for='' class=nisn'form-label'>Username</label>
                    <input type='text' class='form-control' id='nisn' name='var01' value='$cek_petugas[username]' readonly>
                  </div>
                  <div class='mb-3'>
                    <label for='pw' class='form-label'>Password Baru</label>
                    <input type='text' class='form-control' id='pw' name='var02' value='$cek_petugas[password]' readonly>
                  </div>
                  
                  <button type='submit' value='Reset' name='save' class='btn btn-success btn-block'>
                    Reset
                  </button>
                  <a href='?page=data_siswa' class='btn btn-info btn-block'>Kembali ke Data Siswa</a>
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