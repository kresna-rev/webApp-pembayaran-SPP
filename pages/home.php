<?php

if ($_SESSION['JenisLog'] == 'siswa') 
{
    $nama = $profil['nama'];
}
else
{
    $nama = $profil['nama_petugas'];
}

$template = "dashboard";
$title = "MySpp - Home";
$active = "active";
$content = "

<h1 class='h3 mb-3 text-gray-800'>Selamat Datang, $nama!</h1>

<div class='row'>
  <div class='col-md-6'>
    <div class='card shadow mb-4'>
      <img src='../assets/img/Bg.jpg' alt='smk' class='rounded-top'>
      <a href='#collapseCardExample' class='d-block card-header py-3' data-toggle='collapse' role='button' aria-expanded='true' aria-controls='collapseCardExample'>
      <h6 class='m-0 font-weight-bold text-primary'>SMK PASUNDAN SUBANG</h6>
      </a>
      <div class='collapse ' id='collapseCardExample'>
        <div class='card-body'>
          <h6 class='font-weight-bold text-dark'>SMK PASUNDAN SUBANG<h6>
          <p>
            <i class='fas fa-map-marker-alt'></i>
            Jl. Bagus Yabin (Kopti Raya) No. 6 Kel. Cigadung Kec/Kab. Subang, Jawa Barat
          </p>
          <p>
            <i class='fas fa-phone-alt'></i>
            (0260) 411778
          </p>
          <p>
            <i class='fas fa-envelope'></i>
            smkpas_sbg@yahoo.com
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

";