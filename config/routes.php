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
        $routes->connect('/transactions/*', ['controller' => 'Transactions','action' => 'index']);
        $routes->connect('/payments/:id', ['controller' => 'Payments','action' => 'index'],['id' => '[0-9]+ ']);
        
        $routes->connect('/payments/:action/*', ['controller' => 'Payments']);
        

//        $routes->fallbacks();
        
    });

});
