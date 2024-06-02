<style>
.msg{
  font-color:'red';
  
}
.icon-24 { font-size: 24px; }
</style>

<!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
<body>

<?php foreach($matkul as $u){?>

<div class="container">
  <div class="row justify-content-md-center">
  <div class="col col-sm-12">
    <div class="form-group">
      <h1>Edit Data Mahasiswa</h1>
      <button class="btn btn-primary" onclick="window.location='<?php echo base_url()?>index.php/form/matkul/index'"><i class="fa fa-home"></i>Back to Matkul</button>
    </div>
  </div>
  <form method="post" action="<?php echo base_url(); ?>index.php/form/matkul/update">
  <div class="col col-sm-8">
    <div class="form-group">
      <label for="exampleInputNPM">Kode Matkul</label>
      <input type="text" class="form-control" name="kd_mk" aria-describedby="emailHelp" value="<?=$u->kd_mk;?>" readonly>
    </div>
  </div>
  <div class="col col-sm-8">
      <div class="form-group">
          <label for="exampleFormControlSelect1">Matakuliah</label>
          <select class="form-control" id="exampleFormControlSelect1" name="matkul">
              <option <?php if($u->matkul=="matkul1"); echo 'selected="selected"';?> >matkul1</option>
              <option <?php if($u->matkul=="matkul2"); echo 'selected="selected"';?> >matkul2</option>
              <option>Manajemen</option>
              <option>Akuntansi</option>
            </select>
        </div>
    </div>
  <div class="col col-sm-8">
    <div class="form-group">
      <label for="exampleInputNama">SKS</label>
      <input type="text" class="form-control" name="sks" aria-describedby="emailHelp" value="<?=$u->sks;?>">
    </div>
  </div>
  <div class="col col-sm-8">
    <div class="form-group">
      <label for="exampleInputEmail1">Semester</label>
      <input type="text" class="form-control" name="semester" aria-describedby="emailHelp" value="<?=$u->semester;?>">
    </div>
  </div>
  <div class="col col-sm-8">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
  
  <?php } ?>
  <div class="col col-sm-8 msg">
    <?php echo validation_errors('<div class="error">', '</div>'); ?>
  </div>
</form>

<div class="container">
  <div class="row">
    <?php if($this->session->flashdata('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php elseif($this->session->flashdata('error')): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('error'); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<script>
  $(".alert").fadeIn(1000).fadeOut(5000);
</script>
