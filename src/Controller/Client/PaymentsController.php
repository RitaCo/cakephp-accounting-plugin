<?php
namespace Rita\Accounting\Controller\Client;
use Cake\Network\Http\Client;
use Cake\Event\Event;
use Rita\Accounting\Controller\AppController;

/**
 * Accounts Controller
 *
 * @property \Rita\Accounting\Model\Table\AccountsTable $Accounts */
class PaymentsController extends AppController
{


     /**
      * PaymentsController::beforeFilter()
      * 
      * @param mixed $event
      * @return void
      */
    public function beforeFilter(Event $event)
    {
          parent::beforeFilter($event);
            $this->Auth->allow('verify');
            $this->userId = $user = $this->Auth->user('id');   
    }
    

    /**
     * PaymentsController::paymentVerify()
     * 
     * @return void
     */
    public function verify(){
        
    }
    
    /**
     * PaymentsController::index()
     * 
     * @param mixed $id
     * @return void
     */
    public function index($id)
    {

        
        $res = $this->Payments->Accounts->exists(['user_id' => $this->userId, 'id' => $id]);
        
        if(!$res) {
            $this->Flash->error('حساب مورد نظر معتبر نیست.');
            $this->redirect(['_name' => 'Accounting']);
        }
        
        
        //$payment = $this->Payments->newEntity();
//        
//        if ($this->request->is('post')) {
//            $payment = $this->Payments->patchEntity($payment, $this->request->data,['fieldList' => ['account_id','bank_id','value']]);
//            $payment->account_id = $id;
//            
//            if ($this->Payments->save($payment)) {
//                $this->Flash->success('The account has been saved.');
//                return $this->redirect(['action' => 'index']);
//            } else {
//                $this->Flash->error('The account could not be saved. Please, try again.');
//            }
//        }
//        $this->set('payment',$payment);
//         $this->_pay();       
    }
    
    
    
    
    public function _pay(){
        
      // $http = new Client(); 
//       $response  = $http->post('https://pgw.bpm.bankmellat.ir/pgwchannel/startpay.mellat'); 
//        
//       debug($response); 
//        
        
        
                if(0) {
            $wsdl = 'https://pgwstest.bpm.bankmellat.ir/pgwchannel/services/pgw?wsdl';
        } else {
            $wsdl = 'https://pgws.bpm.bankmellat.ir/pgwchannel/services/pgw?wsdl';
        }
        
        
        	$client = new \nusoap_client($wsdl);
	$namespace='http://interfaces.core.sw.bps.com/';
    
      
        		$parameters = array(
			'terminalId' =>  1665431,
			'userName' =>  3133595,
			'userPassword' =>  25079710,
			'orderId' => 1,
			'amount' => 1000,
			'localDate' => date("Ymd"),
			'localTime' => date("his"),
			'additionalData' => 'khodam',
			'callBackUrl' => 'http://31330.ir/client/accounting-manager/payments/verify/',
			'payerId' => 0
            );
            debug($parameters);
            $result = $client->call('bpPayRequest', $parameters, $namespace);
            debug($client->fault);
            
            
            		$resultStr  = $result;

			$err = $client->getError();
            
            pr($result);
            debug($err);
    }
}

