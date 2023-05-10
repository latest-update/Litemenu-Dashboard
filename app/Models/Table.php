<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Table extends Model
{
    use HasFactory;
    use HasUuids;
    protected $primaryKey = 'uuid';

    protected $guarded = [];

    protected $fillable = [
        'internal_id',
        'temporary_key',
        'branch_uuid'
    ];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'branch_uuid');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'table_uuid');
    }

}
