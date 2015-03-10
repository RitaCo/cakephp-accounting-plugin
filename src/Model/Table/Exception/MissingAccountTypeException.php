<?php
/**
 * MissingTableClassException class
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @since         3.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Rita\Accounting\Model\Table\Exception;

use Cake\Core\Exception\Exception;

/**
 * Exception raised when a Table could not be found.
 *
 */
class MissingAccountTypeException extends Exception
{

    protected $_messageTemplate = 'Type of Accounting undefined(ACC_TYPE)';
}
