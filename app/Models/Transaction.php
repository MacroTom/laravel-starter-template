<?php

namespace App\Models;

use App\Enums\Currency;
use App\Enums\PaymentProvider;
use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Traits\HasUidColumn;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasUidColumn;

    protected $fillable = [
        'user_id',
        'reference',
        'ext_reference',
        'amount',
        'currency',
        'payload',
        'payment_provider',
        'channel',
        'comment',
        'payment_link',
        'type',
        'status',
        'mode',
        'failed_at',
        'completed_at',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'failed_at' => 'datetime',
            'completed_at' => 'datetime',
            'payload' => 'array',
            'payment_provider' => PaymentProvider::class,
            'currency' => Currency::class,
            'type' => TransactionType::class,
            'status' => TransactionStatus::class,
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function finalStatus(): bool
    {
        /* @phpstan-ignore-next-line */
        return in_array(
            $this->status,
            [
                TransactionStatus::Failed,
                TransactionStatus::Completed,
            ],
            true
        );
    }

    #[Scope]
    protected function completed(Builder $query): void
    {
        $query->where('status', TransactionStatus::Completed);
    }

    #[Scope]
    protected function pending(Builder $query): void
    {
        $query->where('status', TransactionStatus::Pending);
    }

    #[Scope]
    protected function failed(Builder $query): void
    {
        $query->where('status', TransactionStatus::Failed);
    }

    #[Scope]
    protected function scopeSearch(Builder $query, ?string $value = null): void
    {
        $query->when($value, function ($q) use ($value) {
            $q->whereAny([
                'reference',
            ],
                'like',
                '%'.$value.'%'
            )
                ->orWhere(function ($q) use ($value) {
                    $q->whereHas('user', function ($rel) use ($value) {
                        $rel->where('name', 'like', '%'.$value.'%');
                    });
                });
        });
    }
}
