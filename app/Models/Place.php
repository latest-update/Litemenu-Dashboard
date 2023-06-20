<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Place extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'uuid';

    protected $guarded = [];

    public $timestamps = false;

    public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'places_uuid');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'branch_uuid');
    }
}
