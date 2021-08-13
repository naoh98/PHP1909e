<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->string('book_title');
            $table->string('book_desc');
            $table->string('book_main_image');
            $table->string('book_images');
            $table->string('book_author');
            $table->string('book_status');
            $table->string('book_type');
            $table->double('book_price_core');
            $table->integer('book_tax');
            $table->double('book_price_sell');
            $table->dateTime('book_date_added');
            $table->dateTime('book_date_modified');
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
        Schema::dropIfExists('book');
    }
}
