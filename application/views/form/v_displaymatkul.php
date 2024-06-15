<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/css/jquery.dataTables.min.css') ?>" />


<div class="container">
    <div class="row">

        <h2 class="text-center">Data Mata Kuliah</h2>

    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="pull-left"><a class="btn btn-sm btn-success btn-add" data-toggle="modal" data- target="#addModal"><i class="fa fa-file" aria-hidden="true"> Add New</i></a></div>
            <a href="<?php echo base_url(); ?>index.php/form/matkul2" class="btn btn-primary">Design add data ke 1</a>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">&nbsp;
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">

            <table id="mydata" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <!--table class="table table-bordered table-striped" id="mydata"-->
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Name</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($matkul as $u) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?php echo $u->kd_mk ?></td>
                            <td><?php echo $u->matkul ?></td>
                            <td><?php echo $u->semester ?></td>
                            <td><?php echo $u->sks ?></td>
                            <td style="width: 200px;">
                                <a data-id="<?php echo $u->kd_mk; ?>" class="btn btn-primary btnEdit">Edit</a>
                                <a data-id="<?php echo $u->kd_mk; ?>" class="btn btn-danger btnDelete">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="ModalAdd" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalAdd">Tambah Mata Kuliah</h5>
                <button type="button" class="btn-close-add btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <form id="addMatkul" name="updateMatkul" action="<?php echo site_url('form/matkul2/addMatkul'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="matkul">Kode Mata Kuliah :</label>
                        <input type="text" class="form-control" id="kd_mk" placeholder="Enter Mata Kuliah" name="kd_mk">
                    </div>
                    <div class="form-group">
                        <label for="matkul">Mata Kuliah :</label>
                        <input type="text" class="form-control" id="matkul" placeholder="Enter Mata Kuliah" name="matkul">
                    </div>
                    <div class="form-group">
                        <label for="smt">Semester :</label>
                        <input type="text" class="form-control" id="semester" placeholder="Enter Semester" name="semester">
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS :</label>
                        <input type="text" class="form-control" id="sks" placeholder="Enter Semester" name="sks">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-close-add" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Update Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <form id="updateMatkul" name="updateMatkul" action="<?php echo site_url('form/matkul2/update'); ?>" method="post">
                <div class="modal-body">
                    <input type="text" name="hdnMatkulId" id="hdnMatkulId" />
                  
                    <div class="form-group">
                        <label for="sks">SKS :</label>
                        <input type="text" class="form-control" id="sks_edit" placeholder="Enter Semester" name="sks_edit">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo base_url() . 'assets/js/jquery-2.2.4.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/moment.js' ?>"></script>


<script>
    $(document).ready(function() {
        $('#mydata').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            autoWidth: false
        });
        $(".btn").click(function() {
            $("#updateModal").modal('hide');
        });
        $(".btn-close").click(function() {
            $("#updateModal").modal('hide');
        });
        $(".btn-add").click(function() {
            $("#addModal").modal('show');
        });
        $(".btn-close-add").click(function() {
            $("#addModal").modal('hide');
        });
    });

    $('body').on('click', '.btnEdit', function() {
        //alert('test');
        var student_id = $(this).attr('data-id');
        $.ajax({
            url: 'edit/' + student_id,
            type: "GET",
            dataType: 'json',
            success: function(res) {
                $('#updateModal').modal('show');
                const result = JSON.parse(JSON.stringify(res));
                //console.log(result.data[0]['kdmk']);
                $('#updateMatkul #hdnMatkulId').val(result.data[0]['kd_mk']);
                // $('#updateMatkul #matkul_edit').val(result.data[0]['matkul']);
                // $('#updateMatkul #smt_edit').val(result.data[0]['semester']);
                $('#updateMatkul #sks_edit').val(result.data[0]['sks']);
            },
            error: function(data) {
                alert('error');
            }
        });
    });


    $('body').on('click', '.btnDelete', function() {
        var student_id = $(this).attr('data-id');
        //alert(student_id);
        $.get('delete/' + student_id, function(data) {
            $('#studentTable tbody #' + student_id).remove();
            //alert('sucess');
        })
    });
</script>