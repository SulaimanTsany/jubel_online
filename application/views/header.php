<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/icon/css/all.css') ?>" rel="stylesheet">
    <title></title>
  </head>
  <body>
<div id="header">

    <nav class="navbar  sticky-top navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand" href="#">Jubel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="home_user">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produck">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cash">Cash</a>
          </li>

        </ul>
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Nama
              <?php /*echo $data['nama'] */ ?>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item" type="button">Keluar</button>
              <button class="dropdown-item" type="button">Ganti Password</button>
            </div>
        </div>
      </div>
    </nav>

  </div>
