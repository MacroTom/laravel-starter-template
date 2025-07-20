<?php

namespace App\Services\Payment\Data;

use Illuminate\Support\Str;
use Spatie\LaravelData\Data;

class PaymentData extends Data
{
    public function __construct(

        public readonly string $reference,

        public readonly string $email,

        public readonly string $amount,

        public readonly string $currency,

        public readonly string $redirect_url = '',

        public readonly array $meta = [],

    ) {}

    public static function generate(string $email, string $amount, string $currency, string $redirect_url = '', array $meta = []): self
    {
        $reference = Str::random();

        return new self(
            $reference,
            $email,
            $amount,
            $currency,
            $redirect_url."?reference=$reference",
            $meta
        );
    }
}
