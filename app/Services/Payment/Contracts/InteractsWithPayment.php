<?php

namespace App\Services\Payment\Contracts;

use App\Services\Payment\Data\PaymentData;
use App\Services\Payment\Data\TransactionStatusData;

interface InteractsWithPayment
{
    public function generateTransaction(PaymentData $paymentData): array;

    public function initiateTransaction(PaymentData $paymentData): array;

    public function verifyTransaction(string $transaction_reference): TransactionStatusData;
}
