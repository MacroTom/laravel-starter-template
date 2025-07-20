<?php

namespace App\Exceptions;

class TransactionException extends CustomException
{
    public static function InitiateTransactionFailed(array $data, string $provider): self
    {
        return new self('Failed to initialise transaction.', $data, $provider);
    }

    public static function VerifyTransactionFailed(array $data, string $provider): self
    {
        return new self('Failed to verify transaction.', $data, $provider);
    }
}
