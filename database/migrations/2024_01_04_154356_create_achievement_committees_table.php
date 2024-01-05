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
        Schema::create('achievement_committees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('committee_id')->constrained('committees', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('activity');
            $table->string('feat');
            $table->string('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievement_committees');
    }
};
