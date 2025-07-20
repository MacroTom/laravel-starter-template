<?php

namespace App\Services\Payment\Actions;

use App\Enums\Currency;
use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Models\Transaction;
use App\Services\Payment\Data\TransactionStatusData;
use App\Services\Payment\Facades\PaymentService;

class VerifyTransaction
{
    public function __construct(
        protected ValidateTransaction $validateTransaction,
    ) {}

    public function execute(string $reference): Transaction
    {
        $transaction = $this->validateTransaction->execute($reference);

        if (! is_null($transaction)) {
            return $transaction;
        }

        $statusData = PaymentService::verifyTransaction($reference);

        return $this->createTransaction($statusData);
    }

    protected function createTransaction(TransactionStatusData $data): Transaction
    {
        $type = TransactionType::from(data_get($data->meta, 'transaction_type'));

        $transaction = new Transaction([
            'type' => $type,
            'reference' => $data->reference,
            'payment_provider' => config('services.default_payment_provider'),
            'amount' => $data->amount,
            'status' => TransactionStatus::Pending,
            'currency' => Currency::fromCode($data->currency),
            'payload' => $data->toArray(),
            'comment' => $type->comment(),
            'channel' => $data->channel,
            'mode' => $data->mode,
            'ext_reference' => $data->ext_reference,
        ]);

        $transaction->save();

        return $transaction;
    }
}
