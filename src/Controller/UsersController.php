<?php
namespace App\Controller;

use Cake\Event\Event;
use Cake\I18n\Time;

class UsersController extends AppController
{

    public $paginate = [
        'limit' => 10,
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
        $user = $this->Users->newEntity();
        $this->set('user', $user);
        $this->set('users', $this->paginate());
    }

    /**
     * ログイン.
     *
     * @return void
     */
    public function login()
    {
        $this->viewBuilder()->setLayout(false);
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('ログイン情報に誤りがあります。'));
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
        $this->viewBuilder()->setLayout(false);
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
            $user->set([
                'created_user' => $this->request->session()->read('Auth.User.username'),
                'created' => Time::now('Asia/Tokyo'),
                'modified_user' => $this->request->session()->read('Auth.User.username'),
                'modified' => Time::now('Asia/Tokyo'),
            ]);
            if ($this->Users->save($user)) {
                $this->Flash->success('ユーザーを登録しました。');
            } else {
                $this->Flash->error('ユーザーを登録できませんでした。');
            }
        }
        $this->set('users', $this->paginate());
        $this->set('user', $user);
        $this->render('index');
    }
}