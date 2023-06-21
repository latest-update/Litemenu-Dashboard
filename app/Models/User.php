<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\PermissionControl;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    use PermissionControl;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $guarded = [];

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class, 'owner_id');
    }

    public function branch(): HasOne
    {
        return $this->hasOne(Branch::class, 'admin_id');
    }

    public function access(): HasMany
    {
        return $this->hasMany(Access::class, 'user_id');
    }

    public function accessBranch()
    {
        return $this->belongsToMany(Branch::class, 'accesses');
    }

    public function profileImg(): string
    {
        $filename = "storage/profile/{$this->phone}.png";
        return file_exists($filename) ? asset($filename) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQG91Ivd0CD1UA-3GKi8OPGqO9BZvrfsclJFujvxLWQU6z0UR5xNec89_mVGFysedGeUo0&usqp=CAU';
    }

    public function getBranch(): object|null
    {
        if (!($branch = $this->branch()->first()))
        {
            $this->giveOwner();
            redirect()->to('/');
        }
        return $branch;
    }

}
