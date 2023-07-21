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
            $table->unsignedBigInteger('device_type_id');
            $table->unsignedBigInteger('device_role_id');
            $table->unsignedBigInteger('tanant_id');
            $table->unsignedBigInteger('platform_id');
            $table->unsignedBigInteger('site_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('rack_id');
            $table->float('position');
            $table->string('face');
            $table->string('status');
            $table->string('airflow');
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
