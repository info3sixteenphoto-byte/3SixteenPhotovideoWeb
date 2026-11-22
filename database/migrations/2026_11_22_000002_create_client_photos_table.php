<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->string('code', 150);
            $table->string('title', 150);
            $table->string('storage_path')->nullable();
            $table->boolean('edit')->default(false);
            $table->boolean('album')->default(false);
            $table->timestamps();

            $table->unique(['client_id', 'code']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_photos');
    }
};
