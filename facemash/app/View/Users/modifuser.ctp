

 

<?php if($isAdmin){ ?>
<div class="users modify">

<?php echo $this->Form->create(false,array(
    'url' => array('controller' => 'Users', 'action' => 'savemodif')));?>
    <fieldset>
        <legend><?php echo __('Ajouter un utilisateur'); ?></legend>
        <?php echo $this->Form->hidden('id', array('default'=>$this->request->data['id']));?></input>
        <?php echo $this->Form->input('username',array('default'=>$this->request->data['username']));
	        echo $this->Form->input('password',array('default'=>$this->request->data['password']));

	        echo $this->Form->input('vote',array('default'=>$this->request->data['vote']));
	        echo $this->Form->input('role', array(
	            'options' => array('voteur' => 'Voteur','admin' => 'Admin')
	        ));
    	?>
    </fieldset>
<?php echo $this->Form->end(__('Modifier'));?>
</div>

<?php }else{

	echo '<h1> Non authorisé à acceder à cette page</h1>';
}
?>