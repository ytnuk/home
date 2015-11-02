<?php
namespace Ytnuk\Home;

use Kdyby;
use Nette;
use Ytnuk;

final class Extension
	extends Nette\DI\CompilerExtension
	implements Kdyby\Translation\DI\ITranslationProvider
{

	public function getTranslationResources() : array
	{
		return [
			__DIR__ . '/../../locale',
		];
	}
}
