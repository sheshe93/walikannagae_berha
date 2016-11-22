<?php if($isAdmin){ ?>

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
			 
		</tr>


 



	<?php	foreach ($scores as $user) {  ?>
 
		<tr>
			<?php echo $this->Form->create('User');?>
			 
		<td><?php echo $user['User']['id'];?></td>
		<?php echo $this->Form->hidden('id', array('default'=>$user['User']['id']));?></input>

		<td><?php echo $user['User']['username']; ?> </td>
 		<?php echo $this->Form->hidden('username', array('default'=>$user['User']['username']));?>
		<td><?php echo $user['User']['role']; ?> </td>
		<?php echo $this->Form->hidden('role', array('default'=>$user['User']['role']));?>
		<td><?php echo $user['User']['created'];?></td>
		
		 
		 
		</tr>
 
 <?php }?>


	</table>

	<?php echo $this->Html->link('Ajouter un utilisateur', array(
              'controller' => 'Users',
              'action'=>'add')); ?>
              <br/><br/>
  <?php echo $this->Html->link('Supprimer un utilisateur', array(
  'controller' => 'Users',
  'action'=>'supuser')); ?>
  <br/><br/>
 

</div></div>

		
	</div>
	<div class='large-3 columns'></div>
</div>

<?php }else{

	echo '<h1> Non authorisé à acceder à cette page</h1>';
}
?>