<?php

namespace App\Http\Integrations\Paystack\Requests;

use App\Services\Payment\Data\PaymentData;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Traits\Plugins\AcceptsJson;

class InitializePaymentRequest extends Request implements HasBody
{
    use AcceptsJson;
    use HasJsonBody;

    public function __construct(protected PaymentData $data) {}

    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/transaction/initialize';
    }

    public function defaultBody(): array
    {
        return [
            'reference' => $this->data->reference,
            'email' => $this->data->email,
            'amount' => floatval(floatval($this->data->amount) * 100), // amount in subunit
            'currency' => $this->data->currency,
            'callback_url' => $this->data->redirect_url,
            'metadata' => $this->data->meta,
        ];
    }
}
