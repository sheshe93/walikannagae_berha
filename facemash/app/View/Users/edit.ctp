<?php if($isAdmin){ ?>


<div class="edit form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('modifier utilisateur'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
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