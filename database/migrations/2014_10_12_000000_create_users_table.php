<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('bussiness_name')->nullable()->comment('use as subdomain');
            $table->string('flag')->default(0)->nullable()->comment('take for future');
            $table->integer('status')->default(1)->nullable()->comment('1-active,0-inactive');
            $table->string('login_type')->default('web')->nullable()->comment('fb,google,web');
            $table->integer('verification_status')->default(0)->comment('1-verified, 0-not verified');
            $table->string('auth_key')->nullable()->comment('for social media login');
            $table->string('referance_id')->nullable()->comment('for subdomain case when makes user');
            $table->string('subdomain')->nullable()->comment('for subdomain case');
            $table->string('database_name')->nullable()->comment('for subdomain case');
            $table->integer('role')->nullable()->comment('SuperAdmin,Admin,User');
            $table->string('plan_id')->default(1)->comment('for subscription plan');
            $table->string('plan_expired')->nullable()->comment('for subscription');
            $table->integer('is_deleted')->default(0)->comment('0-not deleted,1-deleted');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
