<?php

namespace WebEdit\Home;

use WebEdit\Module;
use WebEdit\Routing;
use WebEdit\Translation;

final class Extension extends Module\Extension implements Routing\Provider, Translation\Provider
{

    public function getRoutingResources()
    {
        return [
            'routes' => [
                '[<locale [a-z]{2}(_[A-Z]{2})?>/]<module>[/<action>][/<id [0-9]+>]' => [
                    'locale' => [ //TODO: needs to be first
                        Routing\Route::TRANSLATE => TRUE,
                    ],
                    'module' => [
                        Routing\Route::VALUE => 'Home:Front',
                        Routing\Route::TRANSLATE => TRUE,
                    ],
                    'action' => [
                        Routing\Route::FILTER_OUT => NULL,
                        Routing\Route::FILTER_IN => NULL,
                    ],
                    'presenter' => 'Presenter',
                    NULL => [
                        Routing\Route::TRANSLATE => TRUE,
                    ],
                ]
            ]
        ];
    }

}
