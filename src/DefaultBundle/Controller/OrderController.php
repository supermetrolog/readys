<?php 
namespace DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\SwiftmailerBundle;

class OrderController extends Controller{
	
	public function sendAction(Request $request){
		$server_name = $request->server->get('HTTP_HOST');
	
		$email = $request->get('email');
		if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			throw new InvalidParamException('The email contains characters that are not allowed');
		}
		$comments = $request->get('comments');
		$wish = $request->get('wish');
		$base_price = $request->get('base_price', "");
		$price = $request->get('price', "");
		$info = $request->get('info');
		$lots = $request->get('lots');
		$rent = $request->get('rent');
		$sale = $request->get('sale');
		$lease = $request->get('lease');
		$buy = $request->get('buy');
		$device = $request->get('device');
		$type_order = 1;
		
		$cookies = $request->cookies;
		$cookie_expire = time()+3600*24*15;
		$cookie_path = '/';
		
		//запоминаем для дальней шей вставки в поля формы
		setCookie("name", $request->get('name'), $cookie_expire, $cookie_path);
		if($request->get('phone')){
			setCookie("phone", $request->get('phone'), $cookie_expire, $cookie_path);
		}
		if($request->get('email')){
			setCookie("email", $request->get('email'), $cookie_expire, $cookie_path);
		}
		
		
		$body = "Заявка с сайта " . $server_name . PHP_EOL;
		$body .= "От: " . $request->get('name', "Unknown") . PHP_EOL . PHP_EOL;
		$body .= "Телефон: " . $request->get('phone', "empty") . PHP_EOL . PHP_EOL;
		if(!empty($email)){
			$body .= "E-Mail: " . $email . PHP_EOL . PHP_EOL;
		}
		$body .= "Тип заявки: " . $wish . PHP_EOL . PHP_EOL;
		if($rent){
			$body .= "Пользователь хочет снять..." . PHP_EOL . PHP_EOL;
			$type_order = 5;
		}
		if($sale){
			$body .= "Пользователь хочет продать..." . PHP_EOL . PHP_EOL;
			$type_order = 2;
		}
		if($lease){
			$body .= "Пользователь хочет сдать..." . PHP_EOL . PHP_EOL;
			$type_order = 4;
		}
		if($buy){
			$body .= "Пользователь хочет купить..." . PHP_EOL . PHP_EOL;
			$type_order = 3;
		}
		$body .= "Страница отправки: " . $request->get('url', "") . PHP_EOL . PHP_EOL;
		if(!empty($comments)){
			$body .= "Комментарий: " . $comments . PHP_EOL . PHP_EOL;
		}
		if(!empty($lots)){
			$body .= $lots . PHP_EOL . PHP_EOL;
		}
		if(!empty($price)){
			$body .= "Предложенная цена - ".$price . PHP_EOL . PHP_EOL;
			$type_order = 8;
		}
		if(!empty($base_price)){
			$body .= "Цена от собственника - ".$base_price . PHP_EOL . PHP_EOL;
			$type_order = 8;
		}
		if(!empty($info)){
			$body .= str_replace("<br>", PHP_EOL, $info) . PHP_EOL . PHP_EOL;
			if(empty($type_order)){
				$type_order = 7;
			}
		}
		if(!empty($device)){
			$body .= "Устройство: " . $device . PHP_EOL . PHP_EOL;
		}
		if($request->get("check-in")){
			$body .= "Дата заезда: " . $request->get("check-in") . PHP_EOL . PHP_EOL;
		}
		if($request->get("check-out")){
			$body .= "Дата выезда: " . $request->get("check-out") . PHP_EOL . PHP_EOL;
		}
		$utm_metka = array(
				"utm_campaign",
				"utm_source",
				"utm_content",
				"utm_medium",
		);
		
		$message = \Swift_Message::newInstance()
			->setSubject('Заявка с сайта ' . $server_name)
			->setFrom('mailer@realtor.ru')
			//->setTo(array('pik@realtor.ru', 'ekaterina@realtor.ru', 'frolov@realtor.ru'))
			->setTo(array('Kochanov@realtor.ru', 'frolov@realtor.ru'))
			//->setTo(array('frolov@realtor.ru'))
			->setBody($body);
			//var_dump($url);die;
		$res = $this->get('mailer')->send($message);

		
		return new Response(json_encode(array("success"=>"Заявка успешно отправлена!")));
	
	}
	
	public function subscribeAction(Request $request){
		$server_name = $request->server->get('HTTP_HOST');
		
		$cookies = $request->cookies;
		$cookie_expire = time()+3600*24*15;
		$cookie_path = '/';
		
		//запоминаем для дальней шей вставки в поля формы
		if($request->get('email')){
			setCookie("email", $request->get('email'), $cookie_expire, $cookie_path);
		}
		
		$body = "Заявка с сайта " . $server_name . PHP_EOL;
		$body .= "Пользователь заполнил форму подписки БУДЬ В КУРСЕ ПЕРВЫМ" . $server_name . PHP_EOL;
		$body .= "E-Mail: " . $request->get('email') . PHP_EOL . PHP_EOL;
		
		$message = \Swift_Message::newInstance()
		->setSubject('Заявка с сайта ' . $server_name)
		->setFrom('mailer@realtor.ru')
		->setTo(array('Kochanov@realtor.ru', 'frolov@realtor.ru'))
		//->setTo(array('frolov@realtor.ru'))
		->setBody($body);
		//var_dump($url);die;
		$res = $this->get('mailer')->send($message);
	}
}