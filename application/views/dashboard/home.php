<br>
<div class="container">
    <br>

    <div class="row">
        <?php foreach ($items as $item) {?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <a href="<?php echo base_url('/Index.php/ItemController/show/').$item->id ?>"><img class="card-img-top" src="<?php echo base_url('/assets/images/700x400.jpg')?>" alt="gambar"></a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="<?php echo base_url('/Index.php/ItemController/show/').$item->id ?>">
                    <?php echo ($item->name) ?>
                </a>
            </h5>
              <h6>
                  <?php echo convert_to_rupiah($item->price) ?>
              </h6>
              <p class="card-text">Stock = <?php echo $item->amount ?></p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
</div>
