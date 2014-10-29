<?php

namespace WebEdit\Home;

use WebEdit\Module;
use WebEdit\Routing;
use WebEdit\Translation;

/**
 * Class Extension
 *
 * @package WebEdit\Home
 */
final class Extension extends Module\Extension implements Routing\Provider, Translation\Provider
{

	/**
	 * @return array
	 */
	public function getResources()
	{
		return ['locale' => 'en',];
	}

	/**
	 * @return array
	 */
	public function getRoutingResources()
	{
		return ['routes' => ['[<locale [a-z]{2}(_[A-Z]{2})?>/]<module>[/<action>][/<id [0-9]+>]' => ['module' => 'Home:Front', 'presenter' => 'Presenter', 'action' => 'view', 'locale' => $this['locale']]]];
	}
}
