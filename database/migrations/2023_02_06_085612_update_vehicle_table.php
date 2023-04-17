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
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('title_name')->nullable()->change();
            $table->unsignedBigInteger('vehicle_brand_models_id')->after('name')->nullable();
            $table->foreign('vehicle_brand_models_id')->references('id')->on('vehicle_brand_models');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('title_name')->nullable()->change();
            $table->unsignedBigInteger('vehicle_brand_models_id')->nullable();
            $table->foreign('vehicle_brand_models_id')->references('id')->on('vehicle_brand_models');
        });
    }
};
