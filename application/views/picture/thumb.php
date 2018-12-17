<div class="container">
    <div class="row">
        <label>Masukkan gambar yang ingin di input</label><br>
        <label>Nama Item : <?php echo $item['name'] ?></label><br>
        <label>Code Item : <?php echo $item['code'] ?></label><br>
        <label>ID Item : <?php echo $item['id'] ?></label><br>
    <br>
    </div>
    <div class="row">

<div class="jumbotron">


        <?php echo form_open_multipart('thumbnail/prosesupload', 'method="post"') ; ?>
                <input type="file" name="gambar" />
                <input type="number" class="form-control" id="item_id" name="item_id" hidden>
                <input type="submit"  value="Upload" />
        <?php echo form_close() ?>
    </div>
</div>
</div>
