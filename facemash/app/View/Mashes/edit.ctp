<?php if($isAdmin){ ?>


<?= $this->Form->create('Mash', array('type' =>'file')); ?>

<?= $this->Form->input('description',array('default'=>"description"));?>
 <?= $this->Form->input('photo_file',array('default'=>'photo','type'=>'file'));?>
 <?= $this->Form->end('envoyer');?>
 

 <?php }else{

	echo '<h1> Non authorisé à acceder à cette page</h1>';
}
?>