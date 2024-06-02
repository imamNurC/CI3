<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/MOH.IMAM158/assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5" style="max-width: 600px;"> <!-- Container with max-width to make the form smaller -->
        <h2>Kartu Hasil Studi</h2>
        <form action="<?php echo base_url(); ?>form/studi/save" method="post">
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div>
                    <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki">
                    <label for="laki-laki">Laki-laki</label>
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="nilai_uts" class="form-label">Nilai UTS</label>
                <input type="number" class="form-control" id="nilai_uts" name="nilai_uts" required>
            </div>
            <div class="mb-3">
                <label for="nilai_uas" class="form-label">Nilai UAS</label>
                <input type="number" class="form-control" id="nilai_uas" name="nilai_uas" required>
            </div>
            <div class="mb-3">
                <label for="nilai_tugas" class="form-label">Nilai Tugas</label>
                <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas" required>
            </div>
            <div class="mb-3">
                <label for="nilai_kehadiran" class="form-label">Nilai Kehadiran</label>
                <input type="number" class="form-control" id="nilai_kehadiran" name="nilai_kehadiran" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</div>
</body>
</html>


