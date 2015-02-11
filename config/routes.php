<?php
use Cake\Routing\Router;

Router::prefix('admin', function($routes){
    $routes->plugin('Rita/Accounting', [ 'path' => '/ccounting'], function($routes) {
        $routes->redirect('/', ['controller' => 'Dashboard','action' => 'index']);
        $routes->fallbacks('InflectedRoute');
        
    });
});



Router::prefix('client', function($routes){
     
    $routes->plugin('Rita/Accounting', [ 'path' => '/accounting'], function($routes)
    {
        $routes->connect('/', ['controller' => 'DashBoard','action' => 'index'],['_name' => 'Accounting']);
        $routes->fallbacks('InflectedRoute');
    
    });

});
