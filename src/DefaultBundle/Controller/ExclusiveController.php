<?php

namespace DefaultBundle\Controller;

use DefaultBundle\Service\ExclusiveTemplateResolver;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ExclusiveController extends Controller
{
	public function indexAction(Request $request)
	{
		/** @var ExclusiveTemplateResolver $templateResolver */
		$templateResolver = $this->container->get('exclusive_template_resolver');

		$templateName = $request->get('name');

		$template = $templateResolver->resolveTemplate($templateName);

		return $this->render($template['path'], $template['data']);
	}
}
