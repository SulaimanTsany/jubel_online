<br>
<div class="container">
    <h2>Riwayat Transaksi</h2>
    <br>
    <table class="table">
        <tr>
            <th>Item</th>
            <th>User</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
        </tr>
        <?php foreach ($transactions as $transaction) {?>
        <tr>
            <td><?php echo $transaction->item?></td>
            <td><?php echo $transaction->user?></td>
            <td><?php echo $transaction->amount?></td>
            <td><?php echo $transaction->date?></td>
        </tr>
        <?php } ?>
    </table>
</div>
