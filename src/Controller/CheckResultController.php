<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * CheckResult Controller
 *
 * @property \App\Model\Table\CheckResultTable $CheckResult
 *
 * @method \App\Model\Entity\CheckResult[] paginate($object = null, array $settings = [])
 */
class CheckResultController extends AppController
{

    public $paginate = [
        'limit' => 10,
        'order' => [
            'ChecKResult.checkDate' => 'desc'
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
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        // ユーザー情報全取得
        $users = TableRegistry::get('users');
        $userNameList = $users->find('list', [
            'keyField' => 'username',
            'valueField' => 'username'
        ]);

        $checkResultList = $this->paginate();

        $this->set('users', $userNameList);
        $this->set(compact('checkResultList'));
    }

    /**
     * View method
     *
     * @param string|null $id
     *            Check Result id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $checkResult = $this->CheckResult->get($id, [
            'contain' => [
                'Checks'
            ]
        ]);

        $this->set('checkResult', $checkResult);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $checkResult = $this->CheckResult->newEntity();
        if ($this->request->is('post')) {
            $checkResult = $this->CheckResult->patchEntity($checkResult, $this->request->getData());
            if ($this->CheckResult->save($checkResult)) {
                $this->Flash->success(__('The check result has been saved.'));

                return $this->redirect([
                    'action' => 'index'
                ]);
            }
            $this->Flash->error(__('The check result could not be saved. Please, try again.'));
        }
        $this->set(compact('checkResult'));
    }

    /**
     * Edit method
     *
     * @param string|null $id
     *            Check Result id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $checkResult = $this->CheckResult->get($id, [
            'contain' => []
        ]);
        if ($this->request->is([
            'patch',
            'post',
            'put'
        ])) {
            $checkResult = $this->CheckResult->patchEntity($checkResult, $this->request->getData());
            if ($this->CheckResult->save($checkResult)) {
                $this->Flash->success(__('The check result has been saved.'));

                return $this->redirect([
                    'action' => 'index'
                ]);
            }
            $this->Flash->error(__('The check result could not be saved. Please, try again.'));
        }
        $checks = $this->CheckResult->Checks->find('list', [
            'limit' => 200
        ]);
        $this->set(compact('checkResult', 'checks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id
     *            Check Result id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod([
            'post',
            'delete'
        ]);
        $checkResult = $this->CheckResult->get($id);
        if ($this->CheckResult->delete($checkResult)) {
            $this->Flash->success(__('The check result has been deleted.'));
        } else {
            $this->Flash->error(__('The check result could not be deleted. Please, try again.'));
        }

        return $this->redirect([
            'action' => 'index'
        ]);
    }
}
