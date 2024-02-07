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
        Schema::create('achievements_user', function (Blueprint $table) {
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('achievementId');
            $table->foreign('userId')->references('userId')->on('users')->onDelete('cascade');
            $table->foreign('achievementId')->references('achievementId')->on('achievements')->onDelete('cascade');
            $table->date('dateEarned');
            $table->primary(['userId', 'achievementId']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements_user');
    }
};
?>
