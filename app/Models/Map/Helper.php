<?php

namespace App\Models\Map;

use Mockery\Exception;

class Helper
{
    public static function mapList($list)
    {
        $mapList = [];
        foreach ($list as $item) {
            $mapList[] = self::mapSingle($item);
        }

        return $mapList;
    }

    public static function mapSingle($item)
    {
        if (class_exists('\App\Models\Map' . str_after(get_class($item), 'DB'))) {
            return ('\App\Models\Map' . str_after(get_class($item), 'DB'))::map($item);
        }

        throw new Exception('Sınıfı olmayan bir data gönderildi.');
    }
}