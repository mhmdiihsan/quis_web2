<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
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
        <legend>Input Transaksi</legend>

        <form method="POST">
            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <Input type="text" name="nama" id="nama">
                        <?= form_error('nama', '<br><span style="color:red;
                        ">', '</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <th>Nomor HP</th>
                    <td>:</td>
                    <td>
                        <Input type="text" name="nhp" id="nhp">
                        <?= form_error('nhp', '<br><span style="color:red;
                        ">', '</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk">
                            <option> -- Pilih -- </option>
                            <?php foreach ($merk as $m) : ?>
                                <option value="<?= $m; ?>"><?= $m; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </td>
                </th>

                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                    <select name="ukuran" id="ukuran">
                            <option> -- Pilih -- </option>
                            <?php for ($i = 32; $i<=44; $i ++) : ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php endfor; ?>

                        </select> 
                    </td>
                </tr>

                <tr>
                    <td cosplan="3" align="center">
                        <hr>
                        <button type="submit">Simpan</button>
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>
</body>
</html>