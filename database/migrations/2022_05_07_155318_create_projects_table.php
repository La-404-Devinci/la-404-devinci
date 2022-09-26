<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('description');
            $table->longText('content');
            $table->foreignId('thumbnail')->nullable()->constrained('files');
            $table->string('website')->nullable();
            $table->string('dribbble')->nullable();
            $table->string('github')->nullable();
            $table->boolean('published')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
