<?php

namespace App\Services\Payment\Facades;

use App\Services\Payment\PaymentManager;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array generateTransaction(\App\Services\Payment\Data\PaymentData $paymentData) Generates payload for popup.
 * @method static array initiateTransaction(\App\Services\Payment\Data\PaymentData $paymentData) Initiates the transaction.
 * @method static \App\Services\Payment\Data\TransactionStatusData verifyTransaction(string $transaction_reference) Fetches the transaction from the provider.
 * @method static mixed driver($driver = null) Get a driver instance.
 */
class PaymentService extends Facade
{
    protected static $cached = false;

    protected static function getFacadeAccessor()
    {
        return PaymentManager::class;
    }
}
