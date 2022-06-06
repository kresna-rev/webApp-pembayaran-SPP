<?php
error_reporting(0);
include("../app/database.php");

$var01=$_POST['var01'];
$var02=$_POST['var02'];
$var03=$_POST['var03'];
$var04=$_POST['var04'];
$var05=$_POST['var05'];
$var06=$_POST['var06'];
$var07=$_POST['var07'];
$save=$_POST['save'];

	if($save)
	{
		$query_insert="INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) values('$var01','$var02','$var03','$var04','$var05','$var06','$var07');";
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

	//ini untuk pilihan kelas
	$query_kelas="SELECT * FROM kelas";
	$hasil_kelas=mysqli_query($connecting,$query_kelas);
	foreach($hasil_kelas as $hasil)
	{
		$kelas.="<option value='{$hasil['id_kelas']}'> {$hasil['nama_kelas']} </option>";
		
	}
	
	$query_spp="SELECT * FROM spp";
	$hasil_spp=mysqli_query($connecting,$query_spp);
	foreach($hasil_spp as $spp)
	{
		$data_spp.="<option value='{$spp['id_spp']}'> {$spp['id_spp']} </option>";
		
	}


$template = "dashboard";
$title = "tambah";
$content = "

<h1 class='h3 mb-2 text-gray-800'>Halaman Tambah Siswa</h1>
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
                <form class='user' action='' method='post' autocomplete='off'>
                  <div class='mb-3'>
                    <label for='nisn' class='form-label'>NISN</label>
                    <input type='text' class='form-control' id='nisn' name='var01' placeholder='example: 003xxxx'>
                  </div>
                  <div class='mb-3'>
                    <label for='nis' class='form-label'>NIS</label>
                    <input type='text' class='form-control' id='nis' name='var02' placeholder='example: 129xxx'>
                  </div>
                  <div class='mb-3'>
                    <label for='nama' class='form-label'>Nama</label>
                    <input type='text' class='form-control' id='nama' name='var03' placeholder='example: Ucup'>
                  </div>
                  <div class='mb-3'>
                    <label for='kelas' class='form-label'>Kelas</label>
                    <select name='var04' class='form-select 
                    form-control' id='kelas'>
                      <option value='' selected>Pilih Kelas...</option>
                      $kelas
                    </select>
                  </div>
                  <div class='mb-3'>
                    <label for='alamat' class='form-label'>Alamat</label>
                    <input type='text' class='form-control' id='alamat' name='var05' placeholder='example: kp. Durian Runtuh'>
                  </div>
                  <div class='mb-3'>
                    <label for='telp' class='form-label'>No. Handphone</label>
                    <input type='text' class='form-control' id='telp' name='var06' placeholder='example: 089xxxx'>
                  </div>
                  <div class='mb-3'>
                    <label for='spp' class='form-label'>id SPP</label>
                    <select name='var07' class='form-select 
                    form-control' id='spp'>
                      <option selected>Pilih id SPP...</option>
                      $data_spp
                    </select>
                  </div>
                  <button type='submit' value='Simpan' name='save' class='btn btn-success btn-block'>
                    Simpan
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