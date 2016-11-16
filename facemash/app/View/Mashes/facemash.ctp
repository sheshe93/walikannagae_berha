<?php
 

	$image_mash1=$this->Html->image('fleurs/'.$photo_mash1, 
        array('alt' => 'Mash1')); 
        
	$image_mash2=$this->Html->image('fleurs/'.$photo_mash2,
        array('alt' => 'Mash2'));

	 
?>
	<div class="row">
		<div class="large-6 columns">
		<?php echo '<p><b>'.$description_mash1.'</b></p>'; ?>

		<?php
             
            
			echo $this->Html->link(
			    $image_mash1,  
				    array(
				        'controller' => 'Mashes',
				        'action' => 'saveNewRatings'
				    	,$id_mash1, $id_mash2), 
                        
				    array(
				        'escape' => false,
				        'id'=>'left_link'
				    )
				);
		?>
		</div>

		<div class="large-6 columns">
		<?php echo '<p><b>'.$description_mash2.'</b></p>'; ?>

		<?php
			echo $this->Html->link(
			    $image_mash2,
				    array(
				        'controller' => 'Mashes',
				        'action' => 'saveNewRatings'
				    	,$id_mash2, $id_mash1),
				    array(
				        'escape' => false,
				        'id'=>'right_link'
				    )
				);
		?>
		</div>

	</div>

	<script>

        function leftArrowPressed() {
		   document.getElementById('left_link').click();
		}

		function rightArrowPressed() {
		   document.getElementById('right_link').click();
		}

		document.onkeydown = function(evt) {
		    evt = evt || window.event;
		    switch (evt.keyCode) {
		        case 37:
		            leftArrowPressed();
		            break;
		        case 39:
		            rightArrowPressed();
		            break;
		    }
		};

	</script>