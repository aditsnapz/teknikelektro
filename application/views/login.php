<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/dist/img/Undip_favicon.png" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


	<style type="text/css">
		body {
			background-image: url(<?php echo base_url();
			?>assets/dist/img/background2.jpg) !important;
			background-repeat: no-repeat !important;
			background-attachment: fixed !important;
			background-size: cover !important;
		}

	</style>

</head>

<body class="hold-transition login-page">
	<div class="login-box">
		
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Sign in to start your session</p>

				<form action="<?php echo base_url('Login/do_login'); ?>" method="POST">
                    <div class="form-group has-feedback">
                        <input type="text" name="username" class="form-control" required placeholder="username">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" required placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <?php
                            $info = $this->session->flashdata('info');
                            if (!empty($info)) {
                                echo $info;
                            }
                        ?>
                    </div>
                    <div class="row">
                        <button type="submit" class=" form-control btn btn-primary btn-block btn-flat">Masuk</button>
                        <button type="reset" class=" form-control btn btn-danger btn-block btn-flat">Reset</button>
                    </div>
                </form>

				
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>



</body>

</html>
