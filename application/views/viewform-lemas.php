<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<html>

<head>
    <title>Form Input Data D-Lemas</title>
</head>

<body>
    <center>
        <form   action="<?=    base_url('lemas/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data D-Lemas
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                </td>
            </tr>
            <tr>

                <th>Nama</th>
                <th>:</th>
                <td>
                    <input type="text"  name="nama" id="nama">
                </td>
                <div class="col-sm-6 col-danger"> <?= form_error('nama');?></div>
            </tr>
            <tr>

                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="nis" id="nis">
                </td>
                <div class="col-sm-6 col-danger"> <?= form_error('nis');?></div>
            </tr>
            <tr>

                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas">
                </td>
                <div class="col-sm-6 col-danger"> <?= form_error('kelas');?></div>
            </tr>
            <tr>

                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tanggal_l" id="tanggal_l">
                </td>
                <div class="col-sm-6 col-danger"> <?= form_error('tanggal_l');?></div>
            </tr>
            <tr>

                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tempat_l" id="tempat_l">
                </td>
                <div class="col-sm-6 col-danger"> <?= form_error('tempat_l');?></div>
            </tr>
            <tr>

                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
                <div class="col-sm-6 col-danger"> <?= form_error('alamat');?></div>
            </tr>
            <tr>

                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_k" value="Laki-Laki" checked="checked">Laki-Laki
                    <input type="radio" name="jenis_k" value="Perempuan">Perempuan
                </td>
                <div class="col-sm-6 col-danger"> <?= form_error('jenis_k');?></div>
            </tr>
            <tr>

                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghuchu">Khonghucu</option>
                    </select>
                </td>
                <div class="col-sm-6 col-danger"> <?= form_error('agama');?></div>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>

</html>

