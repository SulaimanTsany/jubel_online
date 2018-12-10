<br>
<div class="container">
    <table class="table">
        <tr>
            <th>Item</th>
            <th>User</th>
            <th>Amount</th>
            <th>Time</th>
        </tr>
        <?php foreach ($transactions as $transaction) {?>
        <tr>
            <td><?php echo $transaction->item_id?></td>
            <td><?php echo $transaction->user_id?></td>
            <td><?php echo $transaction->amount?></td>
            <td><?php echo $transaction->date?></td>
        </tr>
        <?php } ?>
    </table>
</div>
