<?php
use Cake\Core\Configure;
require __DIR__ . '/events.php';

Configure::write('Rita.Accounting', [

    'userTable' => 'Rita/Users.Users'



]);