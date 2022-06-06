<?php

$template = 'dashboard';
$title = 'MySpp - History';
$active6 = "active";
$content = "

<h1 class='h3 mb-2 text-gray-800'>Halaman History Pembayaran</h1>


<div class='container'>
  <!-- Outer Row -->
  <div class='row'>
    <div class='col-md-12 mx-auto'>
      <div class='card rounded o-hidden border-0 shadow-lg my-4'>
        <div class='card-body p-0'>
          <div class='row'>
            <div class='col-md-8 p-3'>
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
            
            <div class='p-5 table-responsive'>
              <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>10-01-22</td>
                    <td>Jan - Feb</td>
                    <td>2022</td>
                    <td>Rp. 80.000,-</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>10-02-22</td>
                    <td>Feb - Mar</td>
                    <td>2022</td>
                    <td>Rp. 100.000,-</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>10-03-22</td>
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