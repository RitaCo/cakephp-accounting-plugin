<?php
namespace Rita\Accounting\Controller\Client;

use Rita\Accounting\Controller\AppController;

/**
 * Transactions Controller
 *
 * @property \Rita\Accounting\Model\Table\TransactionsTable $Transactions */
class TransactionsController extends AppController
{
    
    
    public function index($id = null)
    {
        $user = $this->Auth->user('id');
        
        $res = $this->Transactions->Getters->exists(['user_id' => $user, 'id' => $id]);
        if(!$res) {
            $this->Flash->error('حساب مورد نظر معتبر نیست.');
            $this->redirect(['_name' => 'Accounting']);
        }      
        $query = $this->Transactions->find('transaction',['for' => $id]);
        $this->set('transactions', $this->paginate($query));
        $this->set('_serialize', ['transactions']);
    }
}