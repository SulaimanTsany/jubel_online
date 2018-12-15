<br>
<div class="container">
    <a class="btn" href="<?php echo base_url('/Index.php/ItemController/create') ?>">Add New Item</a>
    <a class="btn" href="<?php echo base_url('/Index.php/CategoryController/index') ?>">Index Category</a>
    <br>
    <p><?php echo $balance;?></p>
    <br>

    <div class="row">
        <?php foreach ($items as $item) {?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <a href="<?php echo base_url('/Index.php/ItemController/show/').$item->id ?>"><img class="card-img-top" src="<?php echo base_url('/assets/images/700x400.jpg')?>" alt="gambar"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php echo base_url('/Index.php/ItemController/show/').$item->id ?>">
                    <?php echo strtoupper($item->name) ?>
                </a>
              </h4>
              <h5>
                  <?php echo "Rp ".$item->price ?>
              </h5>
              <a href="<?php echo base_url('/Index.php/ItemController/edit/').$item->id ?>">edit</a>
              <a href="<?php echo base_url('/Index.php/ItemController/destroy/').$item->id ?>">hapus</a>
              <p class="card-text">Stock = <?php echo $item->amount ?></p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
</div>


<script src="<?php echo base_url('assets/bootstrap/js/jquery-3.3.1.slim.min.js') ?>" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js') ?>" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
