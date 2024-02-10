<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'userId';

    protected $fillable = [
        'username',
        'email',
        'password',
        'is_admin'
    ];

    public $timestamps = true;

    public static function getUsedIds()
    {
        return static::pluck('userId')->toArray();
    }
}
