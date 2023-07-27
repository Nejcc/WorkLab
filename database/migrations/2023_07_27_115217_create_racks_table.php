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
        Schema::create('racks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('app_token_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('slug');

            $table->unsignedBigInteger('site_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('facility_id')->nullable();
            $table->unsignedBigInteger('tenant_id')->nullable();

            $table->string('status');
            $table->string('role')->nullable();
            $table->text('description')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('asset_tag')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('racks');
    }
};
