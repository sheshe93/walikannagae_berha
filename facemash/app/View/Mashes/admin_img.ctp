 
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
			<th>modifier</th>
			<th>supprimer</th>
		</tr>


<?php 
		foreach ($scores as $mash) { ?>
 
		<tr>
			 
		<td><?php echo $i ?></td>
		<td><?php echo $mash['Mash']['description']  ?> </td>
		<td><?php echo  $mash['Mash']['score'] ?></td>
		<td><?php echo  $this->Html->link('modifier', array('controller' => 'Mashes','action'=>'edit')); ?></td>
		<td><?php echo $this->Html->link('supprimer', array('controller' => 'Mashes','action'=>'delete'))?></td>

		</tr>

<?php $i++;
} ?>
 


	</table>

	<?php echo $this->Html->link('Ajouter une photo', array(
              'controller' => 'Mashes',
              'action'=>'add')); ?>

</div></div>

		
	</div>
	<div class='large-3 columns'></div>
</div>