<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="POST" action="<?php echo base_url('Index.php/home/index')?>" enctype="multipart/form-data">
              <input type="file" name="gambar" />
              <input type="submit" name="upload_image" value="Upload" />
      </form>
  </body>
</html>
