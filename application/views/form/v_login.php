<!DOCTYPE html>
<html>
<head>

<title></title>

</head>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="http://localhost/MOH.IMAM158/assets/css/twit.css" />
<body>
<div class="container">
<div class="brand-logo"></div>
<div class="brand-title">LOGIN</div>
<form method="post" action="<?php echo base_url(); ?>index.php/form/login_member/signup">

<label>Username : </label>
<input type="text" name="email"> <br/>
<label>Password : </label>
<input type="password" name="password"> <br/>

<button type="submit" name="tombol">Login </button>
</form>
<?php
		if($this->session->flashdata('error')){
?>
			
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    <?php echo $this->session->flashdata('error'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        <?php
           
	}
        
?>
</div>
</body>
</html>

