<div class="row">
		<div class="large-6 columns">
		<?php echo '<p><b>'.$this->request->data['description'].'</b></p>';

		echo '<p> Score :'.$this->request->data['score'].'</p>';

		
		echo $this->Html->image('fleurs/'.$this->request->data['nom_photo']
        );


		?>

		</div>