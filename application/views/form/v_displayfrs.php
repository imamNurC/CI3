<html>
  <head>
   <style>
.ui-front {
    z-index: 9999;
}

.modal-confirm {
  color: #636363;
  width: 400px;
}
.modal-confirm .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-size: 14px;
}
.modal-confirm .modal-header {
  border-bottom: none;
  position: relative;
}
.modal-confirm h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -10px;
}
.modal-confirm .close {
  position: absolute;
  top: -5px;
  right: -2px;
}
.modal-confirm .modal-body {
  color: #999;
}
.modal-confirm .modal-footer {
  border: none;
  text-align: center;
  border-radius: 5px;
  font-size: 13px;
  padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
  color: #999;
}
.modal-confirm .icon-box {
  width: 80px;
  height: 80px;
  margin: 0 auto;
  border-radius: 50%;
  z-index: 9;
  text-align: center;
  border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
  color: #f15e5e;
  font-size: 46px;
  display: inline-block;
  margin-top: 13px;
}
.modal-confirm .btn {
  color: #fff;
  border-radius: 4px;
  background: #60c7c1;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  min-width: 120px;
  border: none;
  min-height: 40px;
  border-radius: 3px;
  margin: 0 5px;
  outline: none !important;
}
.modal-confirm .btn-info {
  background: #c1c1c1;
}
.modal-confirm .btn-info:hover, .modal-confirm .btn-info:focus {
  background: #a8a8a8;
}
.modal-confirm .btn-danger {
  background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
  background: #ee3535;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}


</style>

<!------ Include the above in your HEAD tag ---------->


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?=base_url('assets/css/jquery.dataTables.min.css') ?>" /> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
<form method="post" action="<?php echo base_url(); ?>index.php/form/frs/addfrs">
<div class="container">
  <div class="row justify-content-md-center">
  <div class="col col-sm-12">
    <div class="form-group">
      <h1>Form Rencana Studi (FRS)</h1><hr>
    </div>
  </div>
  </div>
<div class="row justify-content-md-center">
    <div class="col col-sm-4">
      <div class="form-group">
        <!-- <label for="exampleInputNPM">NPM</label> -->
        <input type="text" class="form-control" id="npm" name="npm" aria-describedby="emailHelp" placeholder="Enter NPM">
      </div>
    </div>
    <div class="col col-sm-6">
      <div class="form-group">
        <!-- <label for="exampleInputNPM">Nama</label> -->
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
      </div>
    </div>
    <div class="col col-sm-2">
      <div class="form-group">
        <button type="button" class="btn btn-primary" id="browseMHS">
         Browse
      </button>
      </div>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col col-sm-4">
      <div class="form-group">
        <!-- <label for="exampleInputNPM">NPM</label> -->
        <input type="text" class="form-control" id="kd_mk" name="kd_mk" aria-describedby="emailHelp" placeholder="Enter Matkul Code">
      </div>
    </div>
    <div class="col col-sm-6">
      <div class="form-group">
        <!-- <label for="exampleInputNPM">Nama</label> -->
        <input type="text" class="form-control" id="matkul" name="matkul" aria-describedby="emailHelp" placeholder="Enter Matkul Name">
      </div>
    </div>
    <div class="col col-sm-2">
      <div class="form-group">
        <button type="button" class="btn btn-primary" id="browseMatkul">
         Browse
      </button>
      </div>
    </div>
</div>

<div class="row justify-content-md-center">
    <div class="col col-sm-4">
      <div class="form-group">
        <select name="status" class="form-control">
          <option>-- Status --</option>
          <option>New</option>
          <option>Remedial</option>
        </select>
      </div>
    </div>
    <div class="col col-sm-6">
      <div class="form-group">
      </div>
    </div>
    <div class="col col-sm-2">
      <div class="form-group">
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
<!-- <div class="containter"> -->
<div class="row">
	<div class="col-md-12">
  <table class="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode Matkul</th>
        <th scope="col">Matkul</th>
        <th scope="col">NPM</th>
        <th scope="col">Nama</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      $no = 1;
      foreach($frs as $u){ 
      ?>
      <tr>
        <th scope="row"><?=$no++;?></th>
        <td><?php echo $u->kd_mk ?></td>
        <td><?php echo $u->matkul ?></td>
        <td><?php echo $u->npm ?></td>
        <td><?php echo $u->nama ?></td>
        <td><?php echo $u->status ?></td>

        <td>
        <a data-id="<?php echo $u->id; ?>" class="btn btn-primary btnEdit">Edit</a>
        <a data-id="<?php echo $u->id; ?>" class="btn btn-danger  btnDelete">Delete</a> 
        <!-- button value="<?php echo $u->id; ?>" id="confirm-delete" type="button" class="btn btn-danger confirm-delete">Delete ?</button-->

        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <div>
</div>
<!-- </div> -->
</body>
<!-- Mahasiswa Modal -->
<div class="modal fade" id="modalMHS">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
       <h4 class="modal-tittle">Mahasiswa</h4>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">x</span> <span class="sr-only">Close</span>
          </button>
          
       </div>
       <div class="modal-body">
          <table class="table table-bordered">
          <?php foreach ($mhs as $row) { ?>
          <tr>
              <td><?php echo $row->npm;?> </td>
              <td><?php echo $row->nama;?> </td>
              <td> <button class="btn btn-primary return-data" id="<?php echo $row->npm;?>" nama="<?php echo $row->nama;?>"><i class="icon-search"></i>choose</button></td>
          <?php } ?>
          </tr>
          </table>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      
      </div>
    </div>
  </div>
</div>

<!-- Matkul Modal -->
<div class="modal fade" id="modalMatkul">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
       <h4 class="modal-tittle">Mata Kuliah</h4>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">x</span> <span class="sr-only">Close</span>
          </button>
          
       </div>
       <div class="modal-body">
          <table class="table table-bordered">
          <?php foreach ($matkul as $row) { ?>
          <tr>
              <td><?php echo $row->kd_mk;?> </td>
              <td><?php echo $row->matkul;?> </td>
              <td> <button class="btn btn-primary return-matkul" kd_mk="<?php echo $row->kd_mk;?>" matkul="<?php echo $row->matkul;?>"><i class="icon-search"></i>choose</button></td>
          <?php } ?>
          </tr>
          </table>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      
      </div>
    </div>
  </div>
</div>

<!-- EDIT -->
<div class="modal fade" id="updateFrs" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog ui-front modal-xl" role="document"> <!--sg,lg,xl -->
      <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-tittle">Update FRS</h4>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">x</span> <span class="sr-only">Close</span>
              </button>
              
          </div>
            <form id="updateMatkul" name="updateMatkul" action="<?php echo site_url('form/frs/update');?>" method="post">
            <div class="modal-body">
           <div class="row justify-content-md-center">
              <input type="hidden" name="id_frs" id="id_frs"> 
                <div class="col col-sm-6">
                  <div class="form-group">
                    <input type="text" name="npm_edit" id="npm_edit" placeholder="Enter NPM" class="form-control" autocomplete="on"> 
                  </div>
                </div>
                <div class="col col-sm-8">
                  <div class="form-group">
                  <input type="text" class="form-control" id="name_edit" name="name_edit" readonly placeholder="Enter Name">
                  </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
             
                <div class="col col-sm-6">
                  <div class="form-group">
                  <input type="text" name="kd_mk_edit" id="kd_mk_edit" placeholder="Enter Code" class="form-control" autocomplete="on"> 
                  </div>
                </div>
                <div class="col col-sm-8">
                  <div class="form-group">
                  <input type="text" class="form-control" id="matkul_edit" name="matkul_edit" readonly placeholder="Enter Matkul Name">
                  </div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col col-sm-8">
                  <div class="form-group">
                    <input type="text" name="id_test" id="id_test">
                    <select name="status_edit" id="status_edit" class="form-control">
                      <option>-- Status --</option>
                      <option value="New" <?php //if($u->jurusan=="Teknik Informatika"); echo 'selected="selected"';?>>New</option>
                      <option value="Remedial">Remedial</option>
                    </select>
                  </div>
                </div>
                <div class="col col-sm-6">
                  <div class="form-group">
                  </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-sm-12"> &nbsp;
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-sm-8">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                  </div>
                  <div class="col col-sm-8 msg">
                    <?php echo "<h2>".validation_errors('<div class="error">', '</div>')."</h2>"; ?>
                  </div> 
              </div>
            </div>
              </div>
            </form>
      </div>
    </div>
</div>

<!--- MODAL CONFIRM -->

<!-- Modal HTML -->
<div id="deleteModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE5CD;</i>
        </div>
        <h4 class="modal-title">Are you sure?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete these records? This process cannot be undone.</p>
        <form id="deleteMatkul" name="deleteMatkul" action="<?php echo site_url('form/frs/delete');?>" method="post">
            <input type="text" name="idDelete" id="idDelete">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger btnDelete">Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
</script> -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js'); ?>"> </script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script> 
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>"></script>

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

$(function(){
  $('#browseMHS').click(function(){
    //alert('test');
    $('#modalMHS').modal('show');
  });
});

$(function(){
  $('#editBrowseMHS').click(function(){
    //alert('test');
    $('#modalMHS').modal('show');
  });
});


$(function(){
  $('#browseMatkul').click(function(){
    //alert('test');
    $('#modalMatkul').modal('show');
  });
});

$(function(){
  $('#editBrowseMatkul').click(function(){
    //alert('test');
    $('#modalMatkul').modal('show');
  });
});

$(document).ready(function() {
    $('.return-data').click(function() {        
        var id = $(this).attr('id');
        var nama=$(this).attr('nama');
        //alert(nama);
        $('#npm').val(id);
        $('#name').val(nama);
    });
});

$(document).ready(function() {
    $('.return-matkul').click(function() {        
        var id = $(this).attr('kd_mk');
        var nama=$(this).attr('matkul');
        //alert(nama);
        $('#kd_mk').val(id);
        $('#matkul').val(nama);
    });
});

</script>

<script type="text/javascript">
$(document).ready(function(){
  $('.btnEdit').click(function(){ 
    var frs_id = $(this).attr('data-id');
    //$('#updateModal').modal('show');
      $.ajax({
        //data: frs_id,
        url:'frs/edit/'+frs_id,
        type:"GET",
        dataType:"json",
        success: function(data){
          $('#updateFrs').modal('show');
          const result = JSON.parse(JSON.stringify(data));
          $('#updateFrs #id_frs').val(result.data[0]['id']);
          $('#updateFrs #kd_mk_edit').val(result.data[0]['kd_mk']);
          $('#updateFrs #matkul_edit').val(result.data[0]['matkul']);
          $('#updateFrs #npm_edit').val(result.data[0]['npm']);
          $('#updateFrs #name_edit').val(result.data[0]['nama']); 
          var x = result.data[0]['status']; 
          $('#status_edit option:selected').text(result.data[0]['status']);
        },
        error: function (e) {
            console.log("error");
        }
      });
  });
});

$(document).ready(function(){
  $('.btnDelete').click(function(e){
    e.preventDefault();
    //confirm=confirm('Are you sure? ');
    if(confirm){
      var id=$(this).attr('data-id');
      //var id= document.getElementById('confirm-delete').value;
      //alert(id);
      $.ajax({
        type:"DELETE",
        url:"frs/delete/"+id,
        success: function(){
          window.location.reload();
        }
      });

      }
    });
  });


$(document).ready(function(){
  $("#confirm-delete").click(function(){
    $('#deleteModal').modal('show');
    var id= document.getElementById('confirm-delete').value;
    alert(id);
    //document.getElementById('idDelete').value=id;
  });
});


$(document).ready(function(){
    $("#npm_edit").autocomplete({
      source : "<?php echo site_url('form/frs/get_autocomplete') ?>",
      select: function(event, ui){
        $('[name="npm_edit"]').val(ui.item.label);
        $('[name="name_edit"]').val(ui.item.nama_mahasiswa);

      }
    });
});

$(document).ready(function(){
    $("#kd_mk_edit").autocomplete({
      source : "<?php echo site_url('form/frs/get_automatkul') ?>",
      select: function(event, ui){
        $('[name="kd_mk_edit"]').val(ui.item.label);
        $('[name="matkul_edit"]').val(ui.item.nama_matkul);

      }
    });
});

// function fillCombo(data, selected) {
//     let stringOptions = "<option value='-9999'>Select</option>";

//     $.each(data, function (key, value) {
//         if (key == selected)
//             stringOptions += "<option value='" + key + "' selected>" + value + "</option>";
//         else
//             stringOptions += "<option value='" + key + "'>" + value + "</option>";
//     });

//     return '<select  name="status_edit" id="status_edit" >' + stringOptions + '</select >';
// }
</script>