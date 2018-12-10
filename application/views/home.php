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
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
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

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo config_item('base_url') ?>">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
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
        <?php /*if($login){
        echo "<a href=".base_url('/Index.php/home/user_home')."'>".$nama"</a>"
      }else {
        <a class="nav-link" href="<?php echo base_url('/Index.php/home/loginPage') ?>">Login <span class="sr-only"></span></a>
        <a class="nav-link" href="<?php echo base_url('/Index.php/home/signupPage') ?>">Daftar <span class="sr-only"></span></a>
      }
        */?>

        <a class="nav-link" href="<?php echo base_url('/Index.php/home/loginPage') ?>">Login <span class="sr-only"></span></a>
        <a class="nav-link" href="<?php echo base_url('/Index.php/home/signupPage') ?>">Daftar <span class="sr-only"></span></a>
      </div>
    </nav>
  </div>
<!-- NavbarEnd -->

<!-- Content-->

<br>
<div class="container">
    <a class="btn" href="<?php echo base_url('/Index.php/ItemController/create') ?>">Add New Item</a>
    <a class="btn" href="<?php echo base_url('/Index.php/CategoryController/index') ?>">Index Category</a>
    <br>


    <div class="row">
        <?php foreach ($items as $item) {?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php echo base_url('/Index.php/ItemController/show/').$item->id ?>">
                    <?php echo $item->name ?>
                </a>
              </h4>
              <h5>
                  <?php echo "Rp ".$item->price ?>
              </h5>
              <a href="<?php echo base_url('/Index.php/ItemController/edit/').$item->id ?>">edit</a>
              <a href="<?php echo base_url('/Index.php/ItemController/destroy/').$item->id ?>">">hapus</a>
              <p class="card-text">Stock = <?php echo $item->amount ?></p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
</div>


<script src="<?php echo base_url('assets/bootstrap/js/jquery-3.3.1.slim.min.js') ?>" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js') ?>" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
=======
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-3.3.1.slim.min.js') ?>" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/popper.min.js') ?>" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
>>>>>>> Stashed changes
</html>
