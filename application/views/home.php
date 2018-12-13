<!-- Content-->

<br>
<div class="container">
    <a class="btn" href="<?php echo base_url('/Index.php/ItemController/create') ?>">Add New Item</a>
    <a class="btn" href="<?php echo base_url('/Index.php/CategoryController/index') ?>">Index Category</a>
    <br>


    <div class="row">
        <?php foreach ($items as $item) {?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php echo base_url('/Index.php/ItemController/show/').$item->id ?>">
                    <?php echo $item->name ?>
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
