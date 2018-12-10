<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/icon/css/all.css') ?>" rel="stylesheet">
<title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Jual-Beli Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo config_item('base_url') ?>">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="fas fas-sign-out-alt"></span> Keluar</a>
      </li>
    </ul>
    <form  action="Index.php/home/searchPage"class="form-inline my-2 my-lg-0">
      <input id="inputBarang"class="form-control mr-sm-2" type="search" placeholder="Cari disni" aria-label="Search" list="cariBarang">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <datalist id="cariBarang">
                  <option value="Jaket">
                  <option value="Apakah">
                  <option value="Tas">
                  <option value="Elektronik">
      </datalist>



    </form>
    <a class="nav-link" href="<?php echo base_url('/Index.php/home/loginPage') ?>">Login <span class="sr-only"></span></a>
      <a class="nav-link" href="<?php echo base_url('/Index.php/home/signupPage') ?>">Daftar <span class="sr-only"></span></a>
  </div>
</nav>
