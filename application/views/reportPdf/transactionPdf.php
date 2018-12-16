<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="">
            <h2 class="text-center">Riwayat Transaksi</h2>
            <p class="text-sm-center" size="10"><?php date_default_timezone_set('Asia/Kuala_Lumpur'); echo date("F j, Y, g:i a") ?></p>
        </div>
        <br>
        <div class="">
            <table class="table table-bordered">
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
    </body>
</html>
