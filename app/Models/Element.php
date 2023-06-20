<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Element extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'uuid';

    protected $guarded = [];

    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class, 'dish_uuid');
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_uuid');
    }
}
