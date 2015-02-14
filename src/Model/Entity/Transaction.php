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
        'transmitter_id' => true,
        'getter_id' => true,
        'amount_in' => true,
        'amount_out' => true,
        'amount_total' => true,
        'accepted' => true,
        'note' => true,
        'transmitter' => true,
        'getter' => true,
    ];
}
