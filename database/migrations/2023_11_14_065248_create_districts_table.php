<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code')->index('district_code_index');
            $table->string('name')->index('district_name_index');
            $table->foreignId('province_code')->constrained('provinces', 'code')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('regency_code')->constrained('regencies', 'code')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
