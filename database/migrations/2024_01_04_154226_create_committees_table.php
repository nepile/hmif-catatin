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
        Schema::create('committees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('divison_id')->nullable()->constrained('divisions', 'id')->nullOnDelete()->cascadeOnUpdate();
            $table->string('full_name');
            $table->string('call_name');
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable()->default(null);
            $table->string('nim');
            $table->string('place_born');
            $table->string('date_born');
            $table->string('origin_address');
            $table->string('domicile_address');
            $table->string('email');
            $table->string('no_wa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committees');
    }
};
