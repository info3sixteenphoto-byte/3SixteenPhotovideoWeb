<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('partner_one_name', 120);
            $table->string('partner_one_whatsapp', 30);
            $table->date('partner_one_birthday')->nullable();
            $table->string('partner_two_name', 120)->nullable();
            $table->string('partner_two_whatsapp', 30)->nullable();
            $table->date('partner_two_birthday')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('session_type', 120);
            $table->date('event_date')->nullable();
            $table->string('event_location', 150)->nullable();
            $table->text('internal_rundown');
            $table->unsignedTinyInteger('stage_index')->default(1);
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
