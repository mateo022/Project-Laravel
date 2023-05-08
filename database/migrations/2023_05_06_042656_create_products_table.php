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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('name');
            $table->text('description');
            $table->integer('value');
            $table->boolean('status');
            $table->string('slug')->unique()->nullable();

             //Foreign Category
             $table->unsignedBigInteger('category_id')->unsigned();
             $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade')
             ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
