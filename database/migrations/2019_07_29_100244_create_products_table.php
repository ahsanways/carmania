<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->enum('type', ['Car', 'Bike','Autopart']);
            $table->string('name');
            $table->integer('year')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('color')->nullable();
            $table->string('city');
            $table->enum('condition', ['New', 'Used']);
            $table->enum('transmission', ['Manual', 'Automatic'])->nullable();
            $table->string('image');
            $table->text('description');
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
