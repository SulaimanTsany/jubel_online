
<br>
<div class="container">
    <label>
        <h2>Tambah Transaction</h2>
    </label>
    <form action="<?php echo base_url('/Index.php/TransactionController/store')?>" method="POST">
        <div class="form-group">
          <label>Item Id</label>
          <input type="number" class="form-control" placeholder="" name="item_id">
        </div>
        <div class="form-group">
          <label>User Id</label>
          <input type="number" class="form-control" placeholder="" name="user_id">
        </div>
        <div class="form-group">
          <label>Jumlah</label>
          <input type="number" class="form-control" placeholder="" name="amount">
        </div>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>
