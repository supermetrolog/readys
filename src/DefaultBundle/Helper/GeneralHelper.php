<?php 

namespace DefaultBundle\Helper;
use \PHPMorphy;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;

class GeneralHelper
{
	private const COMPANY_NAME = "RAYS ARMA";

	/*public $em;*/
	public $container;
	public $param;
	
	public function __construct($container) {
		/*$this->em = $em;*/
		$this->container = $container;
	}

	public function api($url, $request = false)
    {
        if ($request){
            $this->setParam($request);
        }
        $user_agent = "api for industry.realtor.ru";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_URL, "https://pennylane.pro/api/v1".$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "request=".json_encode($this->param));
        $info = curl_getinfo($ch);
        $result = curl_exec($ch);
        $error = curl_errno($ch);
        if($this->container->getParameter('kernel.environment') == "dev") {
            dump(json_encode($this->param));
            dump($info);
        }
        return ['error' => $error, 'res' => json_decode($result)];

    }

    public function setParam($request){
	    $deal = [
	        "rent" => 1,
            "sale" => 2,
            "otvetstvennoe-hranenie" => 3
        ];
	    $this->param = $request->query->all();
        $this->param['page_num'] = $request->get("pages", 1);
        $this->param['page_items'] = $request->get("page_items", 32);
        if($request->get("deal_type"))  $this->param['deal_type'] = $deal[$request->get("deal_type")];
        if($request->get("area_min"))  $this->param['area_min'] = str_replace(' ', '',$request->get("area_min"));
        if($request->get("area_max"))  $this->param['area_max'] = str_replace(' ', '',$request->get("area_max"));
        if($request->get("price_min"))  $this->param['price_min'] = str_replace(' ', '',$request->get("price_min"));
        if($request->get("price_max"))  $this->param['price_max'] = str_replace(' ', '',$request->get("price_max"));
    }
	
	public function rus2translit($string) {
	    $converter = array(
	        'а' => 'a',   'б' => 'b',   'в' => 'v',
	        'г' => 'g',   'д' => 'd',   'е' => 'e',
	        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
	        'и' => 'i',   'й' => 'y',   'к' => 'k',
	        'л' => 'l',   'м' => 'm',   'н' => 'n',
	        'о' => 'o',   'п' => 'p',   'р' => 'r',
	        'с' => 's',   'т' => 't',   'у' => 'u',
	        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
	        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
	        'ь' => 'y',   'ы' => 'y',   'ъ' => 'y',
	        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

	        'А' => 'A',   'Б' => 'B',   'В' => 'V',
	        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
	        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
	        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
	        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
	        'О' => 'O',   'П' => 'P',   'Р' => 'R',
	        'С' => 'S',   'Т' => 'T',   'У' => 'U',
	        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
	        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
	        'Ь' => 'Y',  'Ы' => 'Y',   'Ъ' => 'Y',
	        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
	    );
	    return strtr($string, $converter);
	}

	public function correctString ($text,$reverse=false) {
	  $str[0] = array(
	    "й","ц","у","к","е","н","г","ш","щ","з","х","ъ",
	    "ф","ы","в","а","п","р","о","л","д","ж","э",
	    "я","ч","с","м","и","т","ь","б","ю"
	  );
	  $str[1]= array(
	    "q","w","e","r","t","y","u","i","o","p","[","]",
	    "a","s","d","f","g","h","j","k","l",";","'",
	    "z","x","c","v","b","n","m",",","."
	  );
	  $out = array();
	  foreach($str[0] as $i=>$key){
	    $out[0][$i] =  '#'.str_replace(array('.',']','['),array('\.','\]','\['),  $str[ $reverse ? 0:1][$i]).'#ui';
	    $out[1][$i] =  $str[$reverse ? 1:0][$i] ;
	  }
	  return preg_replace($out[0], $out[1], $text);
	}

	function createLink($str){
	    return preg_replace("/[\s]/", "_", $this->rus2translit(strtolower($str)));
    }

    /*public function getAreas(){
        $res = $this->em->getRepository( 'DefaultBundle:LDirections' )->findAll();
        foreach ($res as $k=>$v){
            $area[$v->getId()][] = $v;
        }
        return $area;
    }
    public function getRegions(){
        $res = $this->em->getRepository( 'DefaultBundle:LRegions' )->findAll();
        return $res;
    }

    public function getAvg($id){
        $res = $this->em->getRepository( 'DefaultBundle:CIndustryBlocks' )->getAvg($id)->getQuery()->getOneOrNullResult();
        return $res;
    }
    public function getFloorType($val){
        $res = $this->em->getRepository( 'DefaultBundle:LFloorTypes' )->getAll($val)->getQuery()->getArrayResult();
        return $res;
    }
    public function collonMeshes($val){
        $res = $this->em->getRepository( 'DefaultBundle:LCollonMeshes' )->getAll($val)->getQuery()->getOneOrNullResult();
        return $res->getTitle();
    }
    public function getSafety($val){
        $res = $this->em->getRepository( 'DefaultBundle:LSafetySystems' )->getAll($val)->getQuery()->getArrayResult();
        return $res;
    }

    public function getVillages(){
        $res = $this->em->getRepository( 'DefaultBundle:CIndustryFull' )->getVillages()->getQuery()->getArrayResult();
        foreach($res as $k=>$v){
            $row[trim($v['title'])] = $v;
        }
        $items = $row;
        ksort($items);
        return $items;
    }
    public function getVillageName($val){
        $res = $this->em->getRepository( 'DefaultBundle:LVillages' )->findBy(["en"=>str_replace("_", " ", $val)]);
        if($res){
            return $res[0]->getTitle();
        }else{
            return "";
        }
    }
    public function getMetroName($val){
        $res = $this->em->getRepository( 'DefaultBundle:LMetros' )->findBy(["yandexId"=>$val]);
        if($res){
            return $res[0]->getTitle();
        }else{
            return "";
        }
    }
    public function getHighways(){
        $res = $this->em->getRepository( 'DefaultBundle:CIndustryFull' )->getHighways()->getQuery()->getArrayResult();
        foreach($res as $k=>$v){
            $row[trim($v['title'])] = $v;
        }
        $items = $row;
        ksort($items);
        return $items;
    }
    public function getHighwayName($val){
        $res = $this->em->getRepository( 'DefaultBundle:LHighways' )->findBy(["en"=>str_replace("_", " ", $val)]);
        if($res){
            return $res[0]->getTitle();
        }else{
            return "";
        }

    }*/

    public function setParameters($request){
        if($request->get("polygon_type")){
            switch($request->get("polygon_type")){
                case "district":
                    $direction = [
                        "cao"=>1,
                        "sao"=>2,
                        "vao"=>3,
                        "uao"=>4,
                        "zao"=>5,
                        "svao"=>6,
                        "uvao"=>7,
                        "szao"=>8,
                        "uzao"=>9,
                    ];
                    $request->attributes->set("direction", [$direction[$request->get("polygon")]]);
                    $request->attributes->set("region", [1]);
                    break;
                case "direction":
                    $direction = [
                        "north"=>2,
                        "east"=>3,
                        "south"=>4,
                        "west"=>5,
                        "north-east"=>6,
                        "south-east"=>7,
                        "north-west"=>8,
                        "south-west"=>9,
                    ];
                    $request->attributes->set("direction", [$direction[$request->get("polygon")]]);
                    $request->attributes->set("region", [2]);
                    break;
                default:
                    $request->attributes->set($request->get("polygon_type"), [$request->get("polygon")]);
                    break;
            }
        }
        if($request->get("reg")){
            switch ($request->get("reg")){
                case "moscow":
                    $request->attributes->set("region", [1]);
                    break;
                case "moscow":
                    $request->attributes->set("moscow_region", [2]);
                    break;
            }
        }
        if($request->get("tech")){
            switch ($request->get("tech")){
                case "class_a":
                    $request->attributes->set("object_class", [1]);
                    break;
                case "class_b":
                    $request->attributes->set("object_class", [2]);
                    break;
                case "class_c":
                    $request->attributes->set("object_class", [3]);
                    break;
                case "class_d":
                    $request->attributes->set("object_class", [4]);
                    break;
                case "gate_dock":
                    $request->attributes->set("gate_type", [1]);
                    break;
                case "gate_ramp":
                    $request->attributes->set("gate_type", [3]);
                    break;
                case "gate_zero":
                    $request->attributes->set("gate_type", [2]);
                    break;
                case "warehouse_unheated":
                    $request->attributes->set("heated", [-1]);
                    break;
                case "warehouse_heated":
                    $request->attributes->set("heated", [1]);
                    break;
                case "crane":
                    $request->attributes->set("telphers", 1);
                    break;
                case "railway":
                    $request->attributes->set("railway", 1);
                    break;

            }
        }
        return $request;
    }

    public function getDirectName($id, $region){

        $res = array(
            1 => array(
                1 => 'ЦАО',
                2 => 'САО',
                3 => 'ВАО',
                4 => 'ЮАО',
                5 => 'ЗАО',
                6 => 'СВАО',
                7 => 'ЮВАО',
                8 => 'СЗАО',
                9 => 'ЮЗАО'
            ),
            2 => array(
                1 => 'Центр',
                2 => 'Север',
                3 => 'Восток',
                4 => 'Юг',
                5 => 'Запад',
                6 => 'Северо-Восток',
                7 => 'Юго-Восток',
                8 => 'Северо-Запад',
                9 => 'Юго-Запад'
            )
        );
        return $res[$region][$id];
    }
    public function getDirectLink($id, $region){

        $res = array(
            1 => array(
                1 => 'cao',
                2 => 'sao',
                3 => 'vao',
                4 => 'uao',
                5 => 'zao',
                6 => 'svao',
                7 => 'uvao',
                8 => 'szao',
                9 => 'uzao'
            ),
            2 => array(
                1 => 'center',
                2 => 'north',
                3 => 'east',
                4 => 'south',
                5 => 'west',
                6 => 'north_east',
                7 => 'south_east',
                8 => 'north_west',
                9 => 'south_west'
            )
        );
        return $res[$region][$id];
    }

    public function getLotBreadcrumbs($lot, $breadcrumbs, $deal, $router){
	    if($deal == "rent"){
            $breadcrumbs->addItem('Аренда склада', $router->generate('catalog', ['deal_type' => $deal]));
        }else{
            $breadcrumbs->addItem('Продажа склада', $router->generate('catalog', ['deal_type' => $deal]));
        }
	    if(!empty($lot->building[1]->region) && $lot->building[1]->region[1]){
            $breadcrumbs->addItem($lot->building[1]->region[1], $router->generate('catalog_type_region', [
                'deal_type' => $deal,
                "object_type"=>"sklad",
                "reg"=>($lot->building[1]->region[1] == "московская область" ? "moscow_region" : "moscow")
            ]));
        }

	    if(!empty($lot->building[1]->direction) && $lot->building[1]->direction[1]){
            $breadcrumbs->addItem($lot->building[1]->direction[1], $router->generate('catalog_type_polygon', [
                'deal_type' => $deal,
                "object_type"=>"sklad",
                "polygon_type"=>($lot->building[1]->region[1] == "московская область" ? "direction" : "district"),
                "polygon"=>$this->createLink($lot->building[1]->direction[1])
            ]));
	    }
	    if(!empty($lot->building->town) && $lot->building->town[1]){
            $breadcrumbs->addItem($lot->building[1]->town[1], $router->generate('catalog_type_polygon', [
                'deal_type' => $deal,
                "object_type"=>"sklad",
                "polygon_type"=>"city",
                "polygon"=>$this->createLink($lot->building[1]->town[1])
            ]));
        }
        if(!empty($lot->building[1]->highway) && $lot->building[1]->highway[1]){
            $breadcrumbs->addItem($lot->building[1]->highway[1], $router->generate('catalog_type_polygon', [
                'deal_type' => $deal,
                "object_type"=>"sklad",
                "polygon_type"=>"highway",
                "polygon"=>$this->createLink($lot->building[1]->highway[1])
            ]));
        }
        return $breadcrumbs;
    }

	public function generateLotTitle($lot, $dealType)
	{
		$words = ["Лот $lot->visual_id"];

		$words[] = $dealType === "rent" ? "Аренда" : "Продажа";

		$words[] = "Индустриальная недвижимость";

		$words[] = self::COMPANY_NAME;

		return implode(" | ", $words);
	}

	public function generateLotDescription($lot, $dealType)
	{
		$words = [];

		$words[] = $dealType === "rent" ? "Аренда склада" : "Продажа склада";

		if (isset($lot->class_name)) {
			$words[] = "Класс " . $lot->class_name;
		}

		if (isset($lot->building[1]->address[1])) {
			$words[] = $lot->building[1]->address[1];
		}

		$words[] = self::COMPANY_NAME;

		return implode("; ", $words);
	}
}