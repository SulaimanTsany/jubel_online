<br>
<div class="container">
    <label>
        <h2>Detail Barang</h2>
    </label>
    <div class="">
        <img width="200" height="200" src="<?php if($item['path_image'] != ''){echo base_url($item['path_image']);}else{echo base_url('/product/default.jpg');}?>" alt="gambar">

    </div>
    <div class="form-group">
        <br>
      <label><h3><?php echo strtoupper($item['name']) ?></h3></label>
    </div>
    <div class="form-group">
      <label>Rp <?php echo $item['price'] ?></label>
    </div>
    <div class="form-group">
      <label>Jumlah = <?php echo $item['amount'] ?></label>
    </div>
</div>
