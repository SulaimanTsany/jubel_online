<div class="container">
    <br>

    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#topupModal">
      TopUp Saldo
    </button>

    <!-- Modal -->
    <div class="modal fade" id="topupModal" tabindex="-1" role="dialog" aria-labelledby="topupModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Topup Saldo User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url('/Index.php/admin/topup')?>" method="post">
                <div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="topup_value" value="10000" checked>
                      <label class="form-check-label">
                        Rp. 10.000
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="topup_value" value="20000">
                      <label class="form-check-label">
                        Rp. 20.000
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="topup_value" value="50000">
                      <label class="form-check-label">
                        Rp. 50.000
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="topup_value" value="100000">
                      <label class="form-check-label">
                        Rp. 100.000
                      </label>
                    </div>
                </div>
                <br>
                <div class="input-group mb-3">
                    <select class="form-control" name="id">
                        <option>Pilih Username</option>
                        <?php foreach ($users as $user) {?>
                        <option value="<?php echo $user->id ?>"><?php echo $user->username ?></option>
                        <?php } ?>
                      </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-success float-right">TopUp</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <div class="">
        <table class="table">
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Saldo</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($users as $user) {?>
            <tr>
                <td><?php echo $user->username ?></td>
                <td><?php echo $user->full_name ?></td>
                <td><?php echo convert_to_rupiah($user->balance) ?></td>
                <td>
                    <?php if ($this->session->userdata('username') == $user->username) { continue; }?>
                    <button type="button" name="button" class="btn btn-danger btn-sm">tombol</button>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

</div>
