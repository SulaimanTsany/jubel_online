
<br>
<div class="container">
    <label>
        <h2>Edit Barang</h2>
    </label>
    <form action="<?php echo base_url('/Index.php/ItemController/update')?>" method="POST">
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" class="form-control" value="<?php echo $item['name'] ?>" name="name">
        </div>
        <div class="form-group">
          <label>Kode Barang</label>
          <input type="text" class="form-control" value="<?php echo $item['code'] ?>" name="code">
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
          <input type="number" class="form-control" value="<?php echo $item['price'] ?>" name="price">
        </div>
        <div class="form-group">
          <label>Jumlah</label>
          <input type="number" class="form-control" value="<?php echo $item['amount'] ?>" name="amount">
        </div>
        <input type="text" name="id" value="<?php echo $item['id'] ?>" hidden>
        <button type="submit" class="btn">Update</button>

    </form>
</div>
