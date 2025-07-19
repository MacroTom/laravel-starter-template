<?php

namespace App\Enums;

enum Currency: string
{
    case Naira = 'naira';

    case Dollar = 'dollar';

    public function code(): string
    {
        return match ($this) {
            self::Naira => 'NGN',
            self::Dollar => 'USD',
        };
    }

    public static function fromCode(string $code): self
    {
        /* @phpstan-ignore-next-line */
        return match ($code) {
            self::Naira->code() => self::Naira,
            self::Dollar->code() => self::Dollar,
        };
    }

    public function symbol(): string
    {
        return match ($this) {
            self::Dollar => '$',
            self::Naira => '₦',
        };
    }

    public static function getByCountryIso(string $iso_code): self
    {
        return match (strtoupper($iso_code)) {
            'US' => self::Dollar,
            'NG' => self::Naira,
            default => self::Dollar,
        };
    }

    public static function getSymbolCountryIso(string $iso_code): string
    {
        return self::getByCountryIso(strtoupper($iso_code))->symbol();
    }

    public static function symbols(): array
    {
        return [
            'US' => self::Dollar->symbol(),
            'NG' => self::Naira->symbol(),
        ];
    }
}
