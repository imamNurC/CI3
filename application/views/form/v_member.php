<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <div class="containter">
    <table class="table">
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Phone</th>
    <th scope="col">Address</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach($user as $u){
    ?>
    <tr>
    <th scope="row"><?=$no++;?></th>
    <td><?php echo $u->name ?></td>
    <td><?php echo $u->email ?></td>
    <td><?php echo $u->phone ?></td>
    <td><?php echo $u->address ?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <div>
    <button onclick="location.href='<?php echo base_url();?>index.php/form/login_member/index’”>Back to
    Login</button>
    </div>
</div>

