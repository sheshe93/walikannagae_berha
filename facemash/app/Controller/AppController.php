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
        $this->Auth->allow('index', 'view');
    }
    

 

public function isAuthorized($user) {
    // Admin peut accéder à toute action
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }
     
    // Refus par défaut
    return false;
}




}
