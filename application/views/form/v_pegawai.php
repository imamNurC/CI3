<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/habibi184/assets/css/test.css">
<title></title>

</head>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
<body>
<div class="container-sm border">
<form method="post" action="<?php echo base_url(); ?>form/pegawai/save">

<label>Nama : </label>
<input type="text" name="nama"> <br/>
<label>Email : </label>
<input type="email" name="email"> <br/>
<label>Jenis Kelamin : </label>
<input type='radio' name='jenis_kelamin' value='pria' />Pria

<input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan<br/>
<label>Agama : </label>
<select name="agama">
<option value="islam">Islam</option>
<option value="kristen">Kristen</option>
<option value="katholik">Katholik</option>
<option value="hindu">Hindu</option>
<option value="budha">Budha</option>
</select><br/>
<label>Alamat : </label>
<textarea name="alamat"></textarea><br/><br/>
<input type="submit" name="tombol" value="Simpan"/>
</form>
</div>
</body>
</html>