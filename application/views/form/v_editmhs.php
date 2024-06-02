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

<?php foreach($user as $u){?>

<div class="container">
  <div class="row justify-content-md-center">
  <div class="col col-sm-12">
    <div class="form-group">
      <h1>Edit Data Mahasiswa</h1>
      <button class="btn btn-primary" onclick="window.location='<?php echo base_url()?>index.php/form/mhs/index'"><i class="fa fa-home"></i>Back to Mahasiswa</button>
    </div>
  </div>
  <form method="post" action="<?php echo base_url(); ?>index.php/form/mhs/update">
  <div class="col col-sm-8">
      <div class="form-group">
        <label for="exampleInputNPM">NPM</label>
        <input type="ematextil" class="form-control" name="npm" aria-describedby="emailHelp" value="<?=$u->npm;?>" readonly>
        <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
      </div>
  </div>
  <div class="col col-sm-8">
      <div class="form-group">
        <label for="exampleInputNama">Nama</label>
        <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" value="<?=$u->nama;?>">
      </div>
  </div>
  <div class="col col-sm-8">
    <div class="form-group">
      <label for="exampleFormControlSelect1">Jurusan</label>
      <select class="form-control" id="exampleFormControlSelect1" name="jurusan">
        <option <?php if($u->jurusan=="Teknik Informatika"); echo 'selected="selected"';?>>Teknik Informatika</option>
        <option <?php if($u->jurusan=="Sistem Informasi"); echo 'selected="selected"';?> >Sistem Informasi</option>
        <option>Manajemen Informatika</option>
        <option>Komputer Akuntansi</option>
        <option>Teknik Komputer</option>
      </select>
    </div>
  </div>
    <div class="col col-sm-8">
      <div class="form-group">
        <label for="exampleInputEmail1">Telp</label>
        <input type="text" class="form-control" name="telp" aria-describedby="emailHelp" value="<?=$u->telp;?>">
      </div>
    </div>
    <div class="col col-sm-8">
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input typ e="text" class="form-control" name="alamat" aria-describedby="emailHelp" value="<?=$u->alamat;?>">
      </div>
    </div>
    <div class="col col-sm-8">
    <div class="form-group">
      &nbsp;
    </div>
  </div>
  <div class="col col-sm-8">
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-primary">Reset</button>&nbsp;
 </div>
    <?php } ?>
  </div>
  <div class="col col-sm-8 msg">
      <?php echo "<h2>".validation_errors('<div class="error">', '</div>')."</h2>"; ?>
  </div>
</form>
  </div> 
</div> <!-- Div COntainer-->

</body>


 <div class="container">
     <div class="row">
        <?php 
        if($this->session->flashdata('success')){
         ?>
           <div class="alert alert-success "  style="display:none;"> 
             <?php  echo $this->session->flashdata('success'); ?>
        </div>
        <?php    
        } else if($this->session->flashdata('error')){
        ?>
         <div class = "alert alert-danger"  style="display:none;">
           <?php echo $this->session->flashdata('error'); ?>
         </div>
        <?php } ?>

     </div>
</div>
     <script>
        $(".alert").fadeIn(1000).fadeOut(5000);
    </script>