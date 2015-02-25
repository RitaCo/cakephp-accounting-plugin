<?php
namespace Rita\Accounting\Model\Entity;

use Rita\Core\ORM\Entity;

/**
 * AccountingType Entity.
 */
class Type extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'in' => true,
        'out' => true,
        'total' => true,
    ];
}
