
</br>
</br>
<h2>Voici le tableau des utilisateurs</h2>

</br>
</br>


<div class="row"> 
	<div class="large-3 columns"></div>
	<div class="large-6 columns">
	<div class='row'>
		<div class='large-12 columns'>
	<table>
		<tr>
			<th>id</th>
			<th>Nom</th>
			<th>role</th>
			<th>cree le </th>
			<th>delete </th>
		</tr>


 



	<?php	foreach ($scores as $user) {  ?>
 
		<tr>
			 
		<td><?php echo $user['User']['id'];?></td>
		<input type="hidden" name="id" value="<?php echo $user['User']['id'];?>"></input>

		<td><?php echo $user['User']['username']; ?> </td>
		<input type="hidden" name="username" value="text"></input>
		<td><?php echo $user['User']['role']; ?> </td>
		<td><?php echo $user['User']['created'];?></td>
		<td><?php   echo $this->Html->link('supprimer', array(
              'controller' => 'Users',
              'action'=>'delete')); ?></td>
		 
		</tr>
 
 <?php }?>


	</table>

	<?php echo $this->Html->link('Ajouter un utilisateur', array(
              'controller' => 'Users',
              'action'=>'add')); ?>

</div></div>

		
	</div>
	<div class='large-3 columns'></div>
</div>

