<?php

namespace DefaultBundle\Service;

class ExclusiveTemplateResolver
{
	private $jsonDataDirectory = __DIR__ . '/../Resources/views/Exclusive/Templates/';

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
				'title'       => 'Лыткарино - Индустриальный парк | RAYSARMA',
				'description' => 'Индустриальный парк Лыткарино в Москве - производственно-складской комплекс класса А+. Качество, безопасность, хорошая локация'
			],
			'data'     => 'lytkarino.json'
		],
	];

	/**
	 * @param array $template
	 *
	 * @return array
	 */
	private function generateTemplateData($template)
	{
		$data = [];

		if (isset($template['data'])) {
			$fileSrc = $this->jsonDataDirectory . $template['data'];

			if (file_exists($fileSrc)) {
				$content = file_get_contents($fileSrc);
				$data    = json_decode($content, true);
			}
		}

		return [
			'path' => "DefaultBundle:Exclusive:{$template['template']}",
			'data' => array_merge($template['meta'], ['data' => $data])
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