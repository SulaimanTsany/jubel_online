<div class="container">
    <br>
    <br>
    <div class="jumbotron">
    <?php foreach ($items as $item) {?>
        <?php if($item->id==''){?> <h2>Pencaharian Tidak ditemukan</h2>  <?php break;}else{ ?>
      <br>
      <diV class="row">
      <li class="media">
        <img class="mr-3" src='#' alt="" >
        <div class="media-body">
          <a class="mt-0 mb-1" href="<?php echo base_url('/Index.php/ItemController/show/').$item->id ?>"><?php echo $item->name  ?></a><br>
          <?php echo "RP.".$item->price ?>
        </div>
      </li>
    </div>
    <?php }} ?>
    </div>
</div>
