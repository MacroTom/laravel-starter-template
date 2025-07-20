<?php

namespace App\Services\Payment\Actions;

use App\Models\Transaction;

class ValidateTransaction
{
    public function execute(string $reference): ?Transaction
    {
        return Transaction::query()
            ->with(['user'])
            ->where('reference', $reference)
            ->first();
    }
}
