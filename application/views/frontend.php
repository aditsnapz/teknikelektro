<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates2/head.php'); ?>
<body>

  

	<?php $this->load->view('templates2/header.php'); ?>
	<?php 
	if($page == 'home') {
		$this->load->view('templates2/carousel.php');
	}
	?>
  
	<main id="main">
		<?php $this->load->view('pages/frontend/'.$page.'.php',$content); ?>
		
	</main><!-- End #main -->

  
  	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
	<?php $this->load->view('templates2/footer.php'); ?>
  	<?php $this->load->view('templates2/script.php'); ?>

</body>

</html>
