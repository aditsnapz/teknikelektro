<!DOCTYPE html>
<html>
<?php $this->load->view('templates/head.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    <?php $this->load->view('templates/header.php'); ?>
    <?php $this->load->view('templates/sidebar.php'); ?>
		<?php $this->load->view('pages/'.$page.'.php',$content); ?>
		<?php $this->load->view('templates/footer.php'); ?>
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<?php $this->load->view('templates/script.php'); ?>
        
    </div>
<!-- ./wrapper -->


</body>
</html>
