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
        'HttpRoute' => [
            // 全局忽略 URL 路由大小写
            'ignoreCase'     => true,
        ],
    ],
];
