<?php

$route = [];

$route['default_controller'] = 'home';
$route['info/(:any)'] = 'home/info/$1';

<?php

$routes = [
    'default_controller' => 'pelanggan',
    
    // Route statis
    'pelanggan'          => 'pelanggan/index',
    
    // Route dinamis dengan parameter (:any) atau (:num)
    'pelanggan/(:any)'   => 'pelanggan/detail/$1',
];

// Inisialisasi router
$router = new Router($routes);

// Dispatch berdasarkan URI
$uri = $_SERVER['REQUEST_URI'] ?? '';
$router->dispatch($uri);
?>

