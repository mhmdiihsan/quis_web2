<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output</title>
</head>

<style>
    fieldset {
        width: 50%;
        margin: 40px auto;
        border-radius: 5px;
    }

    select {
        width: 100%;
    }



</style>

<body>
    <fieldset>
        <legend>Output Transaksi</legend>

        <form method="POST">
            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>

                <tr>
                    <th>Nomor HP</th>
                    <td>:</td>
                    <td>
                        <?= $nhp; ?>
                    </td>
                </tr>

                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                      <?= $merk; ?>
                    </td>
                </th>

                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <?= $ukuran; ?>
                    </td>
                </tr>

                <tr>
                    <th>Harga</th>
                    <td>:</td>
                    <td>
                        <?= $harga; ?>
                    </td>
                </tr>

                <tr>
                    <td cosplan="3" align="center">
                        <hr>
                        <a href="http://localhost/quis_web2/index.php/review">Kembali</a>
                    </td>
                </tr>

            </table>
    </fieldset>
</body>
</html>