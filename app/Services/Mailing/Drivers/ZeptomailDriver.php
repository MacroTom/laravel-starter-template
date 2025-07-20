<?php

namespace App\Services\Mailing\Drivers;

use App\Http\Integrations\Zeptomail\Requests\SendMailRequest;
use App\Http\Integrations\Zeptomail\ZeptomailConnector;
use App\Services\Mailing\Data\EmailMessageData;
use Illuminate\Support\Facades\Log;

class ZeptomailDriver
{
    public function send(EmailMessageData $data): void
    {
        $response = (new ZeptomailConnector)->send(new SendMailRequest($data));

        Log::debug('Zeptomail send response', $response->json());
    }
}
