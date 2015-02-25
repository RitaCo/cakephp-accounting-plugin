<?php
namespace Rita\Accounting\Model\Entity;

use Rita\Core\ORM\Entity;

/**
 * AccountingPayment Entity.
 */
class Payment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'account_id' => true,
        'bank_id' => true,
        'value' => true,
        'au' => true,
        'valid' => true,
        'refrence' => true,
        'account' => true,
    ];
}
