<?php namespace DivideBV\Postnl\ComplexTypes;

abstract class BaseType
{

    /**
     * Create a class instance statically without calling the constructor.
     *
     * @return object
     */
    public static function create()
    {
        $className = get_called_class();

        $object = unserialize(
            sprintf('O:%d:"%s":0:{}', strlen($className), $className)
        );

        return $object;
    }
}
