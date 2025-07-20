<?php

namespace App\Services\Payment\Data;

use App\Enums\TransactionStatus;
use Spatie\LaravelData\Data;

class TransactionStatusData extends Data
{
    public function __construct(

        public readonly string $reference,

        public readonly string $email,

        public readonly string $amount,

        public readonly string $currency,

        public readonly TransactionStatus $status,

        public readonly string $channel,

        public readonly ?string $mode = null,

        public readonly array $meta = [],

        public readonly ?string $ext_reference = null,
    ) {}
}
