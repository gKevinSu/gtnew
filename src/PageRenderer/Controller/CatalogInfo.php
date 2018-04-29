<?php
// example.com/src/PageRenderer/Controller/CatalogInfo.php
namespace PageRenderer\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Component\ProductEngine;

class CatalogInfo
{

    use ControllerTrait;

    public function showAction($catagory_key)
    {
    	$productEngine = new ProductEngine();
		$catagory = $productEngine -> getCatagory($catagory_key);
		
        $twig = $this->createTwig();
        //var_dump($catagory);
        $content = $twig->render("index.html.twig", 
        	array('catagory' => $catagory));
        return new Response($content);
    }
}