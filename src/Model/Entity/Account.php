<?php
namespace Rita\Accounting\Model\Entity;

use Rita\Core\ORM\Entity;

/**
 * AccountingAccount Entity.
 */
class Account extends Entity
{
    
    
    const ACC_FOUND  = 'FOUND';
    const ACC_BANK   = 'BANK';
    const ACC_WALLET = 'WALLET';
    

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
    
 //   protected $_virtual = ['number', 'title'];
//    
//    /**
//     * Account::_getNo()
//     * 
//     * @return
//     */
//    protected function _getNumber()
//    {
//        return $this->_properties['type']['name'][0].'.'.$this->_properties['id'];
//    }
//
//    
//    /**
//     * Account::_getStatus()
//     * 
//     * @return
//     */
//    protected function _getStatus()
//    {
//        $status = [
//             __d('Rita/Accunting','غیرفعال'),
//            __d('Rita/Accunting','فعال')
//        ];
//        
//        return $status[$this->_properties['status']];
//    }
//    
//    
//    /**
//     * Account::_getTitle()
//     * 
//     * @return
//     */
//    protected function _getTitle()
//    {
//        $title = '';
//        
//        
//        switch($this->type_id){
//            
//            case 1:
//                $title = __d('Rita/Accunting','صندوق');
//                break;
//            case 2:
//                $title = __d('Rita/Accunting','بانک');
//                break;
//            case 3:
//                $title = __d('Rita/Accunting','کیف پول');
//                break;
//        }
//        
//        if ($this->master) {
//            $title = $title . ' ' . __d('Rita/Accunting','اصلی');
//        }
//        return $title;
//    }
    
    
}
