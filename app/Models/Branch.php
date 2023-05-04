<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasUuids;

    protected $primaryKey = 'uuid';

    protected $guarded = [];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class,'admin_id');
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_uuid');
    }

    public function tables(): HasMany
    {
        return $this->hasMany(Table::class, 'branch_uuid');
    }

    public function places(): HasMany
    {
        return $this->hasMany(Place::class, 'branch_uuid');
    }
}
