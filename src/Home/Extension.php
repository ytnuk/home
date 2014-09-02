<?php

namespace WebEdit\Home;

use WebEdit\Bootstrap;
use WebEdit\Routing;

final class Extension extends Bootstrap\Extension implements Routing\Provider {

    public function getRoutingResources() {
        return [
            'routes' => [
                '[<locale [a-z]{2}(_[A-Z]{2})?>/]<module [a-z.]+>[/<action [a-z]+>][/<id [0-9]+>]' => [
                    'module' => 'Home:Front',
                    'presenter' => 'Presenter',
                    'action' => 'view'
                ]
            ]
        ];
    }

}
