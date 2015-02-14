<?php
namespace Rita\Accounting\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountingTransaction Entity.
 */
class Transaction extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'type' => true,
        'of_id' => true,
        'to_id' => true,
        'in' => true,
        'out' => true,
        'amount' => true,
        'accepted' => true,
        'date' => true,
        'time' => true,
        'note' => true,
        'of' => true,
        'to' => true,
    ];
}
