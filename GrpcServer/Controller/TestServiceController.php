<?php

declare(strict_types=1);

namespace ImiApp\GrpcServer\Controller;

use Grpc\TestServiceInterface;
use Imi\Controller\HttpController;
use Imi\Server\Http\Route\Annotation\Action;
use Imi\Server\Http\Route\Annotation\Controller;
use Imi\Util\Http\Consts\RequestHeader;

/**
 * @Controller("/grpc.TestService/")
 */
class TestServiceController extends HttpController implements TestServiceInterface
{
    /**
     * Method <code>test</code>.
     *
     * @Action
     *
     * @return \Grpc\TestRequest
     */
    public function test(\Grpc\TestRequest $request)
    {
        // 返回自定义的 trailer，如无需要可以不写
        $this->response->setHeader(RequestHeader::TRAILER, 'grpc-status, grpc-message, test')
                       ->setHeader('test', 'value');

        // 这个接口是原样返回请求体，用于测试
        return $request;
    }
}
