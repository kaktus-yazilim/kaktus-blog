<?php

namespace App\Notifications;

use App\Models\DB;
use App\Models\Entity;
use App\Models\Map;
use App\Models\Helper;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class NewUser extends Notification
{
    protected $user;

    use Queueable;

    /**
     * NewUserNotification constructor.
     * @param \App\Models\DB\User $user
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

    public function toSlack($notifiable)
    {
        if ($this->user instanceof DB\User) {
            $this->user = Map\User::map($this->user);

            if ($this->user instanceof Entity\User) {
                $url = url('/user/' . $this->user->getUserName());

                return (new SlackMessage)
                    ->from(Helper\Slack::SLACK_NOTIFICATION_DEFAULT_USER, Helper\Slack::SLACK_NOTIFICATION_DEFAULT_USER_ICON)
                    ->to(Helper\Slack::SLACK_CHANNEL_NEW_USER)
                    ->success()
                    ->content('A new user register')
                    ->attachment(function ($attachment) use ($url) {
                        $attachment->title('User ' . $this->user->getUserName(), $url)
                            ->fields([
                                'User Name' => $this->user->getUserName(),
                                'E-mail' => $this->user->getEmail(),
                                'Created At' => Carbon::now()->format('Y-m-d H:i:s')
                            ]);
                    });
            }
        }
    }

}
