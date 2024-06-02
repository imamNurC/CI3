<style>
.msg{
  font-color:'red';
}
</style>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/css/jquery.dataTables.min.css') ?>" />

<form method="post" action="<?php echo base_url(); ?>index.php/form/mhs/savemhs">
<div class="container">
  <div class="row justify-content-md-center">
  <div class="col col-sm-12">
    <div class="form-group">
      <h1>Mahasiswa</h1><hr>
    </div>
  </div>
  </div>
<div class="row justify-content-md-center">
    <div class="col col-sm-6">
      <div class="form-group">
        <label for="exampleInputNPM">NPM</label>
        <input type="text" class="form-control" name="npm" aria-describedby="emailHelp" placeholder="Enter npm">
      </div>
    </div>
    <div class="col col-sm-6">
      <div class="form-group">
        <label for="exampleInputNama">Nama</label>
        <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" placeholder="Enter nama">
      </div>
    </div>
</div>
<div class="row justify-content-md-center">
  <div class="col col-sm-6">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Jurusan</label>
        <select class="form-control" id="exampleFormControlSelect1" name="jurusan">
          <option>Teknik Informatika</option>
          <option>Sistem Informasi</option>
          <option>Manajemen Informatika</option>
          <option>Komputer Akuntansi</option>
          <option>Teknik Komputer</option>
        </select>
    </div>
  </div>
  <div class="col col-sm-6">
      <div class="form-group">
        <label for="exampleInputEmail1">Telp</label>
        <input type="text" class="form-control" name="telp" aria-describedby="emailHelp" placeholder="Enter Telp">
        
      </div>
  </div>
</div>
<div class="row justify-content-md-center">
    <div class="col col-sm-6">
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" name="alamat" aria-describedby="emailHelp" placeholder="Enter Alamat">
        
      </div>
    </div>
    <div class="col col-sm-6">
      <div class="form-group">
        &nbsp;
      </div>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col col-sm-12"> &nbsp;
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col col-sm-12">
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
        <a href="<?php echo base_url(); ?>index.php/form/matkul" class="btn btn-primary">Tambah Mata Kuliah</a>

      </div>
      <div class="col col-sm-8 msg">
        <?php echo "<h2>".validation_errors('<div class="error">', '</div>')."</h2>"; ?>
      </div>
      


  </div>
</div>

</div>




</form>



<!-- ALERT -->
 <div class="container" id="alert">
    <?php
      if($msg = $this->session->flashdata('msg')){
        $msg_class = $this->session->flashdata('msg_class');
    ?>
      <div class="alert <?php echo $msg_class; ?>">
        <strong class="hide-it"><?php echo $msg; ?></strong>
          
      </div> 
    <?php 
        }
    ?>     
    
  </div>
<!-- TABLE -->
<div class="containter">
<div class="row">
	  <div class="col-md-12">
<table class="table" id="mydata" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NPM</th>
      <th scope="col">Name</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Telp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
		$no = 1;
		foreach($mhs as $u){ 
		?>
    <tr>
      <th scope="row"><?=$no++;?></th>
      <td><?php echo $u->npm ?></td>
      <td><?php echo $u->nama ?></td>
      <td><?php echo $u->jurusan ?></td>
      <td><?php echo $u->telp ?></td>
      <td><?php echo $u->alamat ?></td>
      <td>
        <?php echo anchor('form/mhs/edit/'.$u->npm,'Edit');?> |
        <?php echo anchor('form/mhs/delete/'.$u->npm,'Hapus');?>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div>
    </div>
    </div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
</script> -->
<script src="<?php  echo base_url('assets/js/jquery-2.2.4.min.js'); ?>"> </script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>

<script>
       // $(".alert").fadeIn(1000).fadeOut(5000);
$(document).ready(function(){  
        //$("#alert").hide(3000);
        $("#alert").fadeIn(1000).fadeOut(3000);
        $('#mydata').DataTable( {
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
          autoWidth: false
        });
});
</script>