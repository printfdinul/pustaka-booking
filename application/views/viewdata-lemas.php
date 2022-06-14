<html>

<head>
    <title>Tampil Data D-Lemas</title>
</head>
<body>
    <center>
        <table>
            <tr>
            <th colspan="3">
                Tampil Data D-Lemas
            </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>

                <td>Nama</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
                </tr>
                <tr>

                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $nis; ?>
                </td>
                </tr>
                <tr>

                <td>kelas</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
                </tr>
                <tr>

                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $tanggal_l; ?>
                </td>
                </tr>
                <tr>

                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <?= $tempat_l; ?>
                </td>
                </tr>
                <tr>

                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
                </tr>
                <tr>

                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?= $jenis_k; ?>
                </td>
                </tr>
                <tr>

                <td>Agama</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
                </tr>
                <tr>

                <td colspan="3" align="center">
                    <a href="<?= base_url('lemas'); 
                    ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>