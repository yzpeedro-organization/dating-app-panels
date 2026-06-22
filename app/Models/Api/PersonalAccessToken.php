<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonalAccessToken extends ApiModel
{

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'tokenable_id', 'id');
    }
}
