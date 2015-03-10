<?php
namespace Rita\Accounting\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;
use Cake\Core\Configure;
use Rita\Core\ORM\Table;
use Rita\Accounting\Model\Table\BaseAccountTable;

/**
 * AccountingAccounts Model
 */
class FundsTable extends BaseAccountTable
{



    const ACC_TYPE  = 'FUND';
    
    
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
       parent::initialize($config);     
        
    }


    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator = parent::validationDefault($validator);

        return $validator;
    }

    
    
    
    
    
    
    public function createAccunt($userId, $type = 'WALLET' , $value = 0 )
    {
        
    }
    
}
