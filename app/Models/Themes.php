<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    use HasFactory;

    protected $primaryKey = "themeId";

    protected $fillable = [
        'theme_id',
        'theme_name',
        'theme_abbreviation',
    ];

    public $timestamps = true;

    public static function getUsedIds()
    {
        return static::pluck('themeId')->toArray();
    }
}
?>
