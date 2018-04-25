<?php
// example.com/src/app.php
use Symfony\Component\Routing;
use Component\ProductEngine;
 
$routes = new Routing\RouteCollection();

$routes->add('index', new Routing\Route('/', array(
    '_controller' => 'PageRenderer\Controller\BasicInfo::indexAction',
    'depth' => '0'
)));

$routes->add('about', new Routing\Route('/about', array(
    '_controller' => 'PageRenderer\Controller\BasicInfo::aboutAction'
)));

$routes->add('news', new Routing\Route('/news', array(
    '_controller' => 'PageRenderer\Controller\BasicInfo::newsAction'
)));

$routes->add('contact', new Routing\Route('/contact', array(
    '_controller' => 'PageRenderer\Controller\BasicInfo::contactAction'
)));

$productEngine = new ProductEngine();
$catalog = $productEngine -> getCatalog();

//add catagory route
foreach ($catalog as $catagory_key => $catagory) {
    $routes->add($catagory_key, new Routing\Route('/'.$catagory_key, array(
    '_controller' => 'PageRenderer\Controller\CatalogInfo::showAction',
    'catagory_key' => $catagory_key
    )));

    //add product route
    if(array_key_exists('products', $catagory)) {
        foreach ($catagory['products'] as $product_key => $product) {
            //var_dump($product);
            $path = '/'.$catagory_key.'/'.$product_key;
            //var_dump($path);
            $routes->add($product_key, new Routing\Route($path, array(
            '_controller' => 'PageRenderer\Controller\ProductInfo::showAction',
            'catagory_key' => $catagory_key,'product_key' => $product_key
            )));
        }
    }
}

return $routes;