<?php

namespace Ytnuk\Home;

use Nette;
use Ytnuk;
use Kdyby;

/**
 * Class Extension
 *
 * @package Ytnuk\Home
 */
final class Extension extends Nette\DI\CompilerExtension implements Ytnuk\Config\Provider
{

	/**
	 * @inheritdoc
	 */
	public function getConfigResources()
	{
		return [
			Kdyby\Translation\DI\TranslationExtension::class => [
				'dirs' => [
					__DIR__ . '/../../locale'
				]
			]
		];
	}
}
