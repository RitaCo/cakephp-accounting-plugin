<?php
namespace Rita\Accounting\Controller\Admin;

use Rita\Accounting\Controller\AppController;

/**
 * Transactions Controller
 *
 * @property \Rita\Accounting\Model\Table\TransactionsTable $Transactions */
class TransactionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $query = $this->Transactions->find('all')->contain(['Senders.Users']);    
        $this->set('transactions', $this->paginate($query));
        $this->set('_serialize', ['transactions']);
    }

    /**
     * View method
     *
     * @param string|null $id Transaction id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transaction = $this->Transactions->get($id, [
            'contain' => []
        ]);
        $this->set('transaction', $transaction);
        $this->set('_serialize', ['transaction']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transaction = $this->Transactions->newEntity();
        if ($this->request->is('post')) {
            $transaction = $this->Transactions->patchEntity($transaction, $this->request->data);
            if ($this->Transactions->save($transaction)) {
                $this->Flash->success('The transaction has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The transaction could not be saved. Please, try again.');
            }
        }
        $this->set(compact('transaction'));
        $this->set('_serialize', ['transaction']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transaction id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transaction = $this->Transactions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transaction = $this->Transactions->patchEntity($transaction, $this->request->data);
            if ($this->Transactions->save($transaction)) {
                $this->Flash->success('The transaction has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The transaction could not be saved. Please, try again.');
            }
        }
        $this->set(compact('transaction'));
        $this->set('_serialize', ['transaction']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transaction id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transaction = $this->Transactions->get($id);
        if ($this->Transactions->delete($transaction)) {
            $this->Flash->success('The transaction has been deleted.');
        } else {
            $this->Flash->error('The transaction could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
