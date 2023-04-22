<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // далее мы создаем таблицу базы данных для продуктов
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            // делаем индивидуальный id
            $table->id();
            // имя товару
            $table->string('name');
            // описание 
            $table->text('description');
            // уст столбец для цены, также укз кол-во символов макс и после запятой, это позволит округлять
            $table->decimal('price', 8, 2);
            // картиники
            $table->string('image');
            // делаем поле для связи с категориями
            $table->unsignedBigInteger('category_id');
            // здесь мы создаем связь с созданым полем
            $table->foreign('category_id')->references('id')->on('categories');
            // даты создания
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
