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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('category_project_id')->unsigned();
            $table->mediumText('name');
            $table->mediumText('client_name');
            $table->mediumText('client_city');
            $table->longText('description_project');
            $table->longText('challenge');
            $table->longText('description_result');
            $table->foreign('category_project_id')->references('id')->on('category_projects')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
