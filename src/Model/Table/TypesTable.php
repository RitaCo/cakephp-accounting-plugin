<?php
namespace Rita\Accounting\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;

use Cake\Validation\Validator;
use Rita\Core\ORM\Table;
use Rita\Accounting\Model\Entity\AccountingType;

/**
 * AccountingTypes Model
 */
class TypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('accounting_types');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('in', 'valid', ['rule' => 'boolean'])
            ->requirePresence('in', 'create')
            ->notEmpty('in')
            ->add('out', 'valid', ['rule' => 'boolean'])
            ->requirePresence('out', 'create')
            ->notEmpty('out')
            ->add('total', 'valid', ['rule' => 'numeric'])
            ->requirePresence('total', 'create')
            ->notEmpty('total');

        return $validator;
    }
}
