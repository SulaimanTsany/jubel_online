<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/icon/css/all.css') ?>" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <br>
	<br>



    <div class="container " style="padding-top:12%; padding-left:23%; padding-right:23%; padding-bottom:20%; ">
<center><h1 class=>Login</h1></center>
<br>
      <form action="<?php echo base_url('index.php/home/islogin') ?>" method="post">
        <div class="form-group">
          <label for="inputEmail4">Username</label>
          <input type="text" class="form-control" name= "name" id="name" placeholder="Username">
        </div>
      <div class="form-group ">
        <label for="inputPassword4">Masukkan Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      </div>
      <br>
      <button type="submit" class="btn btn-primary" value="Login"> Login </button>
  </form>

    </div>
  </body>
</html>
