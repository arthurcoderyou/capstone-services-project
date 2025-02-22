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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tagline');
            $table->bigInteger('service_category_id')->unsigned()->nullable();
            $table->decimal('price');
            $table->decimal('discount')->nullable();
            $table->enum('discount_type',['discount','percent'])->nullable();
            $table->string('image')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longText('description')->nullable();
            $table->longText('inclusion')->nullable();
            $table->longText('exclusion')->nullable();
            $table->boolean('status')->default(true);
            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
