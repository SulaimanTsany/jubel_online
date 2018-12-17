<div class="jumbotron bg-dark" >
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-ride="carousel">
            <div class="carousel-inner">

                <?php $i=0 ?>
                <?php foreach ($items as $item) {?>
                    <?php if ($i==0){ ?>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('/product/thumb/Jubel_loading.png')?>" alt="First slide">
                            <div class="carousel-caption d-none d-md-block text-dark bg-light">
                                <h2>JUBEL</h2>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($i==3){
                        break;
                    }?>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="<?php if($item->path_image != ''){echo base_url($item->path_image);}else{echo base_url('/product/default.jpg');}?>" alt="First slide">
                        <div class="carousel-caption d-none d-md-block text-dark bg-light">
                            <h2><?php echo ($item->name) ?></h2>
                            <p><?php echo convert_to_rupiah($item->price) ?></p>
                        </div>
                    </div>
                <?php $i++ ;} ?>
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
</div>

<div class="container">
    <br>
    <div class="row">


        <?php foreach ($items as $item) {?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="<?php echo base_url('/Index.php/ItemController/show/').$item->id ?>">
                    <img class="card-img-top" src="<?php if($item->path_image != ''){echo base_url($item->path_image);}else{echo base_url('/product/default.jpg');}?>" alt="gambar"></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo base_url('/Index.php/ItemController/show/').$item->id ?>">
                                <?php echo ($item->name); ?>
                            </a>
                        </h5>
                        <h6>
                            <?php echo convert_to_rupiah($item->price); ?>
                        </h6>
                        <div class="">
                            <div class="row">
                                <div class="col">
                                    <p class="card-text">Stock = <?php echo $item->amount; ?></p>
                                </div>
                                <?php if (isset($auth) && $auth) {?>
                                    <div class="col">
                                        <button  class="btn btn-sm float-right btn-success" data-toggle="modal" data-target="#buyItem<?php echo $item->id;?>">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <?php if (isset($auth) && $auth) {?>
                        <!-- Modal -->
                        <div class="modal fade" id="buyItem<?php echo $item->id?>" tabindex="-1" role="dialog" aria-labelledby="buyItem<?php echo $item->id?>Title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Beli Item</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo base_url('/Index.php/Home/buyItem')?>" method="post">
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" value="<?php echo $item->id ?>" name="item_id" hidden>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" value="<?php echo $this->user->id ?>" name="user_id" hidden>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Item</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control-plaintext" placeholder="<?php echo $item->name ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Harga</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control-plaintext" placeholder="<?php echo convert_to_rupiah($item->price ) ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Jumlah</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" value="1" min="1" max="<?php echo $item->amount ?>" name="amount">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success float-right">Buy</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>
</div>
