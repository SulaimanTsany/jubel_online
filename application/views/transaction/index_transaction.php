<br>
<div class="container">
    <h2>Riwayat Transaksi</h2>
    <br>
    <table class="table">
        <tr>
            <th width="25px">No</th>
            <th>User</th>
            <th>Item</th>
            <th width="55px">Jumlah</th>
            <th>Tanggal</th>
        </tr>
        <?php $no=1; foreach ($transactions as $transaction) {?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $transaction->user?></td>
            <td><?php echo $transaction->item?></td>
            <td><?php echo $transaction->amount?></td>
            <td><?php echo $transaction->date?></td>
        </tr>
        <?php } ?>
    </table>
</div>
