

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

或者
```php
forward_static_call([TestFacade::class, 'someMethod']);
```

或者
```php
call_user_func(sprintf('%s::%s', TestFacade::class, 'someMethod'));
```