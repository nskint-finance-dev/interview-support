<?php
namespace App\Controller;

use Cake\Event\Event;

class UsersController extends AppController
{
    public $paginate = [
        'limit' => 5,
        'order' => [
            'Users.id' => 'desc'
        ]
    ];

    /**
     * 初期化処理.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    /**
     * フィルター.
     *
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow([
            'logout'
        ]);
    }

    /**
     * index.
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->paginate());
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
            $this->Flash->error(__('ユーザー名またはパスワードが間違っています。'));
            // 入力クリア
            $this->request->data = null;
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
            } else {
                $this->Flash->error(__('ユーザーを登録できませんでした。'));
            }
        }
        $this->set('users', $this->paginate());
        $this->render('index');
    }
}