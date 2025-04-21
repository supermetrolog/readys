<?php

namespace DefaultBundle\Service;

class ExclusiveTemplateResolver
{
	private $templates = [
		'default'   => [
			'template' => 'default.html.twig',
			'meta'     => [
				'title'       => 'Эксклюзив | RAYSARMA',
				'description' => 'Описание эксклюзива'
			]
		],
		'lytkarino' => [
			'template' => 'lytkarino.html.twig',
			'meta'     => [
				'title'       => 'Лыткарино - индустриальный парк | RAYSARMA',
				'description' => 'Индустриальный парк Лыткарино в Москве - производственно-складской комплекс класса А+. Качество, безопасность, хорошая локация'
			]
		],
	];

	/**
	 * @param array $template
	 *
	 * @return array
	 */
	private function generateTemplateData($template)
	{
		return [
			'path' => "DefaultBundle:Exclusive:{$template['template']}",
			'meta' => $template['meta']
		];
	}

	/**
	 * @param string $name
	 *
	 * @return array
	 */
	public function resolveTemplate($name)
	{
		$template = isset($this->templates[$name]) ? $this->templates[$name] : $this->templates['default'];

		return $this->generateTemplateData($template);
	}
}