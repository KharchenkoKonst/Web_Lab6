<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Название фильма');
            $table->string('description',3000)->comment('Описание');
            $table->decimal('img')->comment('Картинка');
            $table->decimal('rate',12,2)->comment('Рейтинг');
            $table->decimal('genre',12,2)->comment('Жанр');
            $table->decimal('age',12,2)->comment('Возрастное ограничение');
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
        Schema::dropIfExists('products');
    }
}
