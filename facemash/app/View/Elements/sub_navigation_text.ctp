<div class="sub_navigation_text">
 
<br/>


    <?php
		

		
		$nb_votes=$vote;
		//$this->Session->read('Mashes.nb_votes');
  		$reste=10-$nb_votes;

		if ($nb_votes==0) {
			$vote_text='<p>Merci de voter pour ton image préférée!</p>';
		}

		elseif ($nb_votes<10){

			$vote_text='<p>Tu as voté '.$nb_votes.' fois, il ne te reste plus que '.$reste.' votes</p>';	
		} 
		elseif ($nb_votes=10) {
			$vote_text='<h5>Tu ne peux plus voter tu as dépassé les 10 votes, merci d \'avoir participer</h5> ';
		}
		 
		 echo $vote_text;

	?>


</div>