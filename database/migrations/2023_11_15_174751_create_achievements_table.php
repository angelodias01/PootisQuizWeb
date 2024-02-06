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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id('achievementId');
            $table->string('achievementName');
            $table->text('description');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::table('achievements', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }

};
?>

