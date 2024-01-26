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
        Schema::create('Score', function (Blueprint $table) {
            $table->id('scoreId');
            $table->string('score');
            $table->foreignId('userId')->references('userId')->on('user')->onDelete('cascade');
            $table->foreignId('themeId')->references('themeId')->on('theme')->onDelete('cascade');
            $table->date('date');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Score');
    }
};
?>

