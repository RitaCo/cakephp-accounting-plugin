<?php
namespace Rita\Accounting\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountingAccount Entity.
 */
class AccountingAccount extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'type_id' => true,
        'system' => true,
        'master' => true,
        'status' => true,
        'amount' => true,
        'user' => true,
        'type' => true,
    ];
}
