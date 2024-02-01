<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    use HasFactory;

    protected $primaryKey = "themeId";

    protected $fillable = [
        'name',
        'themeAbreviation',
    ];

    public $timestamps = false;
}
?>
