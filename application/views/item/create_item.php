
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
          <label>Harga Barang (Rp)</label>
          <input type="number" class="form-control" placeholder="harga barang" name="price">
        </div>
        <div class="form-group">
          <label>Jumlah</label>
          <input type="number" class="form-control" name="amount">
        </div>
        <button type="submit" class="btn">Add</button>
    </form>
</div>
