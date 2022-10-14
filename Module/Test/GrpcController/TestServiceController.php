<?php

declare(strict_types=1);

namespace ImiApp\Module\Test\GrpcController;

use Grpc\TestServiceInterface;
use Imi\Aop\Annotation\Inject;
use Imi\Controller\HttpController;
use Imi\Server\Http\Route\Annotation\Action;
use Imi\Server\Http\Route\Annotation\Controller;
use Imi\Util\Http\Consts\RequestHeader;
use ImiApp\Module\Test\Service\TestService;

/**
 * @Controller("/grpc.TestService/")
 */
class TestServiceController extends HttpController implements TestServiceInterface
{
    /**
     * @Inject
     */
    protected TestService $testService;

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
                       ->setHeader('test', $this->testService->getImi());

        // 这个接口是原样返回请求体，用于测试
        return $request;
    }
}
