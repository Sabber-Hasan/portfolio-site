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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('level', ['primary','secondary','higher secondary','diploma','bachelor','master','phd','other']);
            $table->string('institute');
            $table->string('board');
            $table->string('duration');
            $table->string('session');
            $table->string('subject');
            $table->string('group')->nullable();
            $table->string('division')->nullable();
            $table->string('grade');
            $table->string('grade_out_of');
            $table->string('passing_year');
            $table->set('status', [1, 0])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
