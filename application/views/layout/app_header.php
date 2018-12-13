<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/icon/css/all.css') ?>" rel="stylesheet">
<title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="<?php echo base_url() ?>">Jual-Beli Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form  action="<?php echo base_url("/Index.php/searchController/index") ?>"class="form-inline my-2 my-lg-0" method="post">
      <input id="inputBarang" name="inputBarang"class="form-control mr-sm-2" type="search" placeholder="Cari disni" aria-label="Search" list="cariBarang">
      <button class="btn btn-outline-success my-2 my-sm-0" value="caribarang" type="submit">Search</button>
    </form>
    <a class="nav-link" href="<?php echo base_url('/Index.php/home/islogin') ?>">Login <span class="sr-only"></span></a>
      <a class="nav-link" href="<?php echo base_url('/Index.php/home/signupPage') ?>">Daftar <span class="sr-only"></span></a>
  </div>
</nav>
