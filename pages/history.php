<?php

$template = 'dashboard';
$title = 'MySpp - History';
$active6 = "active";
$content = "

<h1 class='h3 mb-2 text-gray-800'>Halaman History Pembayaran</h1>


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
    
  </div>
  <!-- Outer Row -->
  <div class='row'>
    <div class='col-md-12 mx-auto'>
      <div class='card rounded o-hidden border-0 shadow-lg my-4'>
        <div class='card-body p-0'>
          <div class='row'>
            <div class='p-5 table-responsive'>
              <table class='table table-bordered' id='datatable' width='100%' cellspacing='0'>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>10-01-22</td>
                    <td>Tzu</td>
                    <td>Jan - Feb</td>
                    <td>2022</td>
                    <td>Rp. 80.000,-</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>10-02-22</td>
                    <td>Ji</td>
                    <td>Feb - Mar</td>
                    <td>2022</td>
                    <td>Rp. 100.000,-</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>10-03-22</td>
                    <td>Mo</td>
                    <td>Mar - Apr</td>
                    <td>2022</td>
                    <td>Rp. 200.000,-</td>
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