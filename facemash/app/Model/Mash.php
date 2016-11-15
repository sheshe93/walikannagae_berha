<?php


App::uses('AppModel', 'Model');

class Mash extends AppModel {


    public $primaryKey = 'id';
	public $displayField = 'nom_photo';


	public function getRandomMash() {
        
        
		$randomMash=$this->find('first', array(
				'order'=>'rand()'));
		return $randomMash;
	}

}