<?php

namespace App\Models\Helper;

class Slack
{
    const SLACK_NOTIFICATION_DEFAULT_USER = 'Kaktüs Blog';
    const SLACK_NOTIFICATION_DEFAULT_USER_ICON = ':cactus:';
    const SLACK_CHANNEL_NEW_USER = '#new_user';
    const SLACK_CHANNEL_LOGIN_USER = '#login_user';


    const NOTIFICATION_TYPE_NEW_USER = 'newUser';
    const NOTIFICATION_TYPE_LOGIN_USER = 'loginUser';

    const NOTIFICATIONS = [
        self::NOTIFICATION_TYPE_NEW_USER => '\App\Notifications\NewUser',
        self::NOTIFICATION_TYPE_LOGIN_USER => '\App\Notifications\LoginUser'
    ];


    public function __construct($data, $notification)
    {
        $model = $this->getNotification($notification);
        $data->notify(new $model($data));
    }

    public function getNotification($class)
    {
        return self::NOTIFICATIONS[$class];
    }
}