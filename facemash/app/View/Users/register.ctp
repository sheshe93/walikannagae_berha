<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Veuillez vous enregistrer'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
       
        echo $this->Form->hidden('role',array('default'=>'voteur'));
        ;
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Enregistrer'));?>
</div>