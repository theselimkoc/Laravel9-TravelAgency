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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('detail')->nullable();
            $table->float('price')->nullable();
            $table->string('info')->nullable();
            $table->string('status',6)->default('False');
            $table->timestamps();
        });
    }};

    /**
     * Reverse the migrations.
     *
     * @return void
     */

