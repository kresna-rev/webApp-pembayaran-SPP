<?php
    $login=$_POST['login'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

 ProsesLogin($username, $password, $level);
 if ($_SESSION['Id']) {
   header("location:index.php");
 }


$template = "front";
$title = "My Spp - Login";
$konten = "
<div class='container'>
  <!-- Outer Row -->
  <div class='row'>
    <div class='col-md-5 text-center my-auto text-white'>
      <img src='../assets/img/Logo.png' class='rounded bg-transparent border-0 img-thumbnail mt-2' style='width:72%; height:70%;'>
      <div class='h4'>
        Selamat Datang di MySpp!
      </div>
    </div>

    <div class='col-md-7'>
      <div class='card rounded o-hidden border-0 shadow-lg my-4'>
        <div class='card-body p-0'>
          <div class='row'>
            <div class='col-md'>
              <div class='p-5'>
                <div class='text-center'>
                  <h1 class='h4 text-gray-900 mb-4'>Login</h1>
                </div>
                <form class='user' action='' method='post' autocomplete='off'>
                  <div class='form-group'>
                    <input type='text' class='form-control form-control-user' id='exampleInputEmail' aria-describedby='emailHelp' placeholder='Username' name='username'>
                  </div>
                  <div class='form-group'>
                    <input type='password' class='form-control form-control-user' id='exampleInputPassword' placeholder='Password' name='password'>
                  </div>
                  <div class='form-group'>
                    <select name='level' class='form-select rounded-pill form-control'>
                      <option selected>Login Sebagai...</option>
                      <option value='1'>Admin</option>
                      <option value='2'>Petugas</option>
                      <option value='3'>Siswa</option>
                    </select>
                  </div>
                  <button type='submit' class='btn btn-primary btn-user btn-block' onclick='dialog()'>
                    Login
                  </button>
                  $keterangan
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

