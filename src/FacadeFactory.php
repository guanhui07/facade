<?php

namespace Guanhui07\Facade;

class FacadeFactory
{
    protected static $container = null;

    public static function getContainer()
    {
        return self::$container;
    }

    /**
     * @param  $container
     */
    public static function setContainer($container)
    {
        self::$container = $container;
    }

    /**
     * Get provided accessor from container and call method
     * @param $accessor
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function create($accessor, $name, array $arguments = [])
    {
        $container = static::getContainer();
        $object = $container->get($accessor);

        return call_user_func_array([$object, $name], $arguments);
    }

}