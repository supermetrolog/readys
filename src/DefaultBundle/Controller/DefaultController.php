<?php

namespace DefaultBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
	private function isDevMode(): bool
	{
		return $this->container->getParameter('kernel.environment') === "dev";
	}

	private function dumpInDevMode($data): void
	{
		if ($this->isDevMode()) {
			dump($data);
		}
	}

    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        $filters = $this->get('helpers')->api("/get/filters/");
        $this->get('helpers')->setParam($request);
        $this->get('helpers')->param['page_items'] = 8;
        $this->get('helpers')->param['deal_type'] = 1;
        $res = $this->get('helpers')->api("/get/list/");
        $lots = $res['res']->offers;
        /*if($this->container->getParameter('kernel.environment') == "dev"){
            dump($lots);
        }*/

    	return $this->render('DefaultBundle:Default:mainpage.html.twig',
            [
        		"title" => "Склады в Москве и области, аренда помещений под производство",
        		"description" => "Большая база актуальных объявлений об аренде и продаже складов в Москве и Московской области. Широкий выбор производственных помещений.",
                "lots" => $lots,
                'filters' => $filters["res"],
            ]
        );
    }

    public function catalogAction(Request $request, $deal_type){
        /*$request = $this->get("helpers")->setParameters($request);*/
        $filters = $this->get('helpers')->api("/get/filters/");
        if($this->container->getParameter('kernel.environment') == "dev") {
            dump($filters["res"]);
        }
        $res = $this->get('helpers')->api("/get/list/", $request);
        if($this->container->getParameter('kernel.environment') == "dev") {
            dump($res);
        }
        $total = $res['res']->amount;
        $lots = $res['res']->offers;
        if($this->container->getParameter('kernel.environment') == "dev") {
            dump($lots);
        }
        $router = $this->get('router');

        $breadcrumbs = $this->get('white_october_breadcrumbs');
        $breadcrumbs->addItem('Индустриальная недвижимость', $router->generate('index'));
        $breadcrumbs->addItem(($deal_type == 'sale' ? 'Продажа' : 'Аренда'));

        /*if($this->container->getParameter('kernel.environment') == "dev"){
            var_dump($request->get("region"));
        }*/

        $pagination = $this->container->get('pagination');
        $pagination_param = $pagination->paginate(
            str_replace("page","",$request->get("_route")).'page',
            $total,
            $request->get('pages', $request->get('pages', 1)), 	//page number
            RANGE, 												//items per page
            10,													//navigation links on page
            array_merge($request->query->all(), $request->attributes->get("_route_params")),
            'pages'
        );
        return $this->render('DefaultBundle:Default:catalog.html.twig', array(
            'h1'=> "",
            'title'=> "",
            'lots'=> $lots,
            'filters' => $filters["res"],
            'total' => $total,
            'pagination'  => $pagination_param

        ));
    }

    public function searchAction(Request $request){
        $res = $this->get('helpers')->api("/get/list/", $request);
        if($this->container->getParameter('kernel.environment') == "dev"){
            dump($res['res']);
        }
        $total = 0;
        $lots = [];
        if($res['res']){
            $total = $res['res']->amount;
            $lots = $res['res']->offers;
        }


        $pagination = $this->container->get('pagination');
        $pagination_param = $pagination->paginate(
            'catalogpage',
            $total,
            $request->get('pages', $request->get('pages', 1)), 	//page number
            RANGE, 												//items per page
            10,													//navigation links on page
            array_merge($request->query->all(), $request->attributes->get("_route_params")),
            'pages'
        );

        /* if($this->container->getParameter('kernel.environment') == "dev"){
         var_dump($lots->getQuery()->getSQL());die;
        } */

        $json = array(
            'count' => $total,
            'content' => $this->renderView('DefaultBundle:Default:list_'.$request->get("deal_type").'.html.twig', array(
                'lots'=> $lots
            )),
            'pagination' => $this->renderView('DefaultBundle:Default:pagination.html.twig', array(
                'pagination'=> $pagination_param,
                'total' => $total,
            )),
        );

        return new Response(json_encode($json));
    }

    public function bigsearchAction(Request $request) {
        $res = $this->get('helpers')->api("/get/search/", $request);
        if($this->container->getParameter('kernel.environment') == "dev"){
            dump($res);
        }
        $total = 0;
        $lots = [];
        if ($res['res']) {
            $total = $res['res']->amount;
            $lots = $res['res']->offers;
        }

        $pagination = $this->container->get('pagination');
        $pagination_param = $pagination->paginate(
            'catalogpage',
            $total,
            $request->get('pages', $request->get('pages', 1)), 	//page number
            RANGE, 												//items per page
            10,													//navigation links on page
            array_merge($request->query->all(), $request->attributes->get("_route_params")),
            'pages'
        );

        $json = array(
            'count' => $total,
            'content' => $this->renderView('DefaultBundle:Default:list_'.$request->get("deal_type").'.html.twig', array(
                'lots'=> $lots
            )),
            'pagination' => $this->renderView('DefaultBundle:Default:pagination.html.twig', array(
                'pagination'=> $pagination_param,
                'total' => $total,
            )),
        );
        return new Response(json_encode($json));
    }

	public function lotAction(Request $request): ?Response
	{
		$this->get('helpers')->setParam($request);

		if ($request->get("blockid")) {
			$response = $this->get('helpers')->api("/get/index/?id={$request->get('blockid')}&type_id=1");
		} else {
			$response = $this->get('helpers')->api("/get/index/?id={$request->get('id')}&type_id=2");
		}

		$lot = $response['res'];

		if (is_null($lot)) {
			throw $this->createNotFoundException("Упс, 404");
		}

		$router = $this->get('router');

		$breadcrumbs = $this->get('white_october_breadcrumbs');
		$breadcrumbs->addItem('Индустриальная недвижимость', $router->generate('index'));

		$this->get('helpers')->getLotBreadcrumbs($lot, $breadcrumbs, $request->get('deal_type'), $router);

		$blocks = [];

		if (!empty($lot->blocks) && count($lot->blocks) > 0) {
			$this->get('helpers')->param = ['offers_id' => $lot->blocks];

			$response = $this->get('helpers')->api("/get/list/");

			$blocks = $response['res'];

			$breadcrumbs->addItem("ID_" . $request->get('id'));
		}

		$title       = $this->get('helpers')->generateLotTitle($lot, $request->get('deal_type'));
		$description = $this->get('helpers')->generateLotDescription($lot, $request->get('deal_type'));

		return $this->render('DefaultBundle:Default:lot.html.twig', [
			'h1'          => $description,
			'title'       => $title,
			'description' => $description,
			'lot'         => $lot,
			'blocks'      => $blocks
		]);
	}

    public function sendpdfAction(Request $request, $id){
        $server_name = $request->server->get('HTTP_HOST');
        $name = $request->get('name');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $comment = $request->get('comments');

        $body = "Вам отправили печатную форму лота с сайта " . $server_name . PHP_EOL;
        if(!empty($name)){
            $body .= "От: " . $name . PHP_EOL;
        }
        if(!empty($phone)){
            $body .= "Телефон: " . $phone . PHP_EOL;
        }
        if(!empty($comment)){
            $body .= "Комментарий: " . $comment . PHP_EOL;
        }
        $content = file_get_contents("http://imgo.realtor.ru/industry-{$id}.pdf");
        header('Content-type: application/pdf');
        file_put_contents($request->server->get('DOCUMENT_ROOT')."/../vendor/mpdf/mpdf/tmp/present.pdf", $content);
        $file = $request->server->get('DOCUMENT_ROOT')."/../vendor/mpdf/mpdf/tmp/present.pdf";

        $attachment = \Swift_Attachment::fromPath($file, 'application/pdf');

        $message = \Swift_Message::newInstance()
            ->setSubject('Печатная форма лота с сайта ' . $server_name)
            ->attach($attachment)
            ->setFrom('sklad@realtor.ru')
            ->setTo($email)
            //->setTo(array("d.i.frolov@yandex.ru"))
            ->setBody($body);

        $this->get('mailer')->send($message);
        return new Response(json_encode(array("success"=>1)));
    }
}
