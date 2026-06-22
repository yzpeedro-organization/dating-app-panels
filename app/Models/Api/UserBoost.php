<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserBoost extends ApiModel
{

    public function boost(): BelongsTo
    {
        return $this->belongsTo(Boost::class, 'boost_id', 'id');
    }
}
