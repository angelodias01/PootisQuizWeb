<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievements extends Model
{
    use HasFactory;

    protected $primaryKey = "achievementId";

    protected $fillable = ['name',
        'description'];

    public $timestamps = false;
}
?>
