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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url() ?>"><i class="fas fa-shopping-cart"></i> Jubel Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav mr-auto">
        </ul>
        <form  action="<?php echo base_url("/Index.php/searchController/index") ?>"class="form-inline my-2 my-lg-0" method="post">
            <input id="inputBarang" list="Listbarang" name="inputBarang"class="form-control form-control-sm mr-sm-2" type="search" placeholder="Cari disni" aria-label="Search" list="cariBarang">
            <datalist id="Listbarang"></datalist>
            <button class="btn btn-outline-success btn-sm my-2 my-sm-0" value="caribarang" type="submit">Search</button>
        </form>

    </nav>
