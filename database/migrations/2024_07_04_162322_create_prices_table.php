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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('technology')->nullable();
            $table->string('features')->nullable();
            $table->string('pages')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->set('code', [1, 0])->default(0);
            $table->string('link')->nullable();
            $table->integer('days')->nullable();
            $table->string('service')->nullable();
            $table->set('type', ['basic', 'standard', 'premium'])->default('basic');
            $table->set('status', [1, 0])->default(1);
            $table->string('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
