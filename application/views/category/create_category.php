
<br>
<div class="container">
    <label>
        <h2>Tambah Kategory</h2>
    </label>
    <form action="<?php echo base_url('/Index.php/CategoryController/store')?>" method="POST">
        <div class="form-group">
          <label>Category</label>
          <input type="text" class="form-control" placeholder="category" name="name">
        </div>
        <button type="submit" class="btn">Add</button>
    </form>
</div>
