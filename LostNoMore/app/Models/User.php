<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationships
     */

    // A user can report many lost items
    public function lostItems()
    {
        return $this->hasMany(LostItem::class, 'user_id');
    }

    // A user can report many found items
    public function foundItems()
    {
        return $this->hasMany(FoundItem::class, 'user_id');
    }

    // A user can make multiple claims
    public function claims()
    {
        return $this->hasMany(Claim::class, 'user_id');
    }
}
