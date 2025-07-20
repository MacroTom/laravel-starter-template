<?php

namespace App\Enums;

use App\Models\Subdivision;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

/**
 * @method static Collection where(string $column, string $value)
 * @method static array all()
 * @method static Collection pluck(string $column)
 */
enum Subdivisions: string
{
    protected static function jsonPath(): string
    {
        return app_path('Json/subdivisions.json');
    }

    protected static function collection(): Collection
    {
        return collect(File::json(self::jsonPath()))
            ->map(fn ($item) => new Subdivision($item));
    }

    public static function __callStatic($name, $arguments)
    {
        return self::collection()->{$name}(...$arguments);
    }
}
