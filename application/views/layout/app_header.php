<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/icon/css/all.css') ?>" rel="stylesheet">
<style type="text/css">
#loading {
position: absolute;
left: 0px;
top: 0px;
width: 100%;
height: 100%;
z-index: 800;
background: url(<?php  echo base_url('assets/Jubel_loading.png')?>) 50% 50% no-repeat;
background-color: #FFFFFF;
opacity:0.9;
}
</style>
</head>
<title>HOME</title>
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
      <input id="inputBarang" list="Listbarang" name="inputBarang"class="form-control mr-sm-2" type="search" placeholder="Cari disni" aria-label="Search" list="cariBarang">
      <datalist id="Listbarang"></datalist>
      <button class="btn btn-outline-success my-2 my-sm-0" value="caribarang" type="submit">Search</button>
    </form>
<<<<<<< HEAD
    <?php if (isset($auth) && $auth) { ?>
        <a class="nav-link" href=""><?php echo $this->session->userdata('username')?><span class="sr-only"></span></a>
=======
    <?php if ($auth) { ?>
        <a class="nav-link" href="<?php echo base_url('/index.php/Home/beranda') ?>"><?php echo $this->session->userdata('username')?><span class="sr-only"></span></a>
>>>>>>> b50cd52a3ba49e7820d72aa43653adf1f315bbc8
        <a class="nav-link" href="<?php echo base_url('/Index.php/auth/logout') ?>">Logout<span class="sr-only"></span></a>
    <?php } else {?>
        <a class="nav-link" href="<?php echo base_url('/Index.php/auth/login') ?>">Login<span class="sr-only"></span></a>
        <a class="nav-link" href="<?php echo base_url('/Index.php/auth/register') ?>">Register<span class="sr-only"></span></a>
    <?php } ?>
     </div>
</nav>
