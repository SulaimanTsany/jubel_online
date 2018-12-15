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

            <div class="btn-group" style="margin-left:12px;margin-right:12px;">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span class="fas fa-user"></span> <?php echo $this->session->userdata('username')?><span class="sr-only"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="nav-link" href="<?php echo base_url('/Index.php/auth/logout') ?>">Logout<span class="sr-only"></span></a>
                </div>
            </div>
         </div>
    </nav>
