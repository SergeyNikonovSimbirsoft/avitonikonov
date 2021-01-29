<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModerationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moderations', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('moderated_at')->nullable();
            $table->integer('ads_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('resolution_id')->unsigned();
            $table->string("reason")->nullable();

            $table->foreign('ads_id')
                ->references('id')
                ->on('ads')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('resolution_id')
                ->references('id')
                ->on('resolutions')
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
        Schema::dropIfExists('moderations');
    }
}
