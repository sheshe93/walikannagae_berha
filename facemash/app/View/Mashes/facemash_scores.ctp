<?php
    echo $this->Html->link(
		'Retourner au vote !',
		array(
			'controller'=>'Mashes',
			'action'=>'facemash'
			),
		array(
			'class' => 'button success'
			)
	);
?>

</br>
</br>

<?php
 	$i=1;
?>
<div class="row"> 
	<div class="large-3 columns"></div>
	<div class="large-6 columns">
		<?php 
			foreach ($scores as $mash) {

			echo "<div class='row'>".
					"<div class='large-12 columns'>";
					
					echo '<p><b>'.$i.'/ '.
							    $mash['Mash']['description'].					
							' avec '.$mash['Mash']['score'].'pts</b></p>';
					 
					echo $this->Html->image('fleurs/'.$mash['Mash']['nom_photo'], array('alt' => 'image_rame'));
			echo 	"</br></br></div></div>";

					$i++;
				}


		?>
	</div>
	<div class='large-3 columns'></div>
</div>