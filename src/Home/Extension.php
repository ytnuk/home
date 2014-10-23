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
                    'module' => [
                        Routing\Route::VALUE => 'Home:Front',
                        Routing\Route::TRANSLATE => TRUE,
                    ],
                    'presenter' => 'Presenter',
                    'action' => [
                        Routing\Route::VALUE => 'view',
                        Routing\Route::TRANSLATE => TRUE,
                    ],
                ]
            ]
        ];
    }

}
