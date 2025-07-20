<?php

namespace App\Services\Payment\Actions;

use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Models\Transaction;

class ProcessTransaction
{
    public function execute(Transaction $transaction): Transaction
    {
        if ($transaction->finalStatus()) {
            return $transaction;
        }

        /** @var TransactionType $type */
        $type = $transaction->type;

        match ($type) {
            TransactionType::Example => $this->doNothing($transaction),
        };

        /* @phpstan-ignore-next-line */
        $transaction->status = TransactionStatus::Completed;
        $transaction->save();

        return $transaction->refresh();
    }

    protected function doNothing(Transaction $transaction): void {}
}
