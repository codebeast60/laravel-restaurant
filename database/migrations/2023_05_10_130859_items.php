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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('Name');
            $table->longText('description');
            $table->double('price');
            $table->timestamps();
            $table->id('Cat_id');
            $table->unsignedBigInteger('Member_id');
            $table->string('image_path');
            $table->foreign('Cat_id')->references('c_id')->on('categories');
            $table->foreign('Member_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
