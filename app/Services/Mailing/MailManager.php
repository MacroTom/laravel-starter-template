<?php

namespace App\Services\Mailing;

use App\Services\Mailing\Drivers\ZeptomailDriver;
use Illuminate\Support\Manager;

class MailManager extends Manager
{
    /**
     * Get the default driver name.
     */
    public function getDefaultDriver(): string
    {
        return 'zeptomail';
    }

    public function createZeptomailDriver()
    {
        return new ZeptomailDriver;
    }
}
