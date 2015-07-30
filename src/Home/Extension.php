<?php
namespace Ytnuk\Home;

use Kdyby;
use Nette;
use Ytnuk;

/**
 * Class Extension
 *
 * @package Ytnuk\Home
 */
final class Extension
	extends Nette\DI\CompilerExtension
	implements Ytnuk\Config\Provider
{

	/**
	 * @inheritdoc
	 */
	public function getConfigResources()
	{
		return [
			Kdyby\Translation\DI\TranslationExtension::class => [
				'dirs' => [
					__DIR__ . '/../../locale',
				],
			],
		];
	}
}
