<?php

namespace liesauer\GLib;

class Config
{
    protected static $configs = [];

    public static function get($index, $default = null)
    {
        return static::has($index) ? static::$configs[$index] : $default;
    }
    public static function set($index, $value)
    {
        static::$configs[$index] = $value;
    }
    public static function has($index)
    {
        return array_key_exists($index, static::$configs);
    }
}
