<?php

namespace App\Hps;

abstract class Base
{
    public static $instances = [];
    public static $storage = [];

    public static function &getInstance()
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }
        return self::$instances[$cls];
    }

    public static function set($k, $v){
        self::$storage[$k] = $v;
    }

    public function get($k, $def = null){
        return self::$storage[$k] ?? $def;
    }

    static function groupBy($key, $data): array
    {
        $result = array();

        foreach ($data as $val) {
            if (array_key_exists($key, $val)) {
                $result[$val[$key]][] = $val;
            } else {
                $result[""][] = $val;
            }
        }

        return $result;
    }

    static function keyBy($key, $data): array
    {
        $result = array();

        foreach ($data as $val) {
            if (array_key_exists($key, $val)) {
                $result[$val[$key]] = $val;
            } else {
                $result[""] = $val;
            }
        }

        return $result;
    }
}
