<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('regencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id')->constrained('provinces')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('parent_code')->index('regency_parent_code_index');
            $table->string('code')->index('regency_code_index');
            $table->string('name')->index('regency_name_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('regencies');
    }
};
