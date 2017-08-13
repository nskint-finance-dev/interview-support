<?php
namespace App\Controller;

use Cake\Event\Event;
use Cake\I18n\Time;

class UsersController extends AppController
{

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Users.id' => 'asc'
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
            'logout',
            'add'
        ]);
        $this->viewBuilder()->setLayout(false);
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
        if ($this->request->is('post')) {
            $requestData = $this->request->getData();
            $exist = $this->Users->findById($requestData['id'])->first();

            if ($exist) {
                $this->Auth->setUser($exist);
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
            // idが既に登録済みでないかチェックする
            $requestData = $this->request->getData();
            $exist = $this->Users->findById($requestData['id'])->first();

            // idが登録済みでない場合、登録処理に進む
            if (! $exist) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                $user->set([
                    'created_user' => $this->Auth->user('username'),
                    'created' => Time::now('Asia/Tokyo'),
                    'modified_user' => $this->Auth->user('username'),
                    'modified' => Time::now('Asia/Tokyo')
                ]);
                if ($this->Users->save($user)) {
                    $this->Flash->success('ユーザーを登録しました。');
                } else {
                    $this->Flash->error('ユーザーを登録できませんでした。');
                }
            } else {
                // idが登録済みだった場合
                $this->Flash->error('ユーザーが既に登録されています。');
            }
            // 入力クリア
            $this->request->data = null;
        }

        $this->set('users', $this->paginate());
        $this->set('user', $user);
        $this->render('index');
    }
}