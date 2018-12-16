<div class="container">

    <br>
    <a class="btn btn-success" href="<?php echo base_url("Index.php/Home/index_user_view") ?>">User View</a>
    <br>
    <br>
    <h2>Items</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Kode</th>
                <th>Stock</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($items as $item) {?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $item->name ?></td>
                <td><?php echo $item->code ?></td>
                <td><?php echo $item->amount ?></td>
                <td><?php echo $this->Model_Category->getName($item->category_id) ?></td>
                <td><?php echo convert_to_rupiah($item->price) ?></td>
                <td>
                    <a class="btn btn-sm btn-outline-warning"href="<?php echo base_url('/Index.php/ItemController/edit/').$item->id ?>"><i class="fas fa-pencil-alt"></i></a>
                    <a class="btn btn-sm btn-danger"href="<?php echo base_url('/Index.php/ItemController/destroy/').$item->id ?>"><i class="fas fa-trash-alt"></i></a>
                    <a  class="btn btn-success btn-sm" data-toggle="modal" data-target="#buyItem<?php echo $item->id?>">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

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
                                <div class="form-group">
                                  <input type="number" class="form-control" value="<?php echo $item->id ?>" name="item_id" hidden>
                                </div>
                                <div class="form-group">
                                  <input type="number" class="form-control" value="<?php echo $this->user->id ?>" name="user_id" hidden>
                                </div>
                                <div class="form-group">
                                  <label>Item</label>
                                  <input type="number" class="form-control" placeholder="<?php echo $item->name ?>">
                                </div>
                                <div class="form-group">
                                  <label>Harga</label>
                                  <input type="number" class="form-control" placeholder="<?php echo convert_to_rupiah($item->price ) ?>">
                                </div>
                                <div class="form-group">
                                  <label>Jumlah</label>
                                  <input type="number" class="form-control" placeholder="1" min="1" max="<?php echo $item->amount ?>" name="amount">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success float-right">Buy</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
