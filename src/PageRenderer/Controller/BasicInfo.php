<?php
// example.com/src/PageRenderer/Controller/BasicInfo.php
namespace PageRenderer\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Component\ProductEngine;

class BasicInfo
{
	use ControllerTrait;

    public function indexAction()
    {
        $productEngine = new ProductEngine();
        $catalog = $productEngine -> getCatalog();
        
        $twig = $this->createTwig();
        //var_dump($catalog);
        $content = $twig->render("index.html.twig", 
            array('catalog' => $catalog));
        return new Response($content);
    }

    public function newsAction()
    {
        return $this->render("index.html.twig");
    }
    public function aboutAction()
    {
    	return $this->render("about.html.twig");
    }
    public function contactAction()
    {
    	return $this->render("contact.html.twig");
    }

}