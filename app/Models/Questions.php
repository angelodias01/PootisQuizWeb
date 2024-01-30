<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme_id',
        'question_text',
        'correct_answer',
        'wrong_answer1',
        'wrong_answer2',
        'wrong_answer3',
    ];

    public $timestamps = false;

    public function theme()
    {
        return $this->belongsTo(Themes::class);
    }
}
?>

