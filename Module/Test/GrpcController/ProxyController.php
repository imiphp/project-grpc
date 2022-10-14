<?php

declare(strict_types=1);

namespace ImiApp\Module\Test\GrpcController;

use Imi\Aop\Annotation\Inject;
use Imi\Controller\HttpController;
use Imi\Grpc\Proxy\Http\GrpcHttpProxy;
use Imi\Server\Http\Route\Annotation\Action;
use Imi\Server\Http\Route\Annotation\Controller;
use Imi\Server\Http\Route\Annotation\Route;

/**
 * http 代理 gRPC 的控制器.
 *
 * @Controller("/proxy/")
 */
class ProxyController extends HttpController
{
    /**
     * @Inject("GrpcHttpProxy")
     */
    protected GrpcHttpProxy $grpcHttpProxy;

    /**
     * @Action
     * @Route("grpc/{service}/{method}")
     *
     * @return mixed
     */
    public function proxy(string $service, string $method)
    {
        return $this->grpcHttpProxy->proxy('grpc', $this->request, $this->response, $service, $method);
    }
}
