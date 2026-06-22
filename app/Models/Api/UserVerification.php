<?php

namespace App\Models\Api;

use App\Models\Scopes\Api\OnlyManualVerification;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Guarded([])]
#[ScopedBy(OnlyManualVerification::class)]
class UserVerification extends ApiModel
{

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function approve(): void
    {
        $this->status = 'approved';
        $this->verified_at = now();
        $this->rejection_reason = null;

        $this->save();
    }

    public function isApproved(): bool
    {
        return $this->status === 'approved';
    }

    public function reject(string $reason): void
    {
        $this->status = 'rejected';
        $this->verified_at = now();
        $this->rejection_reason = $reason;

        $this->save();
    }
}
