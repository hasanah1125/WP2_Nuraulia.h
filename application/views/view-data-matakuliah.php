<html>

<head>
    <title>Tampil Data Siswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="6">
                    Tampil Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="6">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $NamaSiswa; ?>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $NIS; ?>
                </td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
            <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>     
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); 
?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
