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
        Schema::create('portfolio_committees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('committee_id')->constrained('committees', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('proof');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_committees');
    }
};
