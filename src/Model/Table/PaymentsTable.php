<?php
namespace Rita\Accounting\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;
use Rita\Core\ORM\Table;
use Rita\Accounting\Model\Entity\AccountingPayment;

/**
 * AccountingPayments Model
 */
class PaymentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('accounting_payments');
        $this->displayField('id');
        $this->primaryKey('id');
        
        $this->belongsTo('Accounts', [
            'foreignKey' => 'account_id',
            'className' => 'Rita/Accounting.Accounts'
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
            ->allowEmpty('id', 'create')
            ->add('accunt_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('account_id', 'create')
            ->notEmpty('account_id')
            ->add('value', 'valid', ['rule' => 'numeric'])
            ->requirePresence('value', 'create')
            ->notEmpty('value');


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
        $rules->add($rules->existsIn(['account_id'], 'Accounts'));
        return $rules;
    }
}
