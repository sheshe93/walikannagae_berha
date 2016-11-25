 


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
			<?php echo $this->Form->create(false,array(
    'url' => array('controller' => 'Mashes', 'action' => 'viewimg')));?>
 		
 		<td><?php echo $i ?></td>
 		
 		<?php echo $this->Form->hidden('id', array('default'=>$mash['Mash']['id']));?></input>
		 <?php echo $this->Form->hidden('nom_photo', array('default'=>$mash['Mash']['nom_photo']));?></input>
		 

		<td><?php echo $mash['Mash']['description']  ?> </td>
		<?php echo $this->Form->hidden('description', array('default'=>$mash['Mash']['description']));?></input>
 
		<td><?php echo  $mash['Mash']['score'] ?></td>
		<?php echo $this->Form->hidden('score', array('default'=>$mash['Mash']['score']));?></input>


 		<td><?php echo $this->Form->end(__('voir')); ?></td>
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