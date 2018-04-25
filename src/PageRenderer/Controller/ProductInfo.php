<?php
// example.com/src/PageRenderer/Controller/ProductInfo.php
namespace PageRenderer\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Component\ProductEngine;

class ProductInfo
{
	use ControllerTrait;

    public function showAction($catagory_key, $product_key)
    {
    	$productEngine = new ProductEngine();
        $catagory = $productEngine -> getCatagory($catagory_key);
        $products = $catagory['products'];
        $twig = $this->createTwig();
        //var_dump($catagory);
        $content = $twig->render("index.html.twig", 
        	array('product_key'=>$product_key,
                'catagory_key' => $catagory_key,
                'catagory_catagory' => $catagory['name'],
                'product'=> $products[$product_key]
                ));
        return new Response($content);
    }
}