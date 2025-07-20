<?php

namespace App\Services\Mailing\Data;

use Spatie\LaravelData\Data;

class EmailMessageData extends Data
{
    public function __construct(
        public string $subject = '',
        public string $to = '',
        public string $message = '',
    ) {}
}
