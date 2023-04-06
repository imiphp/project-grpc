<?php

declare(strict_types=1);

use Imi\App;
use Imi\AppContexts;
use function Imi\env;
use Imi\Grpc\Client\GrpcClient;

return [
    // 配置文件
    'configs'    => [
        'beans'        => __DIR__ . '/beans.php',
    ],

    'ignoreNamespace'   => [
    ],

    'ignorePaths' => [
    ],

    // Swoole 主服务器配置
    'mainServer' => [
        'namespace' => 'ImiApp\GrpcServer',
        'type'      => 'GrpcServer',
        'host'      => '127.0.0.1',
        'port'      => 8080,
        'configs'   => [
            'worker_num'      => env('SERVER_WORKER_NUM', 8080),
            'task_worker_num' => env('SERVER_TASK_WORKER_NUM', 8080),
        ],
    ],

    // Swoole 子服务器（端口监听）配置
    'subServers' => [
        // 'SubServerName'   =>  [
        //     'namespace'    =>    'ImiApp\XXXServer',
        //     'type'        =>    Imi\Server\Type::HTTP,
        //     'host'        =>    '0.0.0.0',
        //     'port'        =>    13005,
        // ]
    ],

    // 连接池配置
    'pools'    => [
        // 主数据库
        'maindb'    => [
            'pool'    => [
                'class'        => \Imi\Swoole\Db\Pool\CoroutineDbPool::class,
                'config'       => [
                    'maxResources'              => 32,
                    'minResources'              => 0,
                    'checkStateWhenGetResource' => false,
                    'heartbeatInterval'         => 60,
                ],
            ],
            'resource'    => [
                'host'        => env('MYSQL_HOST', '127.0.0.1'),
                'port'        => env('MYSQL_PORT', 3306),
                'username'    => env('MYSQL_USERNAME', 'root'),
                'password'    => env('MYSQL_PASSWORD', 'root'),
                'database'    => env('MYSQL_DATABASE', 'mysql'),
                'charset'     => 'utf8mb4',
            ],
        ],
        'redis'    => [
            'pool'    => [
                'class'        => \Imi\Swoole\Redis\Pool\CoroutineRedisPool::class,
                'config'       => [
                    'maxResources'              => 32,
                    'minResources'              => 0,
                    'checkStateWhenGetResource' => false,
                    'heartbeatInterval'         => 60,
                ],
            ],
            'resource'    => [
                'host'      => env('REDIS_HOST', '127.0.0.1'),
                'port'      => env('REDIS_PORT', 6379),
                'password'  => env('REDIS_PASSWORD'),
            ],
        ],
        'grpc'  => [
            'pool'    => [
                'class'        => \Imi\Rpc\Client\Pool\RpcClientCoroutinePool::class,
                'config'       => [
                    'maxResources'              => 32,
                    'minResources'              => 0,
                    'checkStateWhenGetResource' => false,
                    'heartbeatInterval'         => 60,
                ],
            ],
            'resource'    => [
                'url'           => env('GRPC_URL', 'http://127.0.0.1:8080/{package}.{service}/{name}'),
                'clientClass'   => GrpcClient::class,
                'timeout'       => 30,
            ],
        ],
    ],

    // 数据库配置
    'db'    => [
        // 数默认连接池名
        'defaultPool'    => 'maindb',
    ],

    // redis 配置
    'redis' => [
        // 数默认连接池名
        'defaultPool'   => 'redis',
    ],

    // 日志配置
    'logger' => [
        'channels' => [
            'imi' => [
                'handlers' => [
                    [
                        'env'       => ['cli', 'swoole', 'workerman'],
                        'class'     => \Imi\Log\Handler\ConsoleHandler::class,
                        'construct' => [
                            'level'  => \Imi\Log\MonoLogger::DEBUG, // 开发调试环境
                            // 'level'  => \Imi\Log\MonoLogger::INFO,  // 生产环境
                        ],
                        'formatter' => [
                            'class'     => \Imi\Log\Formatter\ConsoleLineFormatter::class,
                            'construct' => [
                                'format'                     => null,
                                'dateFormat'                 => 'Y-m-d H:i:s',
                                'allowInlineLineBreaks'      => true,
                                'ignoreEmptyContextAndExtra' => true,
                            ],
                        ],
                    ],
                    [
                        'class'     => \Monolog\Handler\RotatingFileHandler::class,
                        'construct' => [
                            'level'  => \Imi\Log\MonoLogger::DEBUG, // 开发调试环境
                            // 'level'  => \Imi\Log\MonoLogger::INFO,  // 生产环境
                            'filename' => App::get(AppContexts::APP_PATH_PHYSICS) . '/.runtime/logs/log.log',
                        ],
                        'formatter' => [
                            'class'     => \Monolog\Formatter\LineFormatter::class,
                            'construct' => [
                                'dateFormat'                 => 'Y-m-d H:i:s',
                                'allowInlineLineBreaks'      => true,
                                'ignoreEmptyContextAndExtra' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
