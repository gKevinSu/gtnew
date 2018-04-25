<?php
// src/Controller/ControllerTrait.php
namespace PageRenderer\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Assetic\Factory\AssetFactory;
use Assetic\Extension\Twig\AsseticExtension;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Twig\TwigFunction;

trait ControllerTrait
{
	public function createTwig()
	{
		//get sub path by child class name
		$splitedClassName = explode("\\",get_called_class());
		$subPath = end($splitedClassName);
		$viewsRoot = __DIR__."/../../../app/resources/views/";

		$loader = new FilesystemLoader($viewsRoot.$subPath);
		$loader->addPath($viewsRoot);

		$twig = new Environment($loader);

		$factory = new AssetFactory(__DIR__."/../../../web");

		return $twig;
	}

	public function render($name){
		return new response($this->createTwig()->render($name));
	}
}
