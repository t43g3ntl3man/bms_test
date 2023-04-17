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
        Schema::table('companies', function (Blueprint $table) {
            $table->json('companyObj')->nullable();
            $table->json('contactPersonObj')->nullable();
            $table->string('differentAddrCheck')->nullable();
            $table->json('shippingAddrObj')->nullable();
            $table->string('companyNewsletterCheck')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->json('companyObj')->nullable();
            $table->json('contactPersonObj')->nullable();
            $table->json('differentAddrCheck')->nullable();
            $table->json('shippingAddrObj')->nullable();
            $table->string('companyNewsletterCheck')->nullable();
        });
    }
};
