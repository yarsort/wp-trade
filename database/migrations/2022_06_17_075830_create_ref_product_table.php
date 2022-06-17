<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_product', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(0);
            $table->integer('is_group')->default(0);
            $table->uuid('uid_supplier');// UID поставщика
            $table->uuid('uid');         // UID товара
            $table->uuid('uid_parent');  // UID родителя в иерархии
            $table->uuid('uid_unit');    // UID ед. изм.
            $table->string('code', 64);
            $table->string('name', 200);
            $table->string('model', 128);
            $table->string('vendor_code', 128);
            $table->double('quantity', 8, 2)->default(0.0);  // общее количество на складах
            $table->string('barcode', 128);
            $table->string('image', 255);
            $table->double('length', 8, 3)->default(0.0); // длина
            $table->double('width', 8, 3)->default(0.0);  // ширина
            $table->double('height', 8, 3)->default(0.0); // глубина / высота
            $table->uuid('product_group');  // Номенклатурная группа
            $table->longText('comment');
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
        Schema::dropIfExists('ref_product');
    }
}
