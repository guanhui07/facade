<?php


namespace Guanhui07\Facade;


use Exception;

abstract class AbstractFacade
{
    /**
     * Call from attached instance
     * @param $name
     * @param array $arguments
     * @return mixed
     * @throws Exception
     */
    public static function __callStatic($name, array $arguments = [])
    {
        return FacadeFactory::create(static::accessor(), $name, $arguments);
    }

    /**
     * Get attached instance
     * @return mixed
     * @throws Exception
     */
    public static function instance()
    {
        return FacadeFactory::getContainer()->get(static::accessor());
    }

    /**
     * Accessor name
     * @return string
     * @throws Exception
     */
    protected static function accessor(){
        throw new Exception(sprintf('Unknow accessor in %s', static::class));
        return '';
    }

}