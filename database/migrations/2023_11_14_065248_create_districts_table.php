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
            $table->foreignId('regency_id')->constrained('regencies')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('parent_code')->index('district_parent_code_index');
            $table->string('code')->index('district_code_index');
            $table->string('name')->index('district_name_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
