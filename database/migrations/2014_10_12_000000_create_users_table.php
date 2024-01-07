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
            $table->string('fullname');
            $table->string('address');
            $table->string('region');
            $table->text('motivation');
            $table->enum('role', ['financier', 'backend_dev', 'frontend_dev', 'marketing', 'admin', 'admin_user']);
            $table->string('email')->unique();
            $table->boolean('works_in_company')->default(false);
            $table->string('company_name')->nullable();
            $table->text('tasks_description')->nullable();
            $table->boolean('is_active')->default(false);
            $table->string('phone_number')->unique();
            $table->string('profile_picture')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
