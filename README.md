# 说明

imi 框架：<https://www.imiphp.com>

imi gRPC 项目骨架，内置了 HTTP 代理网关的实现 `GrpcServer/Controller/ProxyController.php`。

## 安装

创建项目：`composer create-project imiphp/project-grpc:~2.1.0`

## 启动命令

`vendor/bin/imi-swoole swoole/start`

## 测试代码

```shell
curl --location "http://127.0.0.1:8080/proxy/grpc/grpc.TestService/test" \
--header 'Content-Type: application/json' \
--data '{
    "int": 114514
}' \
-vvv
```

## 权限

`.runtime` 目录需要有可写权限

## Grpc Protobuf

修改 proto 文件后必须要重新生成。

Grpc 的 protobuf 生成：`cd grpc && protoc --php_out=./ grpc.proto`

protoc 下载和安装：<https://github.com/protocolbuffers/protobuf/releases>

## 格式化代码

使用 php-cs-fixer 代码格式化。

`./vendor/bin/php-cs-fixer fix`

使用支持 php-cs-fixer 的 IDE 或插件，也会自动格式化。

`.php-cs-fixer.php` 默认配置是 imi 的规范，仅供参考，如有需要可以自行定义。

## 代码静态检测

使用 phpstan 代码静态检测。

`./vendor/bin/phpstan analyse --memory-limit 1G`
