<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievements extends Model
{
    use HasFactory;

    protected $primaryKey = "achievementId";

    protected $fillable = ['achievementId', 'achievementName', 'description'];

    public $timestamps = true;

    public static function getUsedIds()
    {
        return static::pluck('achievementId')->toArray();
    }
}

?>
