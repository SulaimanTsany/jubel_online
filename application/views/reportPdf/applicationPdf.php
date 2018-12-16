<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php function convert_to_rupiah($angka) {
            return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
        } ?>

        <br>
        <div class="">
            <h2>Daftar User</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="25px">No</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($users as $user) {?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $user->username ?></td>
                        <td><?php echo $user->full_name ?></td>
                        <td><?php echo convert_to_rupiah($user->balance) ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <br>
        <div class="">
            <h2>Daftar Barang</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="25px">No</th>
                        <th>Name</th>
                        <th>Kode</th>
                        <th width="50px">Stock</th>
                        <th>Kategori</th>
                        <th>Harga</th>
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
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <br>
        <div class="">
            <h2>Daftar Kategori</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="25px">No</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($categories as $category) {?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $category->name ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
