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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('campus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('location', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('campus_id');
            $table->unsignedBigInteger('supervisor_id');
            $table->timestamps();
            $table->foreign('campus_id')->references('id')->on('campus');
            $table->foreign('supervisor_id')->references('id')->on('users');
        });

        Schema::create('lost_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('description')->nullable();
            $table->string('item_title');
            $table->unsignedBigInteger('owner_id');
            $table->date('lost_date');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('location_id');
            $table->string('img_path')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('location_id')->references('id')->on('location');
        });

        Schema::create('found_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('description')->nullable();
            $table->string('item_title');
            $table->unsignedBigInteger('finder_id');
            $table->date('find_date');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('lost_item_id');
            $table->unsignedBigInteger('pickup_location');
            $table->string('preference')->nullable();
            $table->string('img_path')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('finder_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('lost_item_id')->references('id')->on('lost_items')->nullable();
            $table->foreign('pickup_location')->references('id')->on('location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lost_items');
        Schema::dropIfExists('found_items');
    }
};
