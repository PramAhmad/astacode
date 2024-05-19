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
        Schema::create('education_members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('member_id')->unsigned();
            $table->string('name');
            $table->smallInteger('from');
            $table->smallInteger('to');
            $table->mediumText('degree');
            $table->longText('description');  
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_members');
    }
};
