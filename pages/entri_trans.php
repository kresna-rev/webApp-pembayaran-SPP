<?php

$btn = $_POST['btn'];
if($btn){
  $hasil = "
  
<div class='row'>

  <div class='col-md-6 mb-3'>
    <div class='card shadow-lg' style='max-width: 540px;'>
      <div class='row'>
        <div class='col-6 mx-auto'>
          <img src='assets/img/tzu.jpg' class='img-fluid mb-2 rounded' alt='...'>
          <a href='?page=transaksi' class='btn btn-primary btn-block'>Transaksi</a>
        </div>
        <div class='col-6'>
          <div class='card-body'>
            <p class='card-text'>Tzuyu</p>
            <p class='card-text'>129172816</p>
            <p class='card-text'>X - RPL</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='col-md-6 mb-3'>
    <div class='card shadow-lg' style='max-width: 540px;'>
      <div class='row'>
        <div class='col-6 mx-auto'>
          <img src='assets/img/tzu.jpg' class='img-fluid mb-2 rounded' alt='...'>
          <a href='' class='btn btn-primary btn-block'>Transaksi</a>
        </div>
        <div class='col-6'>
          <div class='card-body'>
            <p class='card-text'>Tzuyu</p>
            <p class='card-text'>129172816</p>
            <p class='card-text'>X - RPL</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='col-md-6 mb-3'>
    <div class='card shadow-lg' style='max-width: 540px;'>
      <div class='row'>
        <div class='col-6 mx-auto'>
          <img src='assets/img/tzu.jpg' class='img-fluid mb-2 rounded' alt='...'>
          <a href='' class='btn btn-primary btn-block'>Transaksi</a>
        </div>
        <div class='col-6'>
          <div class='card-body'>
            <p class='card-text'>Tzuyu</p>
            <p class='card-text'>129172816</p>
            <p class='card-text'>X - RPL</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='col-md-6 mb-3'>
    <div class='card shadow-lg' style='max-width: 540px;'>
      <div class='row'>
        <div class='col-6 mx-auto'>
          <img src='assets/img/tzu.jpg' class='img-fluid mb-2 rounded' alt='...'>
          <a href='' class='btn btn-primary btn-block'>Transaksi</a>
        </div>
        <div class='col-6'>
          <div class='card-body'>
            <p class='card-text'>Tzuyu</p>
            <p class='card-text'>129172816</p>
            <p class='card-text'>X - RPL</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

  ";
}

$template = 'dashboard';
$title = 'MySpp - Entri Transaksi';
$active5 = "active";
$content = "

<h1 class='h3 mb-2 text-gray-800'>Halaman Entri Transaksi</h1>
<div class='row'>
  <div class='col-md-6 p-3'>
    <form class='form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100' method='post'>
      <div class='input-group'>
        <input type='text' class='form-control bg-white border-primary small' placeholder='Cari Siswa...' aria-label='Search' aria-describedby='basic-addon2'>
        <div class='input-group-append'>
          
          <input class='btn btn-primary' type='submit' name='btn' value='Cari'>
          
        </div>
      </div>
    </form>
  </div>
</div>

$hasil

";