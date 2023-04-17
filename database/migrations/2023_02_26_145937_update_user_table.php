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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('discount_news_check')->after('email_verified_at')->nullable();
            $table->integer('agree_data')->after('email_verified_at')->nullable();
            $table->json('shipping_addr')->after('email_verified_at')->nullable();
            $table->json('contact')->after('email_verified_at')->nullable();
            $table->json('billing_addr')->after('email_verified_at');
            $table->string('company_id_no')->after('email_verified_at')->nullable();
            $table->string('phone')->after('email_verified_at');
            $table->string('is_company')->after('email_verified_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('discount_news_check')->after('email_verified_at')->nullable();
            $table->integer('agree_data')->after('email_verified_at')->nullable();
            $table->json('shipping_addr')->after('email_verified_at')->nullable();
            $table->json('contact')->after('email_verified_at')->nullable();
            $table->json('billing_addr')->after('email_verified_at');
            $table->string('company_id_no')->after('email_verified_at')->nullable();
            $table->string('phone')->after('email_verified_at');
            $table->string('is_company')->after('email_verified_at');
        });
    }
};
