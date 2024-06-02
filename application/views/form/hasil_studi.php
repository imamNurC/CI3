<!DOCTYPE html>
<html>
<head>
    <title>Hasil Studi</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
</head>
<body>
    <div class="container">
        <h1>Welcome : <?= $nama; ?></h1>
        <table class="table">
            <tr>
                <th style="text-align: left; padding-right: 10px;">NPM</th>
                <td><?= $npm; ?></td>
            </tr>
            <tr>
                <th style="text-align: left; padding-right: 10px;">Nama</th>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th style="text-align: left; padding-right: 10px;">Jurusan</th>
                <td><?= $jurusan; ?></td>
            </tr>
            <tr>
                <th style="text-align: left; padding-right: 10px;">Jenis Kelamin</th>
                <td><?= $jenis_kelamin; ?></td>
            </tr>
            <tr>
                <th style="text-align: left; padding-right: 10px;">Nilai UTS</th>
                <td><?= $nilai_uts; ?></td>
            </tr>
            <tr>
                <th style="text-align: left; padding-right: 10px;">Nilai UAS</th>
                <td><?= $nilai_uas; ?></td>
            </tr>
            <tr>
                <th style="text-align: left; padding-right: 10px;">Nilai Tugas</th>
                <td><?= $nilai_tugas; ?></td>
            </tr>
            <tr>
                <th style="text-align: left; padding-right: 10px;">Nilai Kehadiran</th>
                <td><?= $nilai_kehadiran; ?></td>
            </tr>
            <tr>
                <th style="text-align: left; padding-right: 10px;">Total Nilai</th>
            <td><?= $total_nilai; ?></td>
</tr>

        </table>
    </div>
</body>
</html>