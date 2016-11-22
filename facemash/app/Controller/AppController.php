<?php
 

App::uses('Controller', 'Controller');
 

 
class AppController extends Controller {

 
 public $components = array(
        'Flash',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
        )
    );

    public function beforeFilter() {
        $this->Auth->allow('index', 'view','register');
    }
    
    public function beforeRender(){

        



         if($this->Auth->user('role')=='admin'){
            $this->set('loggedIn',true);
            $this->set('isAdmin',true);

             
         }elseif($this->Auth->user('role')=='voteur'){
            $this->set('loggedIn',true);
            $this->set('isAdmin',false);
         }
         else {
             $this->set('loggedIn',false);
             $this->set('isAdmin',false);

         }
        
        $this->set('idlog',$this->Auth->user('id'));

        $this->set('vote',$this->Auth->user('vote'));

     }
}