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
            $table->string('lastname');
            $table->string('firstname');
            // $table->enum('school', ['IIM', 'ESILV', 'EMLV']);
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('display_role', ['president', 'secretary', 'treasurer', 'gloden_member', 'member'])->nullable();
            $table->enum('role', ['user', 'member', 'admin'])->default('user');
            $table->string('avatar', 2048)->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
