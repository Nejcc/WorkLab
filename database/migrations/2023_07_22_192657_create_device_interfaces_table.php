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
        Schema::create('device_interfaces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('app_token_id');
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('linked_device_id')->nullable();
//            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('slug');
            $table->string('type');
            $table->string('label')->nullable();
            $table->string('port_number');
            $table->string('port_type')->default('lan');
            $table->integer('port_speed')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_interfaces');
    }
};
