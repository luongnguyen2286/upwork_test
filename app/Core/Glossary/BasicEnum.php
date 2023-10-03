<?php

namespace App\Core\Glossary;

use ReflectionClass;
use ReflectionException;

abstract class BasicEnum
{
    private static $constCacheArray = NULL;

    protected static function getConstants()
    {
        if (self::$constCacheArray == NULL) {
            self::$constCacheArray = [];
        }
        $calledClass = get_called_class();
        if (!array_key_exists($calledClass, self::$constCacheArray)) {
            try {
                $reflect = new ReflectionClass($calledClass);
                self::$constCacheArray[$calledClass] = $reflect->getConstants();
            } catch (ReflectionException $e) {
                return $e;
            }
        }
        return self::$constCacheArray[$calledClass];
    }

    public static function getAll(): array
    {
        $oClass = new ReflectionClass(get_called_class());
        return $oClass->getConstants();
    }

    public static function getValuesByKey($key): array
    {
        $constants = self::getAll();
        return array_unique(array_column($constants, $key));
    }

    public static function getValues(): array
    {
        $constants = self::getAll();
        return array_values($constants);
    }
}
