<?php

namespace WebEdit\Home;

use Kdyby\Translation;
use Nette\DI;
use WebEdit\Config;
use WebEdit\Routing;

/**
 * Class Extension
 *
 * @package WebEdit\Home
 */
final class Extension extends DI\CompilerExtension implements Config\Provider
{

	/**
	 * @var array
	 */
	private $defaults = [
		'locale' => 'en'
	];

	/**
	 * @return array
	 */
	public function getConfigResources()
	{
		return [
			Routing\Extension::class => [
				'routes' => [
					'[<locale [a-z]{2}(_[A-Z]{2})?>/]<module>[/<action>][/<id [0-9]+>]' => [
						'module' => 'Home:Front',
						'presenter' => 'Presenter',
						'action' => 'view',
						'locale' => $this->defaults['locale']
					]
				]
			],
			Translation\DI\TranslationExtension::class => [
				'dirs' => [
					__DIR__ . '/../../locale'
				]
			]
		];
	}
}
