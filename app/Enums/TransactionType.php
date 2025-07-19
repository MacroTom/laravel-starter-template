<?php

namespace App\Enums;

enum TransactionType: string
{
    case Example = 'example';

    public function comment(): string
    {
        return match ($this) {
            self::Example => 'Example transaction',
        };
    }

    public function amount(string $country = 'ng'): string
    {
        $data = self::prices()[$this->value];

        return data_get($data, strtoupper($country), data_get($data, 'US'));
    }

    public static function toArray(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }

    public static function options(): array
    {
        return array_map(fn ($case) => ['label' => $case->name, 'value' => $case->value], self::cases());
    }

    public static function prices(): array
    {
        return [
            self::Example->value => [
                'NG' => null,
                'US' => null,
            ],
        ];
    }
}
