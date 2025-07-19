<?php

namespace App\Http\Integrations\Paystack\Requests;

use App\Enums\TransactionStatus;
use App\Services\Payment\Data\TransactionStatusData;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Plugins\AcceptsJson;

class VerifyTransactionRequest extends Request
{
    use AcceptsJson;

    public function __construct(protected string $tx_ref) {}

    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return "/transaction/verify/{$this->tx_ref}";
    }

    public function createDtoFromResponse(Response $response): TransactionStatusData
    {
        $data = $response->json('data');

        return new TransactionStatusData(
            email: data_get($data, 'customer.email'),
            reference: data_get($data, 'reference'),
            ext_reference: (string) data_get($data, 'id'),
            amount: (string) (floatval(data_get($data, 'amount')) / 100),
            currency: data_get($data, 'currency'),
            status: $this->computeStatus(data_get($data, 'status')),
            channel: data_get($data, 'channel'),
            mode: data_get($data, 'domain'),
            meta: data_get($data, 'metadata'),
        );
    }

    protected function computeStatus(string $status): TransactionStatus
    {
        return match ($status) {
            'success' => TransactionStatus::Completed,
            'failed' => TransactionStatus::Failed,
            'pending' => TransactionStatus::Pending,
            default => TransactionStatus::Pending
        };
    }
}
