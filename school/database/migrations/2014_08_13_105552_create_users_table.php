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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable()->default('/default-profile.png');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->enum('role', ['admin', 'teacher', 'student', 'gurdian', 'parent']);
            $table->string('phone')->nullable();
            $table->enum('gender',['male','female']);
            $table->string('address');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->timestamps();

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
