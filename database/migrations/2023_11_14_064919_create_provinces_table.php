<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('code')->index('province_code_index');
            $table->string('name')->index('province_name_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};
