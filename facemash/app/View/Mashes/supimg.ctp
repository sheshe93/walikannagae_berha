 


<?php if($isAdmin){ ?>
 


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
		 
			<th>supprimer</th>
		</tr>


<?php 
		foreach ($scores as $mash) { ?>
 
		<tr>
		<?php echo $this->Form->create('Mash');?>
		<td><?php echo $i ?></td>


		<?php echo $this->Form->hidden('id', array('default'=>$mash['Mash']['id']));?>

		<td><?php echo $mash['Mash']['description']  ?> </td>
		<?php echo $this->Form->hidden('description', array('default'=>$mash['Mash']['description']));?></input>

		<td><?php echo  $mash['Mash']['score'] ?></td>
		<td><?php  echo $this->Form->end(__('delete'));   ?></td>

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

<?php }else{

	echo '<h1> Non authorisé à acceder à cette page</h1>';
}
?>