<br>
<div class="container">
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
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
  </div>
