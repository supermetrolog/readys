<?php 
namespace AppBundle\Twig;

use Symfony\Component\DependencyInjection\Container;
use Doctrine\ORM\EntityManager;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;

class AppExtension extends \Twig_Extension{
	
	protected $container;
	
	public function __construct($container){
		$this->container = $container;
	}
	
	public function getName(){
		return 'app_extension';
	}
	
	public function getFilters(){
		return array(
				new \Twig_SimpleFilter(
						'getTimeJob',
						array($this, 'getTimeJob')), 
				new \Twig_SimpleFilter(
						'get_price',
						array($this, 'get_price')),
				new \Twig_SimpleFilter(
						'get_currency_symbol',
						array($this, 'get_currency_symbol')),
				new \Twig_SimpleFilter(
						'array_unset',
						array($this, 'array_unset')),
                new \Twig_SimpleFilter(
                        'createLink',
                        array($this, 'createLink')),
                new \Twig_SimpleFilter(
                        'castToArray',
                        array($this, 'castToArray')),
                new \Twig_SimpleFilter(
                        'rus2translit',
                        array($this, 'rus2translit')),
                new \Twig_SimpleFilter(
                        'getDealId',
                        array($this, 'getDealId')),

		);
	}
	
	
	public function rus2translit($val){
	    return $this->container->get("helpers")->rus2translit($val);
    }
	public function getTimeJob($val){
		switch (date("w")){
			case 0:
			case 6:
				if(date("H") >= 19 || date("H") < 9){
					return true;	
				}
				break;
			case 1:
			case 2:
			case 3:
			case 4:
				if(date("H") >= 20 || date("H") < 9){
					return true;
				}
				break;
			case 5:
				if(date("H") >= 21 || date("H") < 9){
					return true;
				}
				break;
		}
		return false;
	}
	
	public function get_price($val, $price){
		switch ($val){
			case "rub":
				$res = $price;
				break;
			case "usd":
				$res = $price / USD;
				break;
			case "eur":
				$res = $price / EUR;
				break;
		}
		return $res;
	}

	public function get_currency_symbol($val){
		switch ($val){
			case "rub":
				$res = "&#8381;";
				break;
			case "usd":
				$res = "$";
				break;
			case "eur":
				$res = "€";
				break;
		}
		return $res;
	}

	public function array_unset($val){
		unset($val['pages']);
		return $val;
	}

	public function createLink($val){
	    return $this->container->get("helpers")->createLink($val);
	}

    public function castToArray($val){
        return get_object_vars($val);
    }

    public function getDealId($val){
	    $deal = [
            "rent" => 1,
            "sale" => 2,
            "otvetstvennoe-hranenie" => 3
        ];
	    return $deal[$val];
    }

}