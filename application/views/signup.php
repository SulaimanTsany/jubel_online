<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <nav class="navbar justify-content-center navbar-light bg-primary">
      <a class="navbar-brand " href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
        <h1  style=" font-family: Helvetica, Arial, sans-serif; font-weight:600;color:white;">
          JUBEL
        </h1>

      </a>
    </nav>
    <br>
    <div class="container bg-light">
      <center><h1 class=>Daftar Login</h1></center>
      <br>
      <form action="/api/v1/todos/submit" method="post">
        <div class="form-group">
          <label for="inputEmail4">Username</label>
          <input type="email" class="form-control" id="textnama" placeholder="Username">
        </div>
      <div class="form-group">
        <label for="inputEmail4">Masukkan Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
      <div class="form-group ">
        <label for="inputPassword4">Masukkan Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>

    <div class="form-group">
      <label for="inputAddress">Masukkan Alamat</label>
      <input type="text" class="form-control" id="inputAddress" >
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Kota</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Provinsi</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <div id="provinsiK"></div>

          <!--<option value="Aceh">Aceh</option>

          <option value="Sumatera Barat">Sumatera Barat</option>
          <option value="Riau">Riau</option>
          <option value="Pekanbaru">Pekanbaru</option>
          <option value="Jambi">Jambi</option>
          <option value="Kepulauan Riau">Kepulauan Riau</option>
          <option value="Bengkulu">Bengkulu</option>
          <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
          <option value="Banten">Banten</option>
          <option value="Jawa Barat">Jawa Barat</option>
          <option value="DKI Jakarta">DKI Jakarta</option>
          <option value="Jawa Tengah">Jawa Tengah</option>
          <option value="DI Yogyakarta">DI Yogyakarta</option>
          <option value="Jawa Timur">Jawa Timur</option>
          <option value="Bali">Bali</option>
          <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
          <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
          <option value="Kalimantan Utara">Kalimantan Utara</option>
          <option value="Kalimantan Barat">Kalimantan Barat</option>
          <option value="Kalimantan Tengah">Kalimantan Tengah</option>
          <option value="Kalimantan Selatan">Kalimantan Selatan</option>
          <option value="Kalimantan Timur">Kalimantan Timur</option>
          <option value="Gorontalo	Gorontalo">Gorontalo	Gorontalo</option>
          <option value="Sulawesi Utara">Sulawesi Utara</option>
          <option value="Sulawesi Barat">Sulawesi Barat</option>
          <option value="Sulawesi Tengah">Sulawesi Tengah</option>
          <option value="Sulawesi Selatan">Sulawesi Selatan</option>
          <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
          <option value="Maluku Utara">Maluku Utara</option>
          <option value="Maluku">Maluku</option>
          <option value="Papua Barat">Papua Barat</option>
          <option value="Papua">Papua</option>-->
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Kode Pos</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload Foto</span>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
        </div>
      </div>
    </div>
    <a href="HomeLogin.html"><button type="submit" class="btn btn-primary"> Signin </button></a>
    <br>
  </form>

    </div>
    <script  src="<?php echo base_url('assets/javascript/provinsi.js') ?>"></script>
  </body>
</html>
