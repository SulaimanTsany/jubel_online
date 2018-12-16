<br>
<div class="container">
<div class="row">


    <br>
    <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url('/assets/images/700x400.jpg')?>" alt="First slide">
               <div class="carousel-caption d-none d-md-block">
                  <h3>JUBEL</h3>

              </div>
          </div>
          <?php $i=0 ?>
        <?php foreach ($items as $item) {?>
            <?php if ($i==3){
                break;
            }?>
        <div class="carousel-item ">
          <img class="d-block w-100" src="<?php echo base_url('/assets/images/700x400.jpg')?>" alt="First slide">
             <div class="carousel-caption d-none d-md-block">
                <h3><?php echo ($item->name) ?></h3>
                <p><?php echo convert_to_rupiah($item->price) ?></p>
            </div>
        </div>
    <?php } ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</div>
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
