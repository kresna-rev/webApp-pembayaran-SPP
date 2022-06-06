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

$query_siswa = mysqli_query($connecting, "SELECT * FROM siswa WHERE nisn='{$_GET['i']}'");
$cek_siswa=mysqli_fetch_assoc($query_siswa);
	if($save)
	{
		$query_update="UPDATE siswa SET nama='$var03', id_kelas='$var04', alamat='$var05', no_telp='$var06' WHERE nisn='{$_GET['i']}'";
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
	

	//ini untuk pilihan kelas
  $query_kelas='SELECT * FROM kelas';
  $hasil_kelas=mysqli_query($connecting,$query_kelas);
  foreach($hasil_kelas as $k)
  {
    if($cek_siswa['id_kelas']==$k['id_kelas']){
      $kelas.="<option value='{$k['id_kelas']}' selected> {$k['nama_kelas']} </option>";
    }
    else{
      $kelas.="<option value='{$k['id_kelas']}'> {$k['nama_kelas']} </option>";
    }
  }
	//ini untuk pilihan spp
  $query_spp='SELECT * FROM spp';
  $hasil_spp=mysqli_query($connecting,$query_spp);
  foreach($hasil_spp as $h)
  {
    if($cek_siswa['id_spp']==$h['id_spp']){
      $spp.="<option value='{$h['id_spp']}' selected> {$h['tahun']} </option>";
    }
    else{
      $spp.="<option value='{$h['id_spp']}'> {$h['tahun']} </option>";
    }
  }


$template = "dashboard";
$title = "edit";
$content = "

<h1 class='h3 mb-2 text-gray-800'>Halaman Edit Siswa</h1>
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
                    <label for='nisn' class='form-label'>NISN</label>
                    <input type='text' class='form-control' id='nisn' name='var01' value='$cek_siswa[nisn]' readonly>
                  </div>
                  <div class='mb-3'>
                    <label for='nis' class='form-label'>NIS</label>
                    <input type='text' class='form-control' id='nis' name='var02' value='$cek_siswa[nis]' readonly>
                  </div>
                  <div class='mb-3'>
                    <label for='nama' class='form-label'>Nama</label>
                    <input type='text' class='form-control' id='nama' name='var03' value='$cek_siswa[nama]'>
                  </div>
                  <div class='mb-3'>
                    <label for='kelas' class='form-label'>Kelas</label>
                    <select name='var04' value='$cek_siswa[id_kelas]' class='form-select 
                    form-control' id='kelas'>
                      <option value='' selected>Pilih Kelas...</option>
                      $kelas
                    </select>
                  </div>
                  <div class='mb-3'>
                    <label for='alamat' class='form-label'>Alamat</label>
                    <input type='text' class='form-control' id='alamat' name='var05' value='$cek_siswa[alamat]' >
                  </div>
                  <div class='mb-3'>
                    <label for='telp' class='form-label'>No. Handphone</label>
                    <input type='text' class='form-control' id='telp' name='var06' value='$cek_siswa[no_telp]' >
                  </div>
                  <div class='mb-3'>
                    <label for='spp' class='form-label'>id SPP</label>
                    <select name='var07' value='$cek_siswa[id_spp]' class='form-select 
                    form-control' id='spp' readonly>
                      <option selected>Pilih id SPP...</option>
                      $spp
                    </select>
                  </div>
                  <button type='submit' value='Update' name='save' class='btn btn-success btn-block'>
                    Update
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