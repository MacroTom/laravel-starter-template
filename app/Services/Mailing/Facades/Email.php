<?php

namespace App\Services\Mailing\Facades;

use App\Services\Mailing\Data\EmailMessageData;
use App\Services\Mailing\MailManager;
use Illuminate\Support\Facades\Facade;

/**
 * @method static void send(EmailMessageData $data) sends an email.
 * @method static mixed driver(string $driver = null) Returns the driver instance.
 */
class Email extends Facade
{
    protected static function getFacadeAccessor()
    {
        return MailManager::class;
    }
}
