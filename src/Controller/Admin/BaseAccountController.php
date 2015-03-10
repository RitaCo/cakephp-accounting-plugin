<?php
namespace Rita\Accounting\Controller\Admin;

use Cake\Event\Event;
use Rita\Accounting\Controller\AppController;



  class BaseAccountController extends AppController
{
    
    

    protected $name4view;
    protected $typeAcc;
    protected $userId;

    /**
     * BaseAccountController::beforeFilter()
     * 
     * @param mixed $event
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->accuntName = strtolower($this->name);
        $this->typeAcc = $this->request->param('type');
        $this->{$this->name}->filterType($this->typeAcc);
        $this->view =  $this->typeAcc.'_'.$this->request->param('action');
        
        $this->userId = ($this->accuntName === 'funds')? -1 : $this->Auth->user('id');
          
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        
        $this->set('userId', $this->userId);
        $this->set('CashBalance', 0);
        $this->set($this->accuntName, $this->paginate($this->{$this->name}));
        $this->set('_serialize', [$this->accuntName]);
    }



    public function found()
    {
        
        $account = $this->{$this->name}->get(1, [
            'contain' => []
        ]);
        $this->set('CashBalance', 0);
        $this->set('_serialize', ['account']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $account = $this->Accounts->newEntity();
        if ($this->request->is('post')) {
            $account = $this->{$this->name}->patchEntity($account, $this->request->data);
            if ($this->{$this->name}->save($account)) {
                $this->Flash->success('The account has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The account could not be saved. Please, try again.');
            }
        }
        $this->set(compact('account'));
        $this->set('_serialize', ['account']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Account id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $account = $this->{$this->name}->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $account = $this->{$this->name}->patchEntity($account, $this->request->data);
            if ($this->{$this->name}->save($account)) {
                $this->Flash->success('The account has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The account could not be saved. Please, try again.');
            }
        }
        $this->set(compact('account'));
        $this->set('_serialize', ['account']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Account id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $account = $this->{$this->name}->get($id);
        if ($this->{$this->name}->delete($account)) {
            $this->Flash->success('The account has been deleted.');
        } else {
            $this->Flash->error('The account could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
