

	
<div class='row'>
<div class="large-6 columns"> 
<div class="registerform">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Veuillez vous inscrire'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
       
        echo $this->Form->hidden('role',array('default'=>'voteur'));
        ;
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Enregistrer'));?>
</div></div></div>