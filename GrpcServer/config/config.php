<?php

declare(strict_types=1);

return [
    'configs'    => [
    ],
    'beans'    => [
        'HttpDispatcher'    => [
            'middlewares'    => [
                \Imi\Server\Http\Middleware\RouteMiddleware::class,
            ],
        ],
        'ActionWrapMiddleware'  => [
            'actionMiddleware'  => 'GrpcActionMiddleware',
        ],
    ],
];
