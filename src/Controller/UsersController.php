<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{

    /**
     * フィルター.
     *
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['add', 'logout']);
    }
    
    
    /**
     * よくわかんない.
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->Users->find('all'));
    }

    /**
     * ログイン.
     *
     * @return void
     */
    public function login()
    {
        $this->viewBuilder()->layout(false);
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            echo $user;
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    
    /**
     * ログアウト.
     *
     * @return void
     */
    public function logout()
    {
        $this->viewBuilder()->layout(false);
        $this->Flash->success(__('ログアウトしました。'));
        return $this->redirect($this->Auth->logout());
    }
    
    /**
     * よくわかんない.
     *
     * @return void
     */
    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    /**
     * ユーザ追加.
     *
     * @return void
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('ユーザーを登録しました。'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('ユーザーを登録できませんでした。'));
        }
        $this->set('user', $user);
    }

}