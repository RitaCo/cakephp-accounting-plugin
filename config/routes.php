<?php
use Cake\Routing\Router;

Router::prefix('admin', function($routes){
    $routes->plugin('Accunting', [ 'path' => '/accunting'], function($routes) {
        $routes->redirect('/', ['controller' => 'Dashboard','action' => 'index']);
        $routes->fallbacks('InflectedRoute');
        
    });
});

Router::scope('/', function ($routes) {


});


Router::prefix('client', function($routes)
{
     
  $routes->plugin('Accunting', [ 'path' => '/accunting'], function($routes) {
        
        $routes->fallbacks('InflectedRoute');
        
    });
    
});
