<?php
namespace Rita\Accounting\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Rita\Accounting\Model\Entity\AccountingTransaction;

/**
 * AccountingTransactions Model
 */
class TransactionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('accounting_transactions');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Senders', [
            'foreignKey' => 'of_id',
            'className' => 'Rita/Accounting.Accounts'
        ]);
        $this->belongsTo('Receivers', [
            'foreignKey' => 'to_id',
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('type', 'create')
            ->notEmpty('type')
            ->add('of_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('of_id', 'create')
            ->notEmpty('of_id')
            ->add('to_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('to_id', 'create')
            ->notEmpty('to_id')
            ->add('in', 'valid', ['rule' => 'numeric'])
            ->requirePresence('in', 'create')
            ->notEmpty('in')
            ->add('out', 'valid', ['rule' => 'numeric'])
            ->requirePresence('out', 'create')
            ->notEmpty('out')
            ->add('amount', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('amount')
            ->add('accepted', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('accepted')
            ->add('date', 'valid', ['rule' => 'date'])
            ->allowEmpty('date')
            ->add('time', 'valid', ['rule' => 'time'])
            ->allowEmpty('time')
            ->allowEmpty('note');

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
        $rules->add($rules->existsIn(['of_id'], 'Ofs'));
        $rules->add($rules->existsIn(['to_id'], 'Tos'));
        return $rules;
    }
}
