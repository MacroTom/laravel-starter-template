<?php

namespace App\Http\Integrations\Zeptomail;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

class ZeptomailConnector extends Connector
{
    use AcceptsJson;

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return 'https://api.zeptomail.com/v1.1';
    }

    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Authorization' => config('services.zeptomail.token'),
        ];
    }

    /**
     * Default HTTP client options
     */
    protected function defaultConfig(): array
    {
        return [];
    }
}
