<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url() ?>"><i class="fas fa-shopping-cart"></i> Jubel Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if ((isset($auth) && $auth) && $this->Model_user->getRole($this->session->userdata('username')) == 'admin') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("Index.php/Admin/topUp_form") ?>">Users</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarItemDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Item
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarItemDropdown">
                            <a class="dropdown-item" href="<?php echo base_url("Index.php/ItemController/index") ?>">Items</a>
                            <a class="dropdown-item" href="<?php echo base_url("Index.php/ItemController/create") ?>">Add Item</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarCategoryDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarCategoryDropdown">
                            <a class="dropdown-item" href="<?php echo base_url("Index.php/CategoryController/index") ?>">Categories</a>
                            <a class="dropdown-item" href="<?php echo base_url("Index.php/CategoryController/create") ?>">Add Category</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarCategoryDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Laporan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarCategoryDropdown">
                            <a class="dropdown-item" href="<?php echo base_url("Index.php/LaporanController/laporanAplikasi") ?>">Laporan Aplikasi</a>
                            <a class="dropdown-item" href="<?php echo base_url("Index.php/LaporanController/laporanTransaksi") ?>">Laporan Transaksi</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("Index.php/TransactionController/index") ?>") ?>Riwayat Transaksi</a>
                    </li>
                <?php } else if (isset($auth) && $auth) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#") ?><?php echo $this->user->full_name ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#") ?><?php echo convert_to_rupiah($this->user->balance) ?></a>
                    </li>
                <?php } ?>
            </ul>
            <form  action="<?php echo base_url("/Index.php/searchController/index") ?>"class="form-inline my-2 my-lg-0" method="post">
                <input id="inputBarang" list="Listbarang" name="inputBarang"class="form-control form-control-sm mr-sm-2" type="search" placeholder="Cari disni" aria-label="Search" list="cariBarang">
                <datalist id="Listbarang"></datalist>
                <button class="btn btn-outline-success btn-sm my-2 my-sm-0" value="caribarang" type="submit">Search</button>
            </form>
            &nbsp; &nbsp;
            <?php if (isset($auth) && $auth) { ?>
                <a class="btn btn-sm" href=""> <i class="fas fa-user"></i> <?php echo $this->session->userdata('username')?></a>
                <a class="btn btn-sm" href="<?php echo base_url('/Index.php/auth/logout') ?>">Logout <i class="fas fa-sign-out-alt"></i></a>
            <?php } else {?>
                <a class="btn btn-sm" href="<?php echo base_url('/Index.php/auth/login') ?>">Login <i class="fas fa-sign-in-alt"></i> </a>
                <a class="btn btn-sm" href="<?php echo base_url('/Index.php/auth/register') ?>">Register <i class="fas fa-user-plus"></i> </a>
            <?php } ?>
        </div>
    </nav>
