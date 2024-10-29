<?php 
namespace DefaultBundle\Event\Listener;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;


class BeforeListener
{
	/**
	 * @var ContainerInterface
	 */
	
	protected $container;
	
	
	
	public function __construct(Container $container){
		$this->container = $container;
	}

	public function onKernelController(FilterControllerEvent $event)
	{
		$request = $this->container->get("request");
		#$doctrine = $this->container->get('doctrine');
		
		//var_dump($request->getLocale());
		
		if(!defined('LOCALE')){
			define('LOCALE', $request->getLocale());
		}
		if(!defined('RANGE')){
			define('RANGE', 32);
		}
		if(!defined('PHONE')){
			define('PHONE', "150 0323");
		}
		if(!defined('DEAL')){
			define('DEAL', "rent");
		}
		
		/* CURRENCY */
		/*$currency = $doctrine->getRepository("DefaultBundle:ACurs")->findBy(array(), array("tDay"=>"DESC"), 1);
		if($currency){
			if(!defined('RUR')){ define( 'RUR', 1 );}
			if(!defined('USD')){ define( 'USD', $currency[0]->getDollar() );}
			if(!defined('EUR')){ define( 'EUR', $currency[0]->getEuro() );}
		}*/
	}
	

}