<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/icon/css/all.css') ?>" rel="stylesheet">
    <title>Cari Barang</title>
  </head>
  <body>
    <nav class="navbar justify-content-center navbar-light bg-primary">
      <a class="navbar-brand " href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
        <h1  style=" font-family: Helvetica, Arial, sans-serif; font-weight:600;color:white;">
          Hasil Pencaharian
        </h1>
      </a>
    </nav>
    <br>
    <div class="container">
    <ul class="list-unstyled">
      <?php /*
      foreach ($data as $ds) {
      ?>
      <li class="media">
        <img class="mr-3" src="<?php echo $ds['photo-product'] ?>" >
        <div class="media-body">
          <h5 class="mt-0 mb-1"><?php echo $ds['nama-Barang'] ?></h5>
          <?php echo $ds['Deskripsi'] ?>
        </div>
      </li>
      <?php} */?>

      <li class="media">
        <img class="mr-3" src='<?php echo base_url('assets/product/photo1.jpg')?>' alt="Generic placeholder image" >
        <div class="media-body">
          <h5 class="mt-0 mb-1">Cuman Contoh</h5>
          Contoh Dari Hasil Gambar
        </div>
      </li>
      <li class="media my-4">
        <img class="mr-3" src='<?php echo base_url('assets/product/photo1.jpg')?>' alt="Generic placeholder image">
        <div class="media-body">
          <h5 class="mt-0 mb-1">List-based media object</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </li>

    </ul>
  </div>
  </body>
</html>
