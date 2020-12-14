<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); //categories le ilişkilendireceğimiz için category_id in minimum 0 alması gerekiyor. O yüzden unsignedBıgInteger kullandık.
            $table->string('title');
            $table->string('image');
            $table->longText('content');
            $table->integer('hit')->default(0);
            $table->string('slug');
            $table->timestamps();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade'); // diyelim ki eğlence kategorisinden bir yazı silindi. Silindiğinde veritabanından da silsin.composer require fzaninotto/faker
            //categories tablosundaki id i category_id bağla(ilişkilendir.)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
