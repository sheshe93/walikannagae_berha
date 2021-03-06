<?php

App::uses('AppController', 'Controller');
App::uses('Rating','Lib');
App::uses('CakeTime','Utility');


class UsersController extends AppController {


    public function beforeFilter() {
        parent::beforeFilter();
         $this->Auth->allow('register', 'logout','login');
    }


    

    public function edit($id) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('User Invalide'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('L\'user a été sauvegardé'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('L\'user n\'a pas été sauvegardé. Merci de réessayer.'));
            }
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

public function admin() {
        
    $scores= $this->User->find('all', array(
        'order'=>'User.id ASC'));
         
        $this->set(compact('scores'));
       
    
    }




public function savemodif(){


              if ($this->request->is('post')) {
                
                if ($this->User->save($this->request->data)) {
                    $this->Flash->success(__('L\'user a été modifié'));
                    return $this->redirect(array('controller'=> 'Users','action' => 'admin'));
                } else {
                    $this->Flash->error(__('L\'user n\'a pas été modifié. Merci de réessayer.'));
                }
            }
}

 public function modifuser(){
    
 }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__("Nom d'user ou mot de passe invalide, réessayer"));
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }



    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('User invalide'));
        }
        $this->set('user', $this->User->findById($id));
    }

    public function register(){

    if ($this->request->is('post')) {
                $this->User->create();
                if ($this->User->save($this->request->data)) {
                    $this->Flash->success('Enregistrement effectué');
                    return $this->redirect(array('action' => 'login'));
                } else {
                    $this->Flash->error(__('Erreur enregistrement raté.'));
                }
            }


    }


public function supuser() {
        
    $scores= $this->User->find('all', array(
        'order'=>'User.id ASC'));
         
        $this->set(compact('scores'));
       
       

        if ($this->request->is('post')) {
             
            $this->User->delete($this->request->data['User']['id']);
             
           return $this->redirect(array(
                'controller' => 'Users',
                'action'=>'admin'));
    }
    }

    public function add() {
            if ($this->request->is('post')) {
                $this->User->create();
                if ($this->User->save($this->request->data)) {
                    $this->Flash->success(__('L\'user a été sauvegardé'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Flash->error(__('L\'user n\'a pas été sauvegardé. Merci de réessayer.'));
                }
            }
        }


      

        public function delete($id =null) {
            
            $this->request->allowMethod('post');

            $this->User->id = $id;
            if (!$this->User->exists()) {
                throw new NotFoundException(__('User invalide'));
            }
            if ($this->User->delete()) {
                $this->Flash->success(__('User supprimé'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('L\'user n\'a pas été supprimé'));
            return $this->redirect(array('action' => 'index'));
        }



}
?>