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
        Schema::create('request', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25);
            $table->string('lastname', 25);
            $table->string('mail', 30);
            $table->char('phone',12)->nullable();
            $table->text('description');
            $table->dateTime('send_date');
            
            $table->foreignId('users_id')->constrained('users', 'id');
            $table->foreignId('request_type_id')->constrained('request_type', 'id');
            $table->foreignId('status_id')->constrained('status', 'id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};
