<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?=site_url('matakuliah/cetak')?>" method="POST">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Mata Kuliah
                </th>

            </tr>
            <tr>
                <td cosplan="3">
                    <hr>
                </td>

            </tr>
            <tr>
                <th>koden mtk</th>
                <th>:</th>
                <td>
                    <input type="text" name="kode" id="kode">
                </td>
            </tr>
            <tr>
                <th> nama mtk</th>
                <td>:</td>
                <td><input ty="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <select name="sks" id="sks">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
                           
            </tr>
            <tr>
                <td cosplan="3" align="center">
                    <input type="submit"value="submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>