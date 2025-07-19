<?php

namespace App\Services\Payment\Webhooks\Paystack;

use Illuminate\Http\Request;
use InvalidArgumentException;
use Spatie\WebhookClient\SignatureValidator\SignatureValidator as SpatieSignatureValidator;
use Spatie\WebhookClient\WebhookConfig;

class SignatureValidator implements SpatieSignatureValidator
{
    public function isValid(Request $request, WebhookConfig $config): bool
    {
        $signature = $request->header($config->signatureHeaderName);

        if (empty($signature)) {
            throw new InvalidArgumentException('Header signature not set!');
        }

        $secret_hash = $config->signingSecret;

        if (empty($secret_hash)) {
            throw new InvalidArgumentException('Signing secret not set!');
        }

        $computedSignature = hash_hmac('sha512', $request->getContent(), $secret_hash);

        return hash_equals($signature, $computedSignature);

    }
}
