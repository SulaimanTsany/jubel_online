
<br>
<div class="container">
    <label>
        <h2>Tambah Barang</h2>
    </label>
    <form action="<?php echo base_url('/Index.php/ItemController/store')?>" method="POST">
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" class="form-control" placeholder="nama barang" name="name">
        </div>
        <div class="form-group">
          <label>Kode Barang</label>
          <input type="text" class="form-control" placeholder="barcode" name="code">
        </div>
        <div class="form-group">
          <label>Kategori Barang</label>
          <select class="form-control" name="category_id">
            <?php foreach ($categories as $category) {?>
            <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Harga Barang (Rp)</label>
          <input type="number" class="form-control" placeholder="harga barang" name="price">
        </div>
        <div class="form-group">
          <label>Jumlah</label>
          <input type="number" class="form-control" name="amount">
        </div>
        <div class="form-group">
          <label>Massukkan Gambar Produk</label>
          <input type="file" class="form-control" id="filegambar" placeholder="Pilih gambar file" accept=".png, .jpeg, .jpg" >
          <script type="text/javascript">
            function getFilePath(){
              $('input[type=file]').change(function () {
                var filePath=$('#filegambar').val();
                console.log(filePath);
              });
            }
          </script>

        </div>


        <button type="submit" class="btn">Add</button>
    </form>
</div>
