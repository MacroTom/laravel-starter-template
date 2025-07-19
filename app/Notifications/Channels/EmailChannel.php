<?php

namespace App\Notifications\Channels;

use App\Services\Mailing\Data\EmailMessageData;
use App\Services\Mailing\Facades\Email;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailChannel
{
    public function send(object $notifiable, Notification $notification)
    {
        /**
         * @var MailMessage $mailMessage
         */
        $mailMessage = call_user_func([$notification, 'toMail'], $notifiable);

        $messageData = new EmailMessageData(
            subject: $mailMessage->subject,
            message: $mailMessage->render(),
            to: $this->getRecipient($notifiable)
        );

        Email::send($messageData);
    }

    protected function getRecipient(object $notifiable)
    {
        if ($notifiable instanceof AnonymousNotifiable) {
            return $notifiable->routes[self::class];
        }

        return $notifiable->email;
    }
}
