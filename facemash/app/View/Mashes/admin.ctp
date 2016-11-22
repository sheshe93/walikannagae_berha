 


<?php if($isAdmin){ ?>
</br>
</br>
<h2>Voici le tableau des images avec classement :</h2>

</br>
</br>


<?php
 	$i=1;
?>





<div class="row"> 
	<div class="large-3 columns"></div>
	<div class="large-6 columns">
	<div class='row'>
		<div class='large-12 columns'>
	<table>
		<tr>
			<th>classement</th>
			<th>Nom</th>
			<th>score</th>
			
		</tr>


<?php 
		foreach ($scores as $mash) { ?>
 
		<tr>
 		<td><?php echo $i ?></td>


		 

		<td><?php echo $mash['Mash']['description']  ?> </td>
 
		<td><?php echo  $mash['Mash']['score'] ?></td>
 
		</tr>

<?php $i++;
} ?>
 


	</table>

	<?php echo $this->Html->link('Ajouter une photo', array(
              'controller' => 'Mashes',
              'action'=>'add')); ?>
              <br/>
              <br/>
    <?php echo $this->Html->link('Supprimer une photo', array(
              'controller' => 'Mashes',
              'action'=>'supimg')); ?>

</div></div>

		
	</div>
	<div class='large-3 columns'></div>
</div>

<?php }else{

	echo '<h1> Non authorisé à acceder à cette page</h1>';
}
?>