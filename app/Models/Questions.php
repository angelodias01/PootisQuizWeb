<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $primaryKey = "questionsId";

    protected $fillable = [
        'question_id',
        'theme_id',
        'question_text',
        'correct_answer',
        'wrong_answer_1',
        'wrong_answer_2',
        'wrong_answer_3',
        'selected_answer'
    ];

    public $timestamps = true;

    public static function getUsedIds()
    {
        return static::pluck('questionsId')->toArray();
    }

    public function theme()
    {
        return $this->belongsTo(Themes::class);
    }
}
?>

