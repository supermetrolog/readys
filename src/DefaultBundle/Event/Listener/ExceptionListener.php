<?php
namespace DefaultBundle\Event\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\TwigBundle\TwigEngine;


class ExceptionListener{
	
	/**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var TwigEngine
     */
    protected $templating;

	public function __construct(ContainerInterface $container, TwigEngine $templating){
		
		$this->container = $container;
        $this->templating = $templating;
	}

    public function onKernelException(GetResponseForExceptionEvent $event){
    	// You get the exception object from the received event
    	
        $exception = $event->getException();
        $code = method_exists($exception, 'getStatusCode')?$exception->getStatusCode():$exception->getCode();
        $response = null;
        if(!defined('RANGE')){
        	define('RANGE', 32);
        }
        if(!defined('PHONE')){
        	define('PHONE', "326 2626");
        }
        // get path
		if(method_exists($exception, 'getStatusCode') && $exception->getStatusCode() == 404){
			if (false === strpos($event->getException()->getMessage(), 'пойманое исключение 404 ошибки')) {
			}
			$response = $this->templating->render('DefaultBundle:Errors:errors.html.twig',
	            array(
	            		'code' => $code,
	            		'text' => $exception->getMessage(),
	            		'title' => '',
				)
	        );
			$event->setResponse(new Response($response));
		}

		
        
    }
}