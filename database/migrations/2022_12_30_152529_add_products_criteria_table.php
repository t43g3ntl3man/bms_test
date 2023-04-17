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
        Schema::create('products_criterias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('inner_diameter_1')->nullable();
            $table->string('inner_diameter_2')->nullable();
            $table->string('outer_diameter')->nullable();
            $table->string('grooves')->nullable();
            $table->string('cylinder_bore')->nullable();
            $table->string('standard_size')->nullable();
            $table->string('full_set')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_criterias');
    }
};
