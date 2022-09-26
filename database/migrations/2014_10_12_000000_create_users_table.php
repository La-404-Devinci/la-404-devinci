<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('display_role', ['president', 'secretary', 'treasurer', 'member', 'golden_member', 'extern'])->nullable();
            $table->enum('role', ['admin', 'member'])->default('member');
            $table->string('avatar')->nullable();
            $table->string('twitter')->nullable();
            $table->string('github')->nullable();
            $table->string('dribbble')->nullable();
            $table->boolean('status');
            $table->timestamps();

            // Breeze
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
