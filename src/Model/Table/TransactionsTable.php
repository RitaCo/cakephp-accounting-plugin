<?php
namespace Rita\Accounting\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;

use Rita\Core\ORM\Table;
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
        
        $this->belongsTo('Transmitters', [
            'foreignKey' => 'transmitter_id',
            'className' => 'Rita/Accounting.Accounts'
        ]);
        $this->belongsTo('Getters', [
            'foreignKey' => 'getter_id',
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
            ->add('transmitter_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('transmitter_id', 'create')
            ->notEmpty('transmitter_id')
            ->add('getter_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('getter_id', 'create')
            ->notEmpty('getter_id')
            ->add('amount_in', 'valid', ['rule' => 'numeric'])
            ->requirePresence('amount_in', 'create')
            ->notEmpty('amount_in')
            ->add('amount_out', 'valid', ['rule' => 'numeric'])
            ->requirePresence('amount_out', 'create')
            ->notEmpty('amount_out')
            ->add('amount_total', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('amount_total')
            ->add('accepted', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('accepted')
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
        $rules->add($rules->existsIn(['transmitter_id'], 'Transmitters'));
        $rules->add($rules->existsIn(['getter_id'], 'Getters'));
        return $rules;
    }




    public function findTransaction(Query $query, array $options)
    {
        if (empty($options['for'])) {
            throw new \InvalidArgumentException("The 'for' key is required for find('Accounts')");
        }        
        return $query->where([
            'OR' => [
                'getter_id' => $options['for'],
                'transmitter_id' => $options['for'] 
            ]
        ]);
    }
}
