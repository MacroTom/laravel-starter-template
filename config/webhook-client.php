<?php

return [
    'configs' => [
        [
            /*
             * This package supports multiple webhook receiving endpoints. If you only have
             * one endpoint receiving webhooks, you can use 'default'.
             */
            'name' => 'paystack',

            /*
             * We expect that every webhook call will be signed using a secret. This secret
             * is used to verify that the payload has not been tampered with.
             */
            'signing_secret' => env('PAYSTACK_SECRET_KEY'),

            /*
             * The name of the header containing the signature.
             */
            'signature_header_name' => 'x-paystack-signature',

            /*
             *  This class will verify that the content of the signature header is valid.
             *
             * It should implement \Spatie\WebhookClient\SignatureValidator\SignatureValidator
             */
            'signature_validator' => \App\Services\Payment\Webhooks\Paystack\SignatureValidator::class,

            /*
             * This class determines if the webhook call should be stored and processed.
             */
            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,

            /*
             * This class determines the response on a valid webhook call.
             */
            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,

            /*
             * The classname of the model to be used to store webhook calls. The class should
             * be equal or extend Spatie\WebhookClient\Models\WebhookCall.
             */
            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,

            /*
             * In this array, you can pass the headers that should be stored on
             * the webhook call model when a webhook comes in.
             *
             * To store all headers, set this value to `*`.
             */
            'store_headers' => '*',

            /*
             * The class name of the job that will process the webhook request.
             *
             * This should be set to a class that extends \Spatie\WebhookClient\Jobs\ProcessWebhookJob.
             */
            'process_webhook_job' => \App\Jobs\ProcessPaystackWebhookJob::class,
        ],
        // [
        //     'name' => 'flutterwave',
        //     'signing_secret' => env('FLW_SECRET_HASH'),
        //     'signature_header_name' => 'verif-hash',
        //     'signature_validator' => \App\Webhooks\Flutterwave\SignatureValidator::class,
        //     'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
        //     'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
        //     'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
        //     'store_headers' => '*',
        //     'process_webhook_job' => \App\Jobs\ProcessFlutterwaveWebhookJob::class,
        // ],
    ],

    /*
     * The integer amount of days after which models should be deleted.
     *
     * It deletes all records after 30 days. Set to null if no models should be deleted.
     */
    'delete_after_days' => 30,

    /*
     * Should a unique token be added to the route name
     */
    'add_unique_token_to_route_name' => false,
];
