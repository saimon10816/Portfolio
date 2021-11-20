<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_books', function (Blueprint $table) {
            $table->id();
            $table->string('book');
            $table->string('bookInfo');
            $table->string('bookAuthor');
            $table->string('bookPublisher');
            $table->string('isbn');
            $table->string('orderAt');
            $table->date('bookPublishingDate');
            $table->longText('bookShopUrl');
            $table->longText('bookDetails');
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
        Schema::dropIfExists('add_books');
    }
}
