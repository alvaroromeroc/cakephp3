<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 */
class UsersController extends AppController {

    public function index() {
        $users = $this->paginate($this->Users);
        $this->set('users', $users);
    }

    public function view($name) {
        echo "Detalle de Usuario " . $name;
        exit();
    }

    public function add() {
        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {
            //debug($this->request->data);
            $user = $this->Users->patchEntity($user, $this->request->data);
            
            if($this->Users->save($user)){
                $this->Flash->success("Usuario creado");
                return $this->redirect(['controller' => 'Users', 'action'=>'index']);
            }
            else {
                $this->Flash->error('El usuario no pudo ser creado');
            }
                
        }
        $this->set(compact('user'));
    }

}
