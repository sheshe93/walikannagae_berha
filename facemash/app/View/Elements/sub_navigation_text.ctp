<div class="sub_navigation_text">
    <?php
		$nb_votes=0;
		$nb_votes=$this->Session->read('Mashes.nb_votes');
 
		if ($nb_votes==0) {
			$vote_text='Allez, c\'est l\'heure de voter pour ton image préférée!';
		}

		elseif ($nb_votes<10){
			$vote_text='Tu as voté '.$nb_votes.' fois cette session, c\'est pas terrible...';	
		}
		

	    echo '<p> Tu as depassé les 10 votes, merci d\'avoir voté </p>';

	?>

</div>