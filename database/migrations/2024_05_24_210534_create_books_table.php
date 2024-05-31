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
        Schema::create('books', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('image')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->string('keywords')->nullable();
            $table->text('description')->nullable();
            $table->string('author');
            $table->date('published_date')->nullable();
            $table->integer('pages')->nullable();
            $table->string('publisher')->nullable();
            $table->float('price')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
