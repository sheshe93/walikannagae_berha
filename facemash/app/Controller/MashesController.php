<?php

 
App::uses('AppController', 'Controller');
App::uses('Rating','Lib');
App::uses('CakeTime','Utility');
App::uses('User','Controller');



App::import('Model','User');

class MashesController extends AppController {

    public $components = array('Session');  
 


public function isAuthorized($user) {
    // Admin peut accéder à toute action
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }
     
    // Refus par défaut
    return false;
}

 
public function viewimg(){


}


public function saveNewRatings($id_winner=null, $id_loser=null) {


	if(!empty($id_winner)&&!empty($id_loser)){
		if($id_winner==$id_loser){
		 	return $this->redirect(array(
                'controller' => 'Mashes',
                'action' => 'facemash')
            );
		}
		else {
 				$winner=$this->Mash->findById($id_winner);
				$winner_score=$winner['Mash']['score'];

				$loser=$this->Mash->findById($id_loser);
				$loser_score=$loser['Mash']['score'];

			 
			if (is_numeric($winner_score)&&is_numeric($loser_score)){
				 $rating = new Rating($winner_score,$loser_score,1,0); 
				 $new_ratings=$rating->getNewRatings(); 
                    
        			 $new_winner_score=$new_ratings['a'];
        			$new_loser_score=$new_ratings['b'];

 				$winner['Mash']['score']=$new_winner_score;
				$loser['Mash']['score']=$new_loser_score;

				
				if (($this->Mash->save($winner))&&($this->Mash->save($loser))){
    			 

					$user=new user();
					$user->id=$this->Auth->user('id');
 					 $tkt=$user->read('vote');
 				 	 $nv_vote=$tkt['User']['vote'] +1;
					$user->saveField("vote",$nv_vote);
    				 
					
					 
					 
 				 
  	// $nb_votes = $this->Session->read('Mashes.nb_votes') + 1;
 	//$this->Session->write('Mashes.nb_votes', $nb_votes);
   return $this->redirect(array('controller' => 'Mashes', 'action' => 'facemash'));
 

 }
else {
	return false;

}
			}
			else {
				throw new NotFoundException('Non Numeric rating');
			}
		}


	}

	else throw new NotFoundException('404 Error - Page not found');
}


public function add() {
	


if($this->Auth->user('role')=='admin'){


		if ($this->request->is('post')) {
	           
			$this->Mash->create();
	         $description=$this->request->data['Mash']['description'];
			
			if (!empty($description)){
	                
				if ($this->uploadFile($description)  
	                && $this->Mash->save($this->request->data)) {
	                
	                 
	                
					$this->Session->setFlash(__('Photo de facemash ajoutée'));
					 
				} else {
	                
					$this->Session->setFlash(__('Erreur d\'ajout de photo. merci de réessayer. Si la photo est trop grosse vous pouvez la resizer (www.picresize.com)'));
				}
			} 

			else {
	           
				$this->Session->setFlash(__('Problème de nom de photo.'));
			}
		}

		$content_table="Ajouter une nouvelle photo";
		$this->set(compact('content_table'));

	}else{
				$this->Session->setFlash(__('Seuls les admins peuvent ajouter des photos, regarde plutot le classement '));
				return $this->redirect(array('action' => 'facemash'));

	}



}

function uploadFile($description) {
	 	$file = $this->data['Mash']['photo_file'];

 			$random_three_numbers=rand(1,999);
		 
		$slug_nom_photo=Inflector::slug($description, $replacement='_'); 
 
		$filename=$random_three_numbers.'_'.$slug_nom_photo.'_'.$file['name'];
	
  	if ($file['error'] === UPLOAD_ERR_OK) {  

      	$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
		$detectedType = exif_imagetype($file['tmp_name']);
		$error = !in_array($detectedType, $allowedTypes);
         
	    if (move_uploaded_file($file['tmp_name'],
            APP.'webroot/img/fleurs'.DS.$filename)&&!$error) {
	    	 
		      $this->request->data['Mash']['nom_photo'] = $filename;
		      $this->request->data['Mash']['description'] = $description;

	      return true;
	    }
  	}
  
  	else return false;
}


public function facemash_scores(){

    $scores= $this->Mash->find('all', array(
        'order'=>'Mash.score DESC'));
         
        $this->set(compact('scores'));
       
        $content_table="Classement complet : FaceMash des fleurs";
        $this->set(compact('content_table'));
    }





public function admin() {
		$scores= $this->Mash->find('all', array(
        'order'=>'Mash.score DESC'));
         
        $this->set(compact('scores'));
       


         if ($this->request->is('post')) {

            $this->Mash->delete($this->request->data['Mash']['id']);
             
           return $this->redirect(array(
                'controller' => 'Mashes',
                'action'=>'admin'));
    }

 		 
}



public function supimg(){
$scores= $this->Mash->find('all', array(
        'order'=>'Mash.score DESC'));
         
        $this->set(compact('scores'));
       


         if ($this->request->is('post')) {

            $this->Mash->delete($this->request->data['Mash']['id']);
             
           return $this->redirect(array(
                'controller' => 'Mashes',
                'action'=>'admin'));
    }
}



public function edit (){

	 $this->Mash->id = $id;
        if (!$this->Mash->exists()) {
            throw new NotFoundException(__('Photo Invalide'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Mash->save($this->request->data)) {
                $this->Flash->success(__('La photo a été modifié'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('La photo n\'a pas été  modifié. Merci de réessayer.'));
            }
        } else {
            $this->request->data = $this->MAsh->findById($id);
           
        }

}

public function choosedit(){

$photo_mash=$this->request->data['Mash']['nom_photo'];


}

public function facemash() {

 		$mash1=$this->Mash->getRandomMash();
		$mash2=$this->Mash->getRandomMash();

 		$id_mash1=$mash1['Mash']['id'];
		$id_mash2=$mash2['Mash']['id']; 
        
        
        if ($id_mash1==$id_mash2){
 			return $this->redirect(array('action' => 'facemash'));
		}elseif($this->Auth->user('vote')>10){
			return $this->redirect(array('action' => 'facemash_scores'));
		}

	 $photo_mash1=$mash1['Mash']['nom_photo'];
		$photo_mash2=$mash2['Mash']['nom_photo'];

		$description_mash1=$mash1['Mash']['description'];
		$description_mash2=$mash2['Mash']['description'];

 		$this->set(compact('id_mash1'));
		$this->set(compact('photo_mash1'));
		$this->set(compact('description_mash1'));

		$this->set(compact('id_mash2'));
		$this->set(compact('photo_mash2'));
		$this->set(compact('description_mash2'));
}

}

?>