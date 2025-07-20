<?php

namespace App\Services\Payment\Drivers;

use App\Enums\PaymentProvider;
use App\Exceptions\TransactionException;
use App\Http\Integrations\Paystack\PaystackConnector;
use App\Http\Integrations\Paystack\Requests\InitializePaymentRequest;
use App\Http\Integrations\Paystack\Requests\VerifyTransactionRequest;
use App\Services\Payment\Contracts\InteractsWithPayment;
use App\Services\Payment\Data\PaymentData;
use App\Services\Payment\Data\TransactionStatusData;

class PaystackDriver implements InteractsWithPayment
{
    protected PaystackConnector $connector;

    public function __construct()
    {
        $this->connector = new PaystackConnector;
    }

    public function generateTransaction(PaymentData $paymentData): array
    {
        return [
            'currency' => $paymentData->currency,
            'reference' => $paymentData->reference,
            'key' => config('services.paystack.public_key'),
            'email' => $paymentData->email,
            'amount' => floatval(floatval($paymentData->amount) * 100), // amount in subunit
            'redirect_url' => $paymentData->redirect_url,
            'metadata' => $paymentData->meta,
        ];
    }

    /**
     * @throws TransactionException
     */
    public function initiateTransaction(PaymentData $paymentData): array
    {
        $request = new InitializePaymentRequest($paymentData);

        $response = $this->connector->send($request);

        if ($response->failed()) {
            throw TransactionException::InitiateTransactionFailed(
                $response->json(),
                PaymentProvider::Paystack->value
            );
        }

        return $response->json('data');
    }

    /**
     * @throws TransactionException
     */
    public function verifyTransaction(string $transaction_reference): TransactionStatusData
    {
        $request = new VerifyTransactionRequest($transaction_reference);

        $response = $this->connector->send($request);

        if ($response->failed()) {
            throw TransactionException::VerifyTransactionFailed(
                $response->json(),
                PaymentProvider::Paystack->value
            );
        }

        return $response->dto();
    }
}
