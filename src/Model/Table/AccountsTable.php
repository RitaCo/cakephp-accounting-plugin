<?php
namespace Rita\Accounting\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;
use Cake\Core\Configure;
use Rita\Core\ORM\Table;
use Rita\Accounting\Model\Entity\AccountingAccount;

/**
 * AccountingAccounts Model
 */
class AccountsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
            
        $this->table('accounting_accounts');
        $this->displayField('id');
        $this->primaryKey('id');
        
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'className' => Configure::write('Rita.Accounting.userTable')
        ]);
        
        $this->belongsTo('Types', [
            'foreignKey' => 'type_id',
            'className' => 'Rita/Accounting.Types'
        ]);
    }


    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->add('user_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('user_id')
            ->add('type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('type_id', 'create')
            ->notEmpty('type_id')
            ->add('system', 'valid', ['rule' => 'boolean'])
            ->requirePresence('system', 'create')
            ->notEmpty('system')
            ->add('master', 'valid', ['rule' => 'boolean'])
            ->requirePresence('master', 'create')
            ->notEmpty('master')
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status')
            ->add('amount', 'valid', ['rule' => 'numeric'])
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['type_id'], 'Types'));
        return $rules;
    }
    
    
    
    /**
     * AccountsTable::findAccounts()
     * 
     * @param mixed $query
     * @param mixed $options
     * @return
     */
    public function findAccounts(Query $query, array $options)
    {
        if (empty($options['for'])) {
            throw new \InvalidArgumentException("The 'for' key is required for find('Accounts')");
        }        
        return $query->where(['user_id' => $options['for']])->contain('Types');
    }
    
    
    
    
}
