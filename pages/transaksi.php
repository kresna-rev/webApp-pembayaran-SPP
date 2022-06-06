<?php

$template = 'dashboard';
$title = 'MySpp - Entri Transaksi';
$content = "

<h1 class='h3 mb-2 text-gray-800'>Halaman Entri Transaksi</h1>


<div class='container'>
  <div class='row p-2'>
    <div class='col-md-6'>
      <form class='form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100'>
        <div class='input-group'>
          <input type='text' class='form-control bg-white border-primary small' placeholder='Cari Siswa...' aria-label='Search' aria-describedby='basic-addon2'>
          <div class='input-group-append'>
            <button class='btn btn-primary' type='button'>
              <i class='fas fa-search fa-sm'></i>
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class='col-md-6'>
      <div class='float-right'>
        <a href='?page=entri_trans' class='btn btn-info'><i class='fas fa-arrow-left'></i></a>
      </div>
    </div>
  </div>
  <!-- Outer Row -->
  <div class='row'>
    <div class='col-md-12 mx-auto'>
      <div class='card rounded o-hidden border-0 shadow-lg my-4'>
        <div class='card-body p-0'>
          <div class='row'>
            <div class='col-md-6 p-3'>
              <div class='row'>
                <div class='col-5 my-auto'>
                  <img src='assets/img/tzu.jpg' class='img-fluid mb-2 rounded' alt='...'>
                </div>
                <div class='col-7'>
                  <div class='card-body'>
                    <p class='card-text'>nama : Tzuyu</p>
                    <p class='card-text'>nis : 129172816</p>
                    <p class='card-text'>kelas : X - RPL</p>
                    <p class='card-text'>Nominal : Rp.99999,-</p>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-md-6'>
              <div class='p-4'>
                <form class='user' action='' method='POST'>
                  <div class='mb-3 row'>
                    <label for='bln' class='col-sm-3 col-form-label'>Bulan</label>
                    <div class='col-sm-9'>
                      <input type='text' class='form-control' id='bln'>
                    </div>
                  </div>
                  <div class='mb-3 row'>
                    <label for='thn' class='col-sm-3 col-form-label'>Tahun</label>
                    <div class='col-sm-9'>
                      <input type='text' class='form-control' id='thn'>
                    </div>
                  </div>
                  <div class='mb-3 row'>
                    <label for='byr' class='col-sm-4 col-form-label'>Jumlah</label>
                    <div class='input-group col-sm-8'>
                      <div class='input-group-prepend'>
                        <span class='input-group-text' id='basic-addon1'>Rp.</span>
                      </div>
                      <input type='text' class='form-control' aria-label='Username' aria-describedby='basic-addon1'>
                      
                    </div>
                  </div>
                  <button type='submit' value='Bayar' name='' class='btn btn-success'>
                    Bayar
                  </button>
                </form>
              </div>
            </div>
            
            <div class='p-5 table-responsive'>
              <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Jan - Feb</td>
                    <td>2022</td>
                    <td>Rp. 80.000,-</td>
                    <td>
                    <a href='?page=hapus_siswa&i={$h['nisn']}' class='btn btn-danger btn-circle'>
                      <i class='fas fa-trash'></i>
                    </a>
                    <a href='?page=edit_siswa&i={$h['nisn']}' class='btn btn-primary mx-2 btn-circle'>
                      <i class='fas fa-pen'></i>
                    </a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Feb - Mar</td>
                    <td>2022</td>
                    <td>Rp. 100.000,-</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Mar - Apr</td>
                    <td>2022</td>
                    <td>Rp. 200.000,-</td>
                    <td>Hapus | Edit</td>
                  </tr>
                </tbody>
                
              </table>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

";