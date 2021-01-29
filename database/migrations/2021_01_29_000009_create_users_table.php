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
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('status_id')->unsigned();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique();
            $table->string('convenient_time_for_calls')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->foreign('status_id')
                ->references('id')
                ->on('user_statuses')
                ->onDelete('cascade');
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
