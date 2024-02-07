<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementsUser extends Model
{
    use HasFactory;
    protected $table = 'achievements_user';
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
