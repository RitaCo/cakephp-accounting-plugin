<?php
use Cake\Routing\Router;

Router::prefix('admin', function($routes){
    $routes->plugin('Rita/Accounting', [ 'path' => '/accounting-manager'], function($routes) {
        $routes->connect('/', ['controller' => 'DashBoard','action' => 'index'],[]);
        $routes->fallbacks();
        
    });
});



Router::prefix('client', function($routes){
     
    $routes->plugin('Rita/Accounting', [ 'path' => '/accounting-manager'], function($routes) {
        $routes->connect('/', ['controller' => 'Accounts','action' => 'index'],['_name' => 'Accounting']);
        $routes->fallbacks();
        
    });

});
