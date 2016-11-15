
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		 
		echo $this->Html->css('foundation.min');

		 
		echo $this->Html->script('vendor/jquery.js');
		echo $this->Html->script('vendor/fastclick.js');
		echo $this->Html->script('foundation.min.js');
		
		 
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>


	<?php 
		 
		echo $this->element('navigation_bar'); 
	?>
	<?php 
		 
		echo $this->element('sub_navigation_text'); 
	?>

	<div id="container">
		<div id="content">
			<div class="panel">


			<?php  
				echo $this->Session->flash(); 
			?>

			<?php
				echo $this->fetch('content'); 
			?>

			</div>
		</div>
 				 
		<div id="footer">
			<div class='row'>
				<div class='large-12 columns'>
					<p> Projet Web 2016 ESIEA WALIKANNAGAE - BERHA</p>
				</div>
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>

	
	<script>
	  $(document).foundation();
	</script>

</body>



</html>