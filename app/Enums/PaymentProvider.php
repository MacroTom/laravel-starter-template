<?php

namespace App\Enums;

enum PaymentProvider: string
{
    case Paystack = 'paystack';
    case Flutterwave = 'flutterwave';
}
