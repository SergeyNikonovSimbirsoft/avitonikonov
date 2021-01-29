<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('name')->unique();
            $table->string('code')->unique();
            $table->string('description')->nullable();
            $table->integer('parent_category_id')->unsigned()->nullable();
            $table->integer('sort');

            $table->foreign('parent_category_id')
                ->references('id')
                ->on('categories')
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
        Schema::dropIfExists('categories');
    }
}
