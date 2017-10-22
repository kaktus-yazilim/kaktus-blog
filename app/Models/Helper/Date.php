<?php

namespace App\Models\Helper;


class Date
{
    use Helper;

    const ATOM_DATE_FORMAT = 'Y-m-d\TH:i:sP';
    const ATOM_DATE_FORMAT_WITHOUT_TIMEZONE = 'Y-m-d\TH:i:s';
    const DATE_BASIC_FULL = 'Y-m-d H:i:s';
    const DATE_BASIC = 'Y-m-d';
    const ATOM = '%A %d %B %Y';

    /**
     * @param $date
     * @return \Carbon\Carbon|static
     */
    public static function init($date)
    {
        $date = self::parseCarbon($date);
        setlocale(LC_TIME,'tr_TR.UTF-8');
        return $date;
    }

    /**
     * @param $date
     * @param $format
     * @return string
     */
    public static function dateParseLocalized($date, $format)
    {
        $date = self::init($date);
        return $date->formatLocalized($format);
    }

    /**
     * @param $date
     * @param $format
     * @return string
     */
    public static function dateParse($date, $format)
    {
        $date = self::init($date);
        return $date->format($format);
    }
}