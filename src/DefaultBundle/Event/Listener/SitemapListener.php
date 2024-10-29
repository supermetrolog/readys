<?php
namespace DefaultBundle\Event\Listener;

use Symfony\Component\Routing\RouterInterface;
use Presta\SitemapBundle\Service\SitemapListenerInterface;
use Presta\SitemapBundle\Event\SitemapPopulateEvent;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;


class SitemapListener implements SitemapListenerInterface
{
    private $router;
    private $event;
    /*private $em;*/
    private $container;
    
    public function __construct(RouterInterface $router, $container){
        $this->router = $router;
        /*$this->em = $em;*/
        $this->container = $container;
    }

    public function populateSitemap(SitemapPopulateEvent $event){
        $this->event = $event;
        $section = $event->getSection();
        if (is_null($section) || $section == 'default') {
            //get absolute homepage url
        	$url = $this->router->generate ( 'rent', array (), true );
        	$this->createSiteMapEntry ( $url, new \DateTime (), UrlConcrete::CHANGEFREQ_WEEKLY, 0.7 );

        	$url = $this->router->generate ( 'sale', array (), true );
        	$this->createSiteMapEntry ( $url, new \DateTime (), UrlConcrete::CHANGEFREQ_WEEKLY, 0.7 );
        		
        	$lots_sale = $this->em->getRepository("SaleBundle:Lots", "sale")->findBy(array("saleStatusId" => 1, ));
        	foreach ( $lots_sale as $lot ) {
        		$url = $this->router->generate ( "sale_lot", array (
        				'id' => $lot->getId()
        		), true );
        		$this->createSiteMapEntry ( $url, new \DateTime ( date("Y-m-d") ), UrlConcrete::CHANGEFREQ_DAILY, 0.7 );
        	}
        	$lots_rent = $this->em->getRepository("SaleBundle:Lots", "sale")->findBy(array("isRent" => '0', "isRented" => '0', 'isNotSite' => '0', 'isPhoto' => '1', 'isArchive' => '0'));
        	foreach ( $lots_rent as $lot ) {
        		$url = $this->router->generate ( "rent_lot", array (
        				'id' => $lot->getId()
        		), true );
        		$this->createSiteMapEntry ( $url, new \DateTime ( date("Y-m-d") ), UrlConcrete::CHANGEFREQ_DAILY, 0.7 );
        	}
        		
        }
        
    }
    
    private function createSiteMapEntry($url, $modifiedDate, $changeFrequency, $priority){
    	//add homepage url to the urlset named default
    	$this->event->getGenerator()->addUrl(
    			new UrlConcrete(
    					$url,
    					$modifiedDate,
    					$changeFrequency,
    					$priority
    			),
    			'default'
    	); 
    }
}