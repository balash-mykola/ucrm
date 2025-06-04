<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id('file_id');
            $table->string('file_path', 256);
            $table->string('file_type', 8)->default('');
            $table->integer('size')->nullable();
            $table->date('date_created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('hash', 256)->nullable();
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
