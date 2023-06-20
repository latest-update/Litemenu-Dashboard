<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'uuid';

    protected $guarded = [];

    protected $casts = [
        'image' => 'array'
    ];

    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class, 'place_uuid');
    }

    public function elements(): HasMany
    {
        return $this->hasMany(Element::class, 'event_uuid');
    }

    public function dishes(): BelongsToMany
    {
        return $this->belongsToMany(Dish::class, 'elements');
    }
}
