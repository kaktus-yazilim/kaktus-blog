<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;
use App\Models\Helper;
use App\Models\Entity;
use App\Models\DB;
use App\Models\Map;

class LoginUser extends Notification
{
    use Queueable;

    protected $user;

    /**
     * LoginUser constructor.
     * @param DB\User $user
     */
    public function __construct(\App\Models\DB\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }


    /**
     * @param $notifiable
     * @return $this
     */
    public function toSlack($notifiable)
    {
        if ($this->user instanceof DB\User) {
            $this->user = Map\User::map($this->user);
            $url = url('/user/' . $this->user->getUserName());

            if ($this->user instanceof Entity\User) {
                return (new SlackMessage)
                    ->from(Helper\Slack::SLACK_NOTIFICATION_DEFAULT_USER, Helper\Slack::SLACK_NOTIFICATION_DEFAULT_USER_ICON)
                    ->to(Helper\Slack::SLACK_CHANNEL_LOGIN_USER)
                    ->success()
                    ->attachment(function ($attachment) use ($url) {
                        $attachment->title('A new user logged in: ' . $this->user->getUserName(), $url)
                            ->fields([
                                'Name' => $this->user->getFullName(),
                                'E-mail' => $this->user->getEmail()
                            ]);
                    });

            }
        }
    }
}
