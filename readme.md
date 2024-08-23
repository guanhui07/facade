## 安装
`composer require guanhui07/facade`

## 用法
```php
$container = Container::instance();
FacadeFactory::setContainer($container);
```


## 创建和使用外观
Facade 应该是 AbstractFacade 的一个实例，并且应该提供一个访问器。

访问者是服务标识符。它将用于获取容器中的服务.

```php
class TestFacade extends AbstractFacade
{

    protected static function accessor()
    {
        return TestService::class;
    }
}
```


## 调用服务实例
```php
$service = TestFacade::instance();
```

### 调用服务方法
```php
TestFacade::someMethod();
```


或者
```php
$service = TestFacade::instance();
$service->someMethod();
```

## 我的其他包：
https://github.com/guanhui07/dcr  借鉴Laravel实现的 PHP Framework ，FPM模式、websocket使用的workerman、支持容器、PHP8特性attributes实现了路由注解、中间件注解、Laravel Orm等特性

https://github.com/guanhui07/redis Swoole模式下 Redis连接池

https://github.com/guanhui07/facade  facade、门面 fpm模式下可使用

https://github.com/guanhui07/dcr-swoole-crontab 基于swoole实现的crontab秒级定时任务

https://github.com/guanhui07/database  基于 illuminate/database 做的连接池用于适配Swoole的协程环境

https://github.com/guanhui07/dcr-swoole  高性能PHP Framework ，Cli模式，基于Swoole实现，常驻内存，协程框架，支持容器、切面、PHP8特性attributes实现了路由注解、中间件注解、支持Laravel Orm等特性

https://github.com/guanhui07/open-ai  open-ai  chatgpt调用


