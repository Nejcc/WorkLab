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
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('app_token_id');
//            $table->string('display');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            //R tags,
            //R custom_fields
            $table->timestamps();
        });

        Schema::create('manufacturers_log', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('app_token_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manufacturers');
        Schema::dropIfExists('manufacturers_log');
    }
};
