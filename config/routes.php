<?php
use Cake\Routing\Router;

Router::prefix('admin', function($routes){
    $routes->plugin('Rita/Accunting', [ 'path' => '/accunting'], function($routes) {
        $routes->redirect('/', ['controller' => 'Dashboard','action' => 'index']);
        $routes->fallbacks('InflectedRoute');
        
    });
});

Router::scope('/', function ($routes) {


});


Router::prefix('client', function($routes)
{
     
  $routes->plugin('Rita/Accunting', [ 'path' => '/accunting'], function($routes) {
             $routes->connect('/', ['controller' => 'reports','action' => 'index']);
        $routes->fallbacks('InflectedRoute');
        
    });
    
});
