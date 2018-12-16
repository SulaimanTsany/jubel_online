<br>
<div class="container">
  <h2>Kategori</h2>
  <table class="table table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>Category</th>
              <th>Actions</th>
          </tr>
      </thead>
      <tbody>
          <?php $no=1; foreach ($categories as $category) {?>
          <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $category->name ?></td>
              <td>
                  <a class="btn btn-sm btn-outline-warning"href=""><i class="fas fa-pencil-alt"></i></a>
                  <a class="btn btn-sm btn-danger"href=""><i class="fas fa-trash-alt"></i></a>
              </td>
          </tr>
          <?php } ?>
      </tbody>
  </table>
</div>
