<?php

namespace WebEdit\Home;

use WebEdit\Module;
use WebEdit\Routing;
use WebEdit\Translation;

final class Extension extends Module\Extension implements Routing\Provider, Translation\Provider
{

	public function getResources()
	{
		return [
			'locale' => 'en',
		];
	}

	public function getRoutingResources()
	{
		return [
			'routes' => [
				'[<locale [a-z]{2}(_[A-Z]{2})?>/]<module>[/<action>][/<id [0-9]+>]' => [
					'module' => 'Home:Front',
					'presenter' => 'Presenter',
					'action' => 'view',
					'locale' => $this['locale']
				]
			]
		];
	}

}
