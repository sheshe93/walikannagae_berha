<div class="sub_navigation_text">
</br>


    <?php
		$nb_votes=0;
		$nb_votes=$nb_votes=$this->Session->read('Mashes.nb_votes');
  		$reste=10-$nb_votes;

		if ($nb_votes==0) {
			$vote_text='Merci de voter pour ton image préférée!';
		}

		elseif ($nb_votes<10){

			$vote_text='Tu as voté '.$nb_votes.' fois il ne te reste plus que '.$reste.' votes';	
		} 
		elseif ($nb_votes=10) {
			$vote_text='<h5>Tu ne peux plus voter tu as dépassé les 10 votes, merci d \'avoir participer</h5>';
		}
		 echo $vote_text;

	?>
  

</div>