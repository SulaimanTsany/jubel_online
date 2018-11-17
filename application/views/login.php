<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/icon/css/all.css') ?>" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <nav class="navbar justify-content-center navbar-light bg-primary">
      <a class="navbar-brand " href="<?php echo base_url('') ?>"
        <h1  style=" font-family: Helvetica, Arial, sans-serif; font-weight:600;color:white;">
          JUBEL
        </h1>
      </a>
    </nav>
    <br>

    <div class="container bg-light" style="padding-top:30px; padding-bottom:20%; ">
<center><h1 class=>Login</h1></center>
<br>
      <form action="/HomePage" method="post">
        <div class="form-group">
          <label for="inputEmail4">Username</label>
          <input type="email" class="form-control" name= "username" id="username" placeholder="Username">
        </div>
      <div class="form-group ">
        <label for="inputPassword4">Masukkan Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      </div>
      <br>
      <button type="submit" class="btn btn-primary"> Login </button>
  </form>

    </div>
  </body>
</html>
