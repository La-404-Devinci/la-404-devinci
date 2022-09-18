<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects_tags', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained('projects');
            $table->foreignId('tag_id')->constrained('tags');
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects_tags');
    }
};
