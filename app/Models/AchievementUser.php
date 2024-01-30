<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementUser extends Model
{
    use HasFactory;

    protected $fillable = ['user_id',
        'achievement_id',
        'date_earned'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /*public function achievement()
    {
        return $this->belongsTo(Achievement::class);
    } */
}
?>
