<?php

namespace WebEdit\Home;

use Kdyby\Translation;
use Nette\Bridges;
use Nette\DI;
use WebEdit\Config;

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
		'mask' => '[<locale [a-z]{2}_[A-Z]{2}?>/]<module>[/<action>][/<id [0-9]+>]',
		'metadata' => [
			'module' => 'Home',
			'presenter' => 'Presenter',
			'action' => 'view',
			'locale' => 'en_US',
		],
	];

	/**
	 * @return array
	 */
	public function getConfigResources()
	{
		$config = $this->getConfig($this->defaults);
		$config['metadata']['web'] = $this->name;

		return [
			Bridges\ApplicationDI\ApplicationExtension::class => [
				'mapping' => [
					'*' => ucfirst($this->name) . '\*\*'
				]
			],
			Bridges\ApplicationDI\RoutingExtension::class => [
				'routes' => [
					$config['mask'] => $config['metadata']
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
