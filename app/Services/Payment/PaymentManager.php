<?php

namespace App\Services\Payment;

use App\Services\Payment\Contracts\InteractsWithPayment;
use App\Services\Payment\Drivers\PaystackDriver;
use Illuminate\Support\Manager;

class PaymentManager extends Manager
{
    public function createPaystackDriver(): InteractsWithPayment
    {
        return new PaystackDriver;
    }

    public function getDefaultDriver(): string
    {
        return config('services.default_payment_provider');
    }
}
