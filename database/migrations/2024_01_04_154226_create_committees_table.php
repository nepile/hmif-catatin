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
            $table->foreignId('division_id')->nullable()->constrained('divisions', 'id')->nullOnDelete()->cascadeOnUpdate(); // temp
            $table->string('full_name'); // temp
            $table->string('call_name')->nullable();
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable()->default(null);
            $table->string('nim'); // temp
            $table->string('place_born')->nullable();
            $table->string('date_born')->nullable();
            $table->string('origin_address')->nullable();
            $table->string('domicile_address')->nullable();
            $table->string('email')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('gen'); // temp
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
