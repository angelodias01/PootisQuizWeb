<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id('questionsId');
            $table->foreignId('themeId')->references('themeId')->on('theme')->onDelete('cascade');
            $table->string('questionsText');
            $table->string('correctAnswer');
            $table->string('wrongAnswer1');
            $table->string('wrongAnswer2');
            $table->string('wrongAnswer3');
            $table->string('selectedAnswer');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
?>

