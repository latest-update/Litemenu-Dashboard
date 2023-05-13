<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Ramsey\Uuid\Uuid;

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

    public function link()
    {
        return env('FRONTAPPACCESS_URL') .'/'. $this->temporary_key;
    }

    public function refreshLink()
    {
        $this->temporary_key = \Faker\Provider\Uuid::uuid();
        $this->save();
    }

}
