<?php

namespace App\Http\Integrations\Zeptomail\Requests;

use App\Services\Mailing\Data\EmailMessageData;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Traits\Plugins\AcceptsJson;

class SendMailRequest extends Request implements HasBody
{
    use AcceptsJson;
    use HasJsonBody;

    public function __construct(
        protected EmailMessageData $data,
    ) {}

    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/email';
    }

    /**
     * Default body
     *
     * @return array<string, mixed>
     */
    protected function defaultBody(): array
    {
        return [
            'from' => [
                'address' => config('mail.from.address'),
                'name' => config('app.name'),
            ],
            'to' => [
                [
                    'email_address' => [
                        'address' => $this->data->to,
                    ],
                ],
            ],
            'subject' => $this->data->subject,
            'htmlbody' => $this->data->message,
        ];
    }
}
