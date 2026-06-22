<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;

#[Guarded([])]
class Boost extends ApiModel
{

    public function userBoosts(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            UserBoost::class,
            'boost_id',
            'user_id'
        );
    }

    public function getUsersActiveAttribute(): Collection
    {
        return $this
            ->userBoosts()
            ->where('expires_at', '>=', now())
            ->get();
    }
}
