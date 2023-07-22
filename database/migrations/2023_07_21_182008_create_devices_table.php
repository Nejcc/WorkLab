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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('app_token_id');
//            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('slug');
            $table->string('part_number')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('device_type_id')->nullable();
            $table->unsignedBigInteger('device_role_id')->nullable();
            $table->unsignedBigInteger('tanant_id')->nullable();
            $table->unsignedBigInteger('platform_id')->nullable();
            $table->unsignedBigInteger('site_id')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->unsignedBigInteger('rack_id')->nullable();
            $table->float('position')->nullable();
            $table->string('face')->nullable();
            $table->smallInteger('u_height')->default(0);
            $table->boolean('is_full_depth')->default(false);
            $table->string('status')->nullable();
            $table->string('airflow')->nullable();
//            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
