<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php echo form_open_multipart(''); ?>
              <input type="file" name="file" />
              <input type="submit"  value="Upload" />
      <?php echo form_close() ?>
  </body>
</html>
