<?php

namespace App\Models\Helper;

use Carbon\Carbon;

trait Helper
{
    /**
     * Generates openssl supported random 32 character id
     *
     * @param integer $len Length of the output string
     * @return string
     */
    public static function generateId($len = 32)
    {
        return bin2hex(openssl_random_pseudo_bytes($len / 2));
    }

    /**
     * @param $data
     * @return bool
     */
    public static function isNull($data = null)
    {
        return $data === null || $data === '';
    }

    /**
     * @return string
     */
    public static function getAppUrl()
    {
        return env('APP_URL');
    }

    /**
     * @param $userName
     * @return string
     */
    public static function getUserLink($userName)
    {
        return self::getAppUrl() . "user/$userName";
    }

    /**
     * @param $postUrl
     * @return string
     */
    public static function getPostLink($postUrl)
    {
        return self::getAppUrl() . $postUrl;
    }

    /**
     * @param $date
     * @return bool|string
     */
    public static function isTodayControl($date)
    {
        $date = self::parseCarbon($date);

        if (Carbon::now()->isToday() === $date->isToday()) {
            return __('messages.new');
        }

        return false;
    }

    /**
     * @param $date
     * @return Carbon
     */
    public static function parseCarbon($date)
    {
        if (!$date instanceof Carbon) {
            return Carbon::parse($date);
        }

        return $date;
    }
}