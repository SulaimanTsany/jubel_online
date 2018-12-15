<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/icon/css/all.css') ?>" rel="stylesheet">
<title></title>
</head>
<body>
    <?php function convert_to_rupiah($angka) {
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
    } ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="<?php echo base_url() ?>">Jubel Online</a>
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
    <?php if (isset($auth) && $auth) { ?>
        <a class="nav-link" href=""><?php echo $this->session->userdata('username')?><span class="sr-only"></span></a>
        <a class="nav-link" href="<?php echo base_url('/Index.php/auth/logout') ?>">Logout<span class="sr-only"></span></a>
    <?php } else {?>
        <a class="nav-link" href="<?php echo base_url('/Index.php/auth/login') ?>">Login<span class="sr-only"></span></a>
        <a class="nav-link" href="<?php echo base_url('/Index.php/auth/register') ?>">Register<span class="sr-only"></span></a>
    <?php } ?>
     </div>
</nav>
