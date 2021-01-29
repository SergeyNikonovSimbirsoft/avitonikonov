<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('status_id')->unsigned();
            $table->string('title');
            $table->integer('category_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('description')->nullable();
            $table->timestamp('publication_at')->nullable();
            $table->decimal('price', 12, 2)->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('views');

            $table->foreign('status_id')
                ->references('id')
                ->on('ads_statuses')
                ->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('ads');
    }
}
